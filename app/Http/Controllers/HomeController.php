<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Получаем текущего авторизованного пользователя
        $user = Auth::user();

        // Передаем данные пользователя в представление
        return view('home', compact('user'));
    }
}
