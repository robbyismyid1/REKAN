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

            @include('backend.bris.modal')
            @include('backend.bri.modal')
            @include('backend.kode_rekening.modal')

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
        $('#edit-bris').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var no_urut = button.data('no_urut')
            var tanggal_1 = button.data('tanggal_1')
            var tanggal_2 = button.data('tanggal_2')
            var remark = button.data('remark')
            var kode_rekening_bank = button.data('kode_rekening_bank')
            var debit = button.data('debit')
            var kredit = button.data('kredit')
            var saldo = button.data('saldo')
            var kode_rekening_id = button.data('kode_rekening_id')
            var id = button.data('id')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)

            modal.find('#no_urut').val(no_urut)
            modal.find('#tanggal_1').val(tanggal_1)
            modal.find('#tanggal_2').val(tanggal_2)
            modal.find('#remark').val(remark)
            modal.find('#kode_rekening_bank').val(kode_rekening_bank)
            modal.find('#debit').val(debit)
            modal.find('#kredit').val(kredit)
            modal.find('#saldo').val(saldo)
            modal.find('#kode_rekening_id').val(kode_rekening_id)
            modal.find('#id').val(id)
          })
    </script>

    <script>
        $('#delete-bris').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var no_urut = button.data('no_urut')
            var tanggal_1 = button.data('tanggal_1')
            var tanggal_2 = button.data('tanggal_2')
            var remark = button.data('remark')
            var kode_rekening_bank = button.data('kode_rekening_bank')
            var debit = button.data('debit')
            var kredit = button.data('kredit')
            var saldo = button.data('saldo')
            var kode_rekening_id = button.data('kode_rekening_id')
            var id = button.data('id')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)

            modal.find('#no_urut').val(no_urut)
            modal.find('#tanggal_1').val(tanggal_1)
            modal.find('#tanggal_2').val(tanggal_2)
            modal.find('#remark').val(remark)
            modal.find('#kode_rekening_bank').val(kode_rekening_bank)
            modal.find('#debit').val(debit)
            modal.find('#kredit').val(kredit)
            modal.find('#saldo').val(saldo)
            modal.find('#kode_rekening_id').val(kode_rekening_id)
            modal.find('#id').val(id)
          })
    </script>

    <script>
        $('#edit-bri').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var no_urut = button.data('no_urut')
            var tanggal_1 = button.data('tanggal_1')
            var tanggal_2 = button.data('tanggal_2')
            var remark = button.data('remark')
            var kode_teller = button.data('kode_teller')
            var debit = button.data('debit')
            var kredit = button.data('kredit')
            var saldo = button.data('saldo')
            var kode_rekening_id = button.data('kode_rekening_id')
            var id = button.data('id')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)

            modal.find('#no_urut').val(no_urut)
            modal.find('#tanggal_1').val(tanggal_1)
            modal.find('#tanggal_2').val(tanggal_2)
            modal.find('#remark').val(remark)
            modal.find('#kode_teller').val(kode_teller)
            modal.find('#debit').val(debit)
            modal.find('#kredit').val(kredit)
            modal.find('#saldo').val(saldo)
            modal.find('#kode_rekening_id').val(kode_rekening_id)
            modal.find('#id').val(id)
          })
    </script>

    <script>
        $('#delete-bri').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var no_urut = button.data('no_urut')
            var tanggal_1 = button.data('tanggal_1')
            var tanggal_2 = button.data('tanggal_2')
            var remark = button.data('remark')
            var kode_teller = button.data('kode_teller')
            var debit = button.data('debit')
            var kredit = button.data('kredit')
            var saldo = button.data('saldo')
            var kode_rekening_id = button.data('kode_rekening_id')
            var id = button.data('id')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)

            modal.find('#no_urut').val(no_urut)
            modal.find('#tanggal_1').val(tanggal_1)
            modal.find('#tanggal_2').val(tanggal_2)
            modal.find('#remark').val(remark)
            modal.find('#kode_teller').val(kode_teller)
            modal.find('#debit').val(debit)
            modal.find('#kredit').val(kredit)
            modal.find('#saldo').val(saldo)
            modal.find('#kode_rekening_id').val(kode_rekening_id)
            modal.find('#id').val(id)
          })
    </script>

    <script>
        $('#edit-kr').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var nama = button.data('nama')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)

            modal.find('#id').val(id)
            modal.find('#nama').val(nama)
        })
    </script>

    <script>
        $('#delete-kr').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var nama = button.data('nama')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)

            modal.find('#id').val(id)
            modal.find('#nama').val(nama)
        })
    </script>
    

    {{-- some hidden comment --}}
</body>
@toastr_js
@toastr_render
</html>
