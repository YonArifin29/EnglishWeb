<?php
    include("babPertama.php");
    include("babKedua.php");
    $sidebar ="
        <aside class='main-sidebar sidebar-dark-primary elevation-4'>
            <!-- Brand Logo -->
            <a href='#' class='brand-link'>
                <img src='../assets/dist/img/AdminLTELogo.png' alt='AdminLTE Logo' class='brand-image img-circle elevation-3' style='opacity: .8'>
                <span class='brand-text font-weight-light'>Engpin</span>
            </a>
            <!-- Sidebar -->
            <div class='sidebar'>
                <!-- Sidebar Menu -->
                <nav class='mt-2'>
                    <ul class='nav nav-pills nav-sidebar flex-column' data-widget='treeview' role='menu' data-accordion='false'>
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <!-- Bab Pertama -->
                        $babPertama
                        <!-- Bab Kedua -->
                        $babKedua
                    </ul>
                </nav>
                <!-- end.sidebar-menu -->
            </div>
            <!-- end.sidebar -->
        </aside>  
    ";
?>