<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/iziToast.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/welcome.css') }}"> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/iziToast.min.js') }}"></script>


</head>
<nav class="navbar navbar-expand-lg bg-body-tertiary rounded m-3" aria-label="Thirteenth navbar example">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11"
            aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
            <a class="navbar-brand col-lg-3 me-0" href="#">Centered nav</a>
            <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">Dropdown</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                <button class="btn btn-primary">Button</button>
            </div>
        </div>
    </div>
</nav>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Прогресс Бар</title>
    <style>
        .progress-container {
            width: 100%;
            background-color: #e0e0e0;
            border-radius: 10px;
            overflow: hidden;
        }

        .progress-bar {
            height: 30px;
            width: 0; /* Начальная ширина (можно изменить динамически) */
            background-color: #76c7c0;
            text-align: center;
            line-height: 30px; /* Выравнивание текста по центру */
            color: white;
            transition: width 0.5s; /* Плавный переход */
        }
    </style>
</head>
<body>

<div class="progress-container">
    <div class="progress-bar" id="progressBar">0%</div>
</div>

<script>
    function updateProgressBar(current, total) {
        const progressBar = document.getElementById('progressBar');
        const percentage = (current / total) * 100;
        progressBar.style.width = percentage + '%';
        progressBar.textContent = Math.round(percentage) + '%';
    }

    // Пример использования
    let currentAmount = 0;
    const totalAmount = 100; // Целевая сумма

    const interval = setInterval(() => {
        currentAmount += 10; // Увеличиваем сумму
        if (currentAmount > totalAmount) {
            currentAmount = totalAmount; // Не превышаем целевую сумму
            clearInterval(interval); // Останавливаем обновление
        }
        updateProgressBar(currentAmount, totalAmount);
    }, 1000); // Обновляем каждую секунду
</script>

</body>
</html>

<div class="container">
    @if (Auth::User())
        <b>{{ Auth::User()->name }}</b>
    @else
        <a href="{{ route('steamAuth') }} "
            class="rounded-md px-3 py-2 
  text-black ring-1 ring-transparent transition 
  hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] 
  dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Войти
            через
            Steam</a>
    @endif
</div>



<section>
    <div class="container py-4">

        <div class="col-md-12 mb-5 main-card ">
            <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                <div href="#" class="d-flex align-items-start">
                    <h2>Прикладная робототехника</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" viewBox="0 0 24 24">
                        <path fill="black" d="M12 2c2.65 0 5.19 1.06 7.07 2.93l-1.42 1.42A7.994 7.994 0 0 0 12 4c-2.12 0-4.16.84-5.65 2.35L4.93 4.93C6.81 3.06 9.35 2 12 2M3.66 6.5l1.45 1.44A8.043 8.043 0 0 0 4 12a8 8 0 0 0 8 8a8 8 0 0 0 8-8c0-1.43-.39-2.83-1.12-4.06l1.46-1.44A9.93 9.93 0 0 1 22 12a10 10 0 0 1-10 10A10 10 0 0 1 2 12c0-1.96.58-3.88 1.66-5.5M12 6a6 6 0 0 1 6 6c0 1.59-.63 3.12-1.76 4.24l-1.41-1.41a4.004 4.004 0 0
             1-5.66 0l-1.41 1.41A5.97 5.97 0 0 1 6 12a6 6 0 0 1 6-6m0 2a1 1 0
              0 0-1 1a1 1 0 0 0 1 1a1 1 0 0 0 1-1a1 1 0 0 0-1-1Z" />
                    </svg>
                </div>
                <p>Серия робототехнических соревновательных направлений
                    Обучающиеся которые принимают участие в соревнованиях "Прикладная робототехника" занимаются
                    разработкой роботов и робототехнических систем для выполнения практических задач. Такие задачи могут
                    включать в себя автоматизацию промышленных процессов, выполнение опасных или трудных работ, а также
                    улучшение качества жизни людей.</p>
                <a class="btn btn-dark" href="{{ url('/directions') }}" type="button">Подробнее</a>
            </div>
        </div>
        <div class="row align-items-md-stretch">
            <div class="col-md-6 mb-3 main-card">
                <div class="h-100 p-5 text-bg-dark rounded-3">
                    <div href="#" class="d-flex align-items-start">
                        <h2>Мобильная робототехника</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" viewBox="0 0 15 15">
                            <path fill="white" fill-rule="evenodd" d="M4 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1-.5-.5v-10ZM4.5 1A1.5 1.5 0 0 0 3 2.5v10A1.5 1.5 0 0 0 4.5
              14h6a1.5 1.5 0 0 0 1.5-1.5v-10A1.5 1.5 0 0 0 10.5 1h-6ZM6
               11.65a.35.35 0 1 0 0 .7h3a.35.35 0 1 0 0-.7H6Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <p>Особенность данной образовательной программы заключается в том, что учащиеся изучают основы
                        робототехники на базе образовательного конструктора VEX IQ, что даѐт им возможность создавать
                        оригинальные модели, воплощать свои самые смелые конструкторские идеи, изучать среду
                        программирования RobotC; VEXcode IQ.
                        Образовательная программа «Мобильная робототехника» позволяет не только обучить ребенка
                        правильно моделировать и конструировать,
                        но и подготовить обучающихся к планированию и проектированию технических проектов и в дальнейшем
                        осуществить осознанный выбор
                        вида деятельности в техническом творчестве.</p>
                    <p class=""><small class="">Возраст обучающихся: 12-18 лет</small></p>
                    <p class=""><small class="">Уровень программы: углубленный</small></p>
                    <a class="btn btn-light" href="{{ url('/directions') }}" type="button">Подробнее</a>
                </div>
            </div>
            <div class="col-md-6 mb-3 main-card">
                <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                    <div href="#" class="d-flex align-items-start">
                        <h2>Робототехника и мехатроника</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" viewBox="0 0 48 48">
                            <g fill="none" stroke="black" stroke-width="4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 35a2 2 0 0 1 2-2h34a2 2 0 0 1 2 2v7H5v-7Zm37-17h-8l-6-6l6-6h8" />
                                <circle cx="8" cy="12" r="4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 12h16m-18 4l8 17" />
                            </g>
                        </svg>
                    </div>
                    <p>Во время занятий учащиеся в занимательной форме знакомятся с робототехникой,
                        программированием микроконтроллеров для роботов шаг за шагом, практически с нуля. Избегая
                        сложных математических формул, на практике, через эксперимент, обучающиеся постигают физику
                        процессов, происходящих в роботах, включая двигатели, датчики, источники питания,
                        микроконтроллеры и др.
                        Для проведения занятий используется образовательный конструктор Lego Mindstorms EV3,
                        на основе которого можно создать различные робототехнические системы.</p>
                    <p class=""><small class="">Возраст обучающихся: 12-18 лет</small></p>
                    <p class=""><small class="">Уровень программы: базовый</small></p>
                    <a class="btn btn-outline-danger" href="{{ url('/directions') }}" type="button">Подробнее</a>
                </div>
            </div>
        </div>

        <hr class=" my-5">


        {{-- <body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <svg id="background" class="absolute -left-20 top-0 max-w-[877px]" xmlns="http://www.w3.org/2000/svg"
            fill="#7366BD" viewBox="0 0 877 968">
            <g clip-path="url(#a)">
                <circle cx="391" cy="391" r="390.5" stroke="#E6A8D7" transform="matrix(-1 0 0 1 416 -56)" />
                <circle cx="468" cy="468" r="467.5" stroke="#A18594" opacity=".3"
                    transform="matrix(-1 0 0 1 493 -133)" />
                <circle cx="558" cy="558" r="557.5" stroke="#8673A1" opacity=".1"
                    transform="matrix(-1 0 0 1 583 -223)" />
                <g filter="url(#b)">
                    <ellipse cx="583" cy="229.5" fill="#8A2BE2" rx="583" ry="229.5"
                        transform="matrix(-1 0 0 1 621 -9)" />
                </g>
                <g filter="url(#c)">
                    <ellipse cx="262" cy="184.5" fill="#fff" rx="262" ry="184.5"
                        transform="matrix(-1 0 0 1 99 42)" />
                </g>
            </g>
            <defs>
                <filter id="b" width="1614" height="907" x="-769" y="-233"
                    color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feGaussianBlur result="effect1_foregroundBlur_3089_39042" stdDeviation="112" />
                </filter>
                <filter id="c" width="972" height="817" x="-649" y="-182"
                    color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feGaussianBlur result="effect1_foregroundBlur_3089_39042" stdDeviation="112" />
                </filter>
                <clipPath id="a">
                    <path fill="#fff" d="M877 0H0v968h877z" />
                </clipPath>
            </defs>
        </svg>





        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <div class="flex lg:justify-center lg:col-start-2">
                        <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </header>
                <div class="container mt-5">
                    <div class="progress">
                        <div id="progress-bar" class="progress-bar progress-bar-striped" style="width: 0%;">
                            0%
                        </div>
                    </div>
                    <button id="increase-btn" class="btn btn-primary mt-3">Increase Progress by 5%</button>
                </div>

                <main class="mt-6">
                    @if (Auth::User())
                        <b>{{ Auth::User()->name }}</b>
                    @else
                        <a href="{{ route('steamAuth') }} "
                            class="rounded-md px-3 py-2 
                        text-black ring-1 ring-transparent transition 
                        hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] 
                        dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Войтичерез
                            Steam</a>
                    @endif
                    <div class="container px-4 py-5">
                        <h2 class="pb-2 border-bottom">Features with title</h2>

                        <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
                            <div class="col d-flex flex-column align-items-start gap-2">
                                <h2 class="fw-bold text-body-emphasis">Left-aligned title explaining these awesome
                                    features</h2>
                                <p class="text-body-secondary">Paragraph of text beneath the heading to explain the
                                    heading. We'll add onto it with another sentence and probably just keep going until
                                    we run out of words.</p>
                                <a href="#" class="btn btn-primary btn-lg">Primary button</a>
                            </div>

                            <div class="col">
                                <div class="row row-cols-1 row-cols-sm-2 g-4">
                                    <div class="col d-flex flex-column gap-2">
                                        <div
                                            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                                            <svg class="bi" width="1em" height="1em">
                                                <use xlink:href="#collection" />
                                            </svg>
                                        </div>
                                        <h4 class="fw-semibold mb-0 text-body-emphasis">Featured title</h4>
                                        <p class="text-body-secondary">Paragraph of text beneath the heading to explain
                                            the heading.</p>
                                    </div>

                                    <div class="col d-flex flex-column gap-2">
                                        <div
                                            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                                            <svg class="bi" width="1em" height="1em">
                                                <use xlink:href="#gear-fill" />
                                            </svg>
                                        </div>
                                        <h4 class="fw-semibold mb-0 text-body-emphasis">Featured title</h4>
                                        <p class="text-body-secondary">Paragraph of text beneath the heading to explain
                                            the heading.</p>
                                    </div>

                                    <div class="col d-flex flex-column gap-2">
                                        <div
                                            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                                            <svg class="bi" width="1em" height="1em">
                                                <use xlink:href="#speedometer" />
                                            </svg>
                                        </div>
                                        <h4 class="fw-semibold mb-0 text-body-emphasis">Featured title</h4>
                                        <p class="text-body-secondary">Paragraph of text beneath the heading to explain
                                            the heading.</p>
                                    </div>

                                    <div class="col d-flex flex-column gap-2">
                                        <div
                                            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                                            <svg class="bi" width="1em" height="1em">
                                                <use xlink:href="#table" />
                                            </svg>
                                        </div>
                                        <h4 class="fw-semibold mb-0 text-body-emphasis">Featured title</h4>
                                        <p class="text-body-secondary">Paragraph of text beneath the heading to explain
                                            the heading.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <div class="container px-4 py-5" id="custom-cards">
                    <h2 class="pb-2 border-bottom">Custom cards</h2>

                    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                        <div class="col">
                            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                                style="background-image: url('images/unsplash-photo-1.jpg');">
                                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h3>
                                    <ul class="d-flex list-unstyled mt-auto">
                                        <li class="me-auto">
                                            <img src="https://github.com/twbs.png" alt="Bootstrap" width="32"
                                                height="32" class="rounded-circle border border-white">
                                        </li>
                                        <li class="d-flex align-items-center me-3">
                                            <svg class="bi me-2" width="1em" height="1em">
                                                <use xlink:href="#geo-fill" />
                                            </svg>
                                            <small>Earth</small>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <svg class="bi me-2" width="1em" height="1em">
                                                <use xlink:href="#calendar3" />
                                            </svg>
                                            <small>3d</small>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                                style="background-image: url('images/unsplash-photo-2.jpg');">
                                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to
                                        multiple lines</h3>
                                    <ul class="d-flex list-unstyled mt-auto">
                                        <li class="me-auto">
                                            <img src="https://github.com/twbs.png" alt="Bootstrap" width="32"
                                                height="32" class="rounded-circle border border-white">
                                        </li>
                                        <li class="d-flex align-items-center me-3">
                                            <svg class="bi me-2" width="1em" height="1em">
                                                <use xlink:href="#geo-fill" />
                                            </svg>
                                            <small>Pakistan</small>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <svg class="bi me-2" width="1em" height="1em">
                                                <use xlink:href="#calendar3" />
                                            </svg>
                                            <small>4d</small>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                                style="background-image: url('images/unsplash-photo-3.jpg');">
                                <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here
                                    </h3>
                                    <ul class="d-flex list-unstyled mt-auto">
                                        <li class="me-auto">
                                            <img src="https://github.com/twbs.png" alt="Bootstrap" width="32"
                                                height="32" class="rounded-circle border border-white">
                                        </li>
                                        <li class="d-flex align-items-center me-3">
                                            <svg class="bi me-2" width="1em" height="1em">
                                                <use xlink:href="#geo-fill" />
                                            </svg>
                                            <small>California</small>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <svg class="bi me-2" width="1em" height="1em">
                                                <use xlink:href="#calendar3" />
                                            </svg>
                                            <small>5d</small>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
    </div>
    </div>
    </div>
    </body>
    <script>
        $(document).ready(function() {
            var success = '{{ session('success') }}';
            var username = '{{ session('username') }}';

            if (success) {
                iziToast.show({
                    title: username,
                    message: 'вы успешно авторизованы через Steam!',
                    position: 'topCenter',
                    timeout: 3000,
                    transitionIn: 'fadeInDown',
                    transitionOut: 'fadeOutUp'
                });
            }
        });
    </script>


    <script>
        document.getElementById('increase-btn').addEventListener('click', function() {
            var progressBar = document.getElementById('progress-bar');
            var currentProgress = parseInt(progressBar.style.width);
            if (currentProgress < 100) {
                var newProgress = Math.min(currentProgress + 5, 100);
                progressBar.style.width = newProgress + '%';
                progressBar.textContent = newProgress + '%';
            }
        });
    </script>

    </body>

</html>
