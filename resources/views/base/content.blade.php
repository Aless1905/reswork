<html lang="en">

    @include("base.title")
    <body class="sb-nav-fixed">
        <!--header start-->
        @include('base.header')
        <!-- container section start -->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <!--sidebar start-->
                @include('base.aside')
                <!--sidebar end-->
            </div>

            <div id="layoutSidenav_content">
                <main>
                    @yield('contenido')
                </main>
                
            </div>
        </div>

        <!-- container section end -->
        <!-- javascripts -->
        @include('base.scripts')
        

    </body>
</html>