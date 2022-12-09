<?php
    $nama=pengguna($_SESSION['Id'])['nama'];
    $topbar="
        <nav class='main-header navbar navbar-expand navbar-white navbar-light'>
            <!-- Left navbar links -->
            <ul class='navbar-nav'>
                <li class='nav-item'>
                    <a class='nav-link' data-widget='pushmenu' href='#' role='button'>
                        <i class='fas fa-bars'></i>
                    </a>
                </li>
                <li class='nav-item d-none d-sm-inline-block'>
                    <a href='?page=beranda' class='nav-link $beranda'>Home</a>
                </li>
                <li class='nav-item d-none d-sm-inline-block'>
                    <a href='#' class='nav-link'>About</a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class='navbar-nav ml-auto'>
                <li class='nav-item d-none d-sm-inline-block'>
                    <a href='?page=logout' class='nav-link active'>Logout</a>
                </li>    
                <li class='nav-item'>
                    <a class='nav-link' data-widget='fullscreen' href='#' role='button'>
                        <i class='fas fa-expand-arrows-alt'></i>
                    </a>
                </li>
            </ul>
        </nav>
    ";
?>