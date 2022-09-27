<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Simple Employees App CRUD" />
        <meta name="keywords" contetn="HTML, CSS, JavaScript, Bootstrap, PHP 8, OOP, Laravel 9" />
        <meta name="author" content="Agnieszka Leśków" mail="agnieszkaleskow@gmail.com" />

        <title>@yield('title','Home') - Employees App CRUD</title>
      
        <!-- Scripts -->
        @vite(['resources/js/app.js'])

    </head>
    <body id="master">
     <h1>Employees App CRUD Welcome!</h1>
        <header  class="">
         <nav class="navbar navbar-expand-lg navbar-light bg-primary shadow-sm text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a href="{{ url('/') }}" class="navbar-brand text-white">
                    {{ config('app.employees-app-crud','Employees App CRUD') }}
                </a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded"
                    type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded text-white"
                                href="{{ route('pages.about') }}">About Us</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded text-white"
                                href="{{ route('employees.list') }}">Employees list</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded text-white"
                                href="#">Add a new employee</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded text-white"
                                href="{{ route('pages.contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
         </nav>
        </header>
        <main class="bg-secondary py-5 text-center">
            @yield('content')
        </main>

        <footer class="bg-primary py-4">
            <div class="container py-4 text-center">
                <section class="row">
                    <div class="footer-contact col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">
                            <p class="lead mb-0">
                                <a href="{{ url('/contact') }}" class="nav-link text-white py-1">
                                    We Invite You To Contact Us!
                                </a>
                                <a href="{{ url('/') }}" class="nav-link text-uppercase py-1">
                                    CRUD APP EMPLOYEES
                                </a>
                            </p>
                        </h4>
                    </div>
                    <div class="footer-links col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">
                            Employee managment
                        </h4>
                        <a href="{{ route('employees.list') }}" class="nav-link text-white py-1">
                           Employees List
                        </a>
                        <a href="#" class="nav-link text-white py-1">
                            Adding New Employees
                        </a>
                        <a href="#" class="nav-link text-white py-1">
                            
                        </a>
                    </div>
                    <div class="footer-about-text col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">
                                About the project
                        </h4>
                        <p class="lead mb-0 text-white text-uppercase">
                            Demonstration project enabling display, adding,
                        updating, removing employees.
                        </p>
                    </div>
                </section>

                <section class="copyright text-center text-dark pt-5">
                    <p>&copy; {{ date('Y') }}
                        Employees App CRUD | Laravel 9 | PHP {{ PHP_VERSION }}
                    </p>
                </section>
            </div>
        </footer>

    </body>
</html>