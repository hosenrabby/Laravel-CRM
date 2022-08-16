<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>IsDB Admin - CUSTOMER RELATIONSHIP MANAGMENT </title>
    @include('layout.links')
</head>

<body class="layout-boxed alt-menu">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container sidebar-closed sidebar-closed" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <div class="container mx-auto align-self-center">
            @yield('content')

        </div>
        @include('layout.footer')
    </div>
    <!-- END MAIN CONTAINER -->
    @include('layout.scripts')
</body>

</html>
