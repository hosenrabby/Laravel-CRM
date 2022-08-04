<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>IsDB Admin - CUSTOMER RELATIONSHIP MANAGMENT </title>
    @include('admin.layout.links')
</head>
<body class="layout-boxed alt-menu">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->
    @include('admin.layout.header')
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container sidebar-closed sidebar-closed" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>
        @include('admin.layout.sidebar')

        <div id="content" class="main-content">
            @yield('content')


            @include('admin.layout.footer')
        </div>
    </div>
    <!-- END MAIN CONTAINER -->
    @include('admin.layout.scripts')
</body>
</html>
