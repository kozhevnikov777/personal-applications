<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <nav class="py-2 bg-light border-bottom navbar">
        <div class="container d-flex flex-wrap">
          <ul class="nav me-auto">
            <li class="nav-item"><a href="/home" class="nav-link link-dark px-2 active" aria-current="page">Главная</a></li>
            <li class="nav-item"><a href="/records" class="nav-link link-dark px-2">Записи</a></li>
            <li class="nav-item"><a href="/about" class="nav-link link-dark px-2">Про нас</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Поддержка</a></li>
          </ul>
          <ul class="nav">
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Войти</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Зарегистрироваться</a></li>
          </ul>
        </div>
      </nav>
      <header class="py-3 mb-4 border-bottom navbar">
        <div class="container d-flex flex-wrap ">
          <a href="/home" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Записная книжка IT специалиста</span>
          </a>
          <form class="col-12 col-lg-auto mb-3 mb-lg-0">
            <input type="search" class="form-control" placeholder="Поиск..." aria-label="Search">
          </form>
        </div>
      </header>
      <div class="container">
        @yield('main_content')
      </div>
  </body>
</html>
