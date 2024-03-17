<div>
    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <link rel="stylesheet" href="src/scss/app.css">
    </head>
    <body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('index.application') }}">WayUp City</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index.application') }}">Заявки</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Мои заявки
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="add-ticket.html">Добавить</a></li>
                                <li><a class="dropdown-item" href="{{ route('show.application') }}">Мои заявки <span class="badge bg-secondary">4</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="tickets-control.html" class="nav-link">Управление заявками</a>
                        </li>
                    </ul>
                        @if (auth()->check())
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">Выйти</button>
                        </form>
                        @else
                        <div class="right-side d-flex">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Аккаунт
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="accountDropdown">
                                        <li><a class="dropdown-item" href="{{ route('login.index') }}">Вход</a></li>
                                        <li><a class="dropdown-item" href="{{ route('register.index') }}">Регистрация</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Поиск заявок" aria-label="Поиск заявок">
                                <button class="btn btn-outline-success" type="submit">Поиск</button>
                            </form>
                        </div>
                        @endif
                </div>
            </div>
        </nav>
    </header>
    <section class="main">
        <div class="container">
            <div class="row">
                <h2 class="display-6 mb-3">Заявки</h2>
            </div>
            @foreach ($applications as $application)
            <div class="row">
                @foreach ($application->images as $image)
                <div class="card mb-3">
                    <img src="{{ $application->image }}" style="width: 50%" class="card-img-top" alt="...">
                    <div class="card-body" >
                        <h5 class="card-title">{{ $application->name}}<span class=" rounded-pill {{ $image->color }}" style="background-color: {{ $image->background }}">{{ $image->status }}</span> </h5>
                        <p class="card-text">{{ $application->description }}</p>
                        <p class="card-text"><small class="text-muted">{{ date($application->created_at) }}</small></p>
                    </div>
                </div>
                
                <div class="card mb-3">
                    <img src="{{ $application->image }}" style="width: 50%" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $application->name}}<span class=" rounded-pill {{ $image->color }}" style="background: {{ $image->background }}">{{ $image->status }}</span> </h5>
                        <p class="card-text">{{ $application->description }}</p>
                        <p class="card-text"><small class="text-muted">{{ date($application->created_at) }}</small></p>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    </body>
    </html>
    
</div>
