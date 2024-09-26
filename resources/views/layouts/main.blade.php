<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    <!--css bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!--css do projeto-->
    <link rel="stylesheet" href="/style.css" />
    <!--javascript bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        
</head>

<body>
    <div class="d-flex flex-column wrapper">
    <!--navbar-->
    <header>
        <nav class="navbar navbar-expand-lg bg-color" id="navbar">
            <div class="container py-1">
                <a href="#" class="navbar-brand">
                    <img src="/img/logo.png" alt="Logo Cãotinho">
                    <span class="primary-color">CãotinhoPet</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-items"
                    aria-controls="navbar-items" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbar-items">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/caes" class="nav-link primary-color {{ request()->is('caes') ? 'active' : '' }}">Cães</a>
                        </li>
                        <li class="nav-item">
                            <a href="/gatos" class="nav-link primary-color {{ request()->is('gatos') ? 'active' : '' }}">Gatos</a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </nav>
    </header>

    @yield('content')

    <!--footer-->
    <footer class="container-fluid bg-color" id="footer">
        <div class="container">
            <div class="row">
                <!--topo footer-->
                <div class="col-12" id="footer-top">
                    <div class="row justify-content-between">
                        <div class="col-4"><h2>CãotinhoPet</h2></div>
                        <div class="col-4" id="social-icons">
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-youtube"></i>
                            <i class="bi bi-twitter"></i>
                        </div>
                    </div>
                </div>
                <!--footer detalhes-->
                <div class="col-12" id="footer-details">
                    <div class="row">
                        <div class="col-12 col-md-4" id="news-container">
                            <h4>Fique por dentro das novidades</h4>
                            <p class="secondary-color">Inscreva-se para receber em primeira mão</p>
                            <form>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Digite seu e-mail">
                                </div>
                                <button class="btn btn-dark" type="submit">Inscreva-se</button>
                            </form>
                        </div>
                        <div class="col-12 col-md-4" id="contact-container">
                            <h4>Contato</h4>
                            <p class="secondary-color">(41)99999-9999</p>
                            <p class="secondary-color">exemplo@gmail.com</p>
                        </div>
                        <div class="col-12 col-md-4" id="links-container">
                            <div class="row">
                                <h4>Buscar</h4>
                                <div class="col-6">
                                    <ul class="list-unstyled">
                                        <li><a href="/caes" class="secondary-color">Cães</a></li>
                                        <li><a href="/gatos" class="secondary-color">Gatos</a></li>
                                    
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="list-unstyled">
                                        <li><a href="#" class="secondary-color">Denunciar erro</a></li>
                                        <li><a href="#" class="secondary-color">Sugerir mudanças</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--parte de baixo do footer-->
                <div class="col-12" id="footer-bottom">
                    <div class="row justify-content-between">
                        <div class="col-12 col-md-3">
                            <p class="secondary-color">CãotinhoPet&copy; 2024</p>
                        </div>
                        <div class="col-12 col-md-3">
                            <p class="secondary-color">Adote de forma rápida e segura!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="./js/script.js" defer></script>
</body>

</html>