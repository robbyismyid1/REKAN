<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Admin - @yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('css')
    @toastr_css

    <!-- Start GA -->

    <!-- /END GA --></head>
<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            {{-- Search Pages --}}
            @include('layouts.admin.navbar')

            {{-- Sidebar --}}
            @include('layouts.admin.sidebar')

            {{-- Main Content --}}
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                    <h1>@yield('header')</h1>
                    @yield('button-add')
                    <div class="section-header-breadcrumb">
                        @yield('breadcrumb')
                    </div>
                    </div>
                    <div class="section-body">
                        <h2 class="section-title">@yield('header-2')</h2>
                        <p class="section-lead">
                            @yield('desc')
                        </p>
                        @include('layouts.flash')
                        @yield('content')
                    </div>
                </section>
            </div>


            {{-- Footer --}}
            <footer class="main-footer">
                <div class="footer-left">
                Copyright &copy; 2018
                </div>
                <div class="footer-right">

                </div>
            </footer>

        </div>
    </div>

    @yield('script')

    {{-- JS Modal Tag --}}
    

    {{-- some hidden comment --}}
</body>
@toastr_js
@toastr_render
</html>
