<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\HttpFactory;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Ilzrv\LaravelSteamAuth\Exceptions\Authentication\SteamResponseNotValidAuthenticationException;
use Ilzrv\LaravelSteamAuth\Exceptions\Validation\ValidationException;
use Ilzrv\LaravelSteamAuth\SteamAuthenticator;
use Ilzrv\LaravelSteamAuth\SteamUserDto;

final class SteamAuthController
{
    public function __invoke(
        Request $request,
        Redirector $redirector,
        Client $client,
        HttpFactory $httpFactory,
        AuthManager $authManager,
    ): RedirectResponse {
        $steamAuthenticator = new SteamAuthenticator(
            new Uri($request->getUri()),
            $client,
            $httpFactory,
        );

        try {
            $steamAuthenticator->auth();
        } catch (ValidationException | SteamResponseNotValidAuthenticationException) {
            return $redirector->to(
                $steamAuthenticator->buildAuthUrl()
            ); 
        }
        $steamUser = $steamAuthenticator->getSteamUser();
        session(['username' => $steamUser->getPersonaName()]); 

        $authManager->login(
            $this->firstOrCreate($steamUser),
            true
        );
        session()->flash('success', 'Вы успешно авторизованы через Steam!');
        return $redirector->to('/'); // Переход на страницу /home
    }

    private function firstOrCreate(SteamUserDto $steamUser): User
    {
        // Пытаемся найти пользователя по steam_id
        $user = User::where('steam_id', $steamUser->getSteamId())->first();

        // Если пользователь найден, проверяем, изменилось ли имя
        if ($user) {
            // Если имя изменилось, обновляем его
            if ($user->name !== $steamUser->getPersonaName()) {
                $user->name = $steamUser->getPersonaName();
                $user->save(); // Сохраняем изменения в базе данных
            }
            if ($user->avatar !== $steamUser->getAvatarFull()) {
                $user->avatar = $steamUser->getAvatarFull();
                $user->save(); // Сохраняем изменения в базе данных
            }
            
            return $user;
        }

        // Если пользователь не найден, создаем нового
        return User::create([
            'steam_id' => $steamUser->getSteamId(),
            'name' => $steamUser->getPersonaName(), // Убедитесь, что эта функция возвращает корректное значение.
            'avatar' => $steamUser->getAvatarFull(),
            'player_level' => $steamUser->getPlayerLevel(),
        ]);
    }
}
