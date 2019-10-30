<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/admin/dashboard">REKAN</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
                <a href="/admin/dashboard"><img src="../admin/assets/img/uinlogo.png" width="50" height="54" title="UIN" alt="Flower"></a>
        </div>
        <ul class="sidebar-menu">
            <li style="color:green" class="menu-header">Dashboard</li>
            <li class="dropdown {{ (request()->is('admin/dashboard')) ? 'active' : '' }}" >
                <a href="/admin/dashboard"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header" style="color:green">Manage</li>
            <li class={{ (request()->is('admin/user')) ? 'active' : '' }} ><a class="nav-link" href="{{ url('/admin/user') }}"><i class="fas fa-scroll"></i> <span>User Manage</span></a></li>
            <li class="menu-header" style="color:green">Component</li>
            <li
            @if (request()->is('admin/bjbs'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-rekap-tahun'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-landing-page'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-januari'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-februari'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-maret'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-april'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-mei'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-juni'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-juli'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-agustus'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-september'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-oktober'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-nopember'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-desember'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-h2h'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-h2h-rekap-tahun'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-h2h-landing-page'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-h2h-januari'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-h2h-februari'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-h2h-maret'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-h2h-april'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-h2h-mei'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-h2h-juni'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-h2h-juli'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-h2h-agustus'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-h2h-september'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-h2h-oktober'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-h2h-nopember'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-h2h-desember'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-rekap-tahun'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-landing-page'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-januari'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-februari'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-maret'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-april'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-mei'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-juni'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-juli'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-agustus'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-september'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-oktober'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-nopember'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-desember'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-syariah'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-syariah-rekap-tahun'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-syariah-landing-page'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-syariah-januari'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-syariah-februari'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-syariah-maret'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-syariah-april'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-syariah-mei'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-syariah-juni'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-syariah-juli'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-syariah-agustus'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-syariah-september'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-syariah-oktober'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-syariah-nopember'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-syariah-desember'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bsm'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bsm-rekap-tahun'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bsm-landing-page'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bsm-januari'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bsm-februari'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bsm-maret'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bsm-april'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bsm-mei'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bsm-juni'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bsm-juli'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bsm-agustus'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bsm-september'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bsm-oktober'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bsm-nopember'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bsm-desember'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/btn'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/btn-rekap-tahun'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/btn-landing-page'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/btn-januari'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/btn-februari'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/btn-maret'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/btn-april'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/btn-mei'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/btn-juni'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/btn-juli'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/btn-agustus'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/btn-september'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/btn-oktober'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/btn-nopember'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/btn-desember'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/kode-transaksi'))
            class="dropdown active"
            @endif
            >
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Rekening Koran</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ (request()->is('admin/bjbs-landing-page')) ? 'active' : '' }} 
                        {{ (request()->is('admin/bjbs')) ? 'active' : '' }} 
                        {{ (request()->is('admin/bjbs-rekap-tahun')) ? 'active' : '' }}
                        {{ (request()->is('admin/bjbs-januari')) ? 'active' : '' }}
                        {{ (request()->is('admin/bjbs-februari')) ? 'active' : '' }}
                        {{ (request()->is('admin/bjbs-maret')) ? 'active' : '' }}
                        {{ (request()->is('admin/bjbs-april')) ? 'active' : '' }}
                        {{ (request()->is('admin/bjbs-mei')) ? 'active' : '' }}
                        {{ (request()->is('admin/bjbs-juni')) ? 'active' : '' }}
                        {{ (request()->is('admin/bjbs-juli')) ? 'active' : '' }}
                        {{ (request()->is('admin/bjbs-agustus')) ? 'active' : '' }}
                        {{ (request()->is('admin/bjbs-september')) ? 'active' : '' }}
                        {{ (request()->is('admin/bjbs-oktober')) ? 'active' : '' }}
                        {{ (request()->is('admin/bjbs-nopember')) ? 'active' : '' }}
                        {{ (request()->is('admin/bjbs-desember')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/admin/bjbs-landing-page') }}">BJBS</a>
                    </li>
                    <li class="{{ (request()->is('admin/bjbs-h2h-landing-page')) ? 'active' : '' }} 
                        {{ (request()->is('admin/bjbs-h2h')) ? 'active' : '' }} 
                        {{ (request()->is('admin/bjbs-h2h-rekap-tahun')) ? 'active' : '' }}
                        {{ (request()->is('admin/bjbs-h2h-januari')) ? 'active' : '' }}
                        {{ (request()->is('admin/bjbs-h2h-februari')) ? 'active' : '' }}
                        {{ (request()->is('admin/bjbs-h2h-maret')) ? 'active' : '' }}
                        {{ (request()->is('admin/bjbs-h2h-april')) ? 'active' : '' }}
                        {{ (request()->is('admin/bjbs-h2h-mei')) ? 'active' : '' }}
                        {{ (request()->is('admin/bjbs-h2h-juni')) ? 'active' : '' }}
                        {{ (request()->is('admin/bjbs-h2h-juli')) ? 'active' : '' }}
                        {{ (request()->is('admin/bjbs-h2h-agustus')) ? 'active' : '' }}
                        {{ (request()->is('admin/bjbs-h2h-september')) ? 'active' : '' }}
                        {{ (request()->is('admin/bjbs-h2h-oktober')) ? 'active' : '' }}
                        {{ (request()->is('admin/bjbs-h2h-nopember')) ? 'active' : '' }}
                        {{ (request()->is('admin/bjbs-h2h-desember')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/admin/bjbs-h2h-landing-page') }}">BJBS H2H</a>
                    </li>
                    <li class="{{ (request()->is('admin/bri-landing-page')) ? 'active' : '' }} 
                        {{ (request()->is('admin/bri')) ? 'active' : '' }} 
                        {{ (request()->is('admin/bri-rekap-tahun')) ? 'active' : '' }}
                        {{ (request()->is('admin/bri-januari')) ? 'active' : '' }}
                        {{ (request()->is('admin/bri-februari')) ? 'active' : '' }}
                        {{ (request()->is('admin/bri-maret')) ? 'active' : '' }}
                        {{ (request()->is('admin/bri-april')) ? 'active' : '' }}
                        {{ (request()->is('admin/bri-mei')) ? 'active' : '' }}
                        {{ (request()->is('admin/bri-juni')) ? 'active' : '' }}
                        {{ (request()->is('admin/bri-juli')) ? 'active' : '' }}
                        {{ (request()->is('admin/bri-agustus')) ? 'active' : '' }}
                        {{ (request()->is('admin/bri-september')) ? 'active' : '' }}
                        {{ (request()->is('admin/bri-oktober')) ? 'active' : '' }}
                        {{ (request()->is('admin/bri-nopember')) ? 'active' : '' }}
                        {{ (request()->is('admin/bri-desember')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/admin/bri-landing-page') }}">BRI</a>
                    </li>
                    <li class="{{ (request()->is('admin/bri-syariah-landing-page')) ? 'active' : '' }} 
                        {{ (request()->is('admin/bri-syariah')) ? 'active' : '' }} 
                        {{ (request()->is('admin/bri-syariah-rekap-tahun')) ? 'active' : '' }}
                        {{ (request()->is('admin/bri-syariah-januari')) ? 'active' : '' }}
                        {{ (request()->is('admin/bri-syariah-februari')) ? 'active' : '' }}
                        {{ (request()->is('admin/bri-syariah-maret')) ? 'active' : '' }}
                        {{ (request()->is('admin/bri-syariah-april')) ? 'active' : '' }}
                        {{ (request()->is('admin/bri-syariah-mei')) ? 'active' : '' }}
                        {{ (request()->is('admin/bri-syariah-juni')) ? 'active' : '' }}
                        {{ (request()->is('admin/bri-syariah-juli')) ? 'active' : '' }}
                        {{ (request()->is('admin/bri-syariah-agustus')) ? 'active' : '' }}
                        {{ (request()->is('admin/bri-syariah-september')) ? 'active' : '' }}
                        {{ (request()->is('admin/bri-syariah-oktober')) ? 'active' : '' }}
                        {{ (request()->is('admin/bri-syariah-nopember')) ? 'active' : '' }}
                        {{ (request()->is('admin/bri-syariah-desember')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/admin/bri-syariah-landing-page') }}">BRIS</a>
                    </li>
                    <li class="{{ (request()->is('admin/bsm-landing-page')) ? 'active' : '' }} 
                        {{ (request()->is('admin/bsm')) ? 'active' : '' }} 
                        {{ (request()->is('admin/bsm-rekap-tahun')) ? 'active' : '' }}
                        {{ (request()->is('admin/bsm-januari')) ? 'active' : '' }}
                        {{ (request()->is('admin/bsm-februari')) ? 'active' : '' }}
                        {{ (request()->is('admin/bsm-maret')) ? 'active' : '' }}
                        {{ (request()->is('admin/bsm-april')) ? 'active' : '' }}
                        {{ (request()->is('admin/bsm-mei')) ? 'active' : '' }}
                        {{ (request()->is('admin/bsm-juni')) ? 'active' : '' }}
                        {{ (request()->is('admin/bsm-juli')) ? 'active' : '' }}
                        {{ (request()->is('admin/bsm-agustus')) ? 'active' : '' }}
                        {{ (request()->is('admin/bsm-september')) ? 'active' : '' }}
                        {{ (request()->is('admin/bsm-oktober')) ? 'active' : '' }}
                        {{ (request()->is('admin/bsm-nopember')) ? 'active' : '' }}
                        {{ (request()->is('admin/bsm-desember')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/admin/bsm-landing-page') }}">BSM</a>
                    </li>
                    <li class="{{ (request()->is('admin/btn-landing-page')) ? 'active' : '' }} 
                        {{ (request()->is('admin/btn')) ? 'active' : '' }} 
                        {{ (request()->is('admin/btn-rekap-tahun')) ? 'active' : '' }}
                        {{ (request()->is('admin/btn-januari')) ? 'active' : '' }}
                        {{ (request()->is('admin/btn-februari')) ? 'active' : '' }}
                        {{ (request()->is('admin/btn-maret')) ? 'active' : '' }}
                        {{ (request()->is('admin/btn-april')) ? 'active' : '' }}
                        {{ (request()->is('admin/btn-mei')) ? 'active' : '' }}
                        {{ (request()->is('admin/btn-juni')) ? 'active' : '' }}
                        {{ (request()->is('admin/btn-juli')) ? 'active' : '' }}
                        {{ (request()->is('admin/btn-agustus')) ? 'active' : '' }}
                        {{ (request()->is('admin/btn-september')) ? 'active' : '' }}
                        {{ (request()->is('admin/btn-oktober')) ? 'active' : '' }}
                        {{ (request()->is('admin/btn-nopember')) ? 'active' : '' }}
                        {{ (request()->is('admin/btn-desember')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/admin/btn-landing-page') }}">BTN</a>
                    </li>
                    <li class="{{ (request()->is('admin/kode-transaksi')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/admin/kode-transaksi') }}">Kode Transaksi</a>
                    </li>
                </ul>
            </li>
    </aside>
</div>
