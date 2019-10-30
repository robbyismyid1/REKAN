<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>REKAN || @yield('title')</title>

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
            
            @include('backend.user.modal')

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
    <script>
        $('#edit-user').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var name = button.data('name')
            var username = button.data('username')
            var email = button.data('email')
            var password = button.data('password')
            var created_at = button.data('created_at')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
    
            modal.find('#id').val(id)
            modal.find('#name').val(name)
            modal.find('#username').val(username)
            modal.find('#email').val(email)
            modal.find('#password').val(password)
            modal.find('#created_at').val(created_at)
            })
    </script>
        
    <script>
        $('#delete-user').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var name = button.data('name')
            var username = button.data('username')
            var email = button.data('email')
            var passwrod = button.data('passwrod')
            var created_at = button.data('created_at')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
    
            modal.find('#id').val(id)
            modal.find('#name').val(name)
            modal.find('#username').val(username)
            modal.find('#email').val(email)
            modal.find('#password').val(password)
            modal.find('#created_at').val(created_at)
            })
    </script>

    {{-- some hidden comment --}}
</body>
@toastr_js
@toastr_render
</html>
