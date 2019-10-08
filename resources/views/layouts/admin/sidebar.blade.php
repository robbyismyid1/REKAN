<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">REKAN</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">RKN</a>
        </div>
        <ul class="sidebar-menu">
            <li style="color:green" class="menu-header">Dashboard</li>
            <li class="dropdown {{ (request()->is('admin')) ? 'active' : '' }}" >
                <a href="/admin/bri-syariah"><i class="fas fa-fire"></i><span style="color:black">Dashboard</span></a>
            </li>
            <li class="menu-header" style="color:green">Manage</li>
            <li class={{ (request()->is('admin/user-manage')) ? 'active' : '' }} ><a class="nav-link" href="{{ url('/admin/user-manage') }}"><i class="fas fa-scroll"></i> <span style="color:black">User Manage</span></a></li>
            <li class="menu-header" style="color:green">Component</li>
            <li
            @if (request()->is('admin/bjbs'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-landing-page'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-h2h'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bjbs-h2h-landing-page'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-landing-page'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-syariah'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bri-syariah-landing-page'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bsm'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/bsm-landing-page'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/btn'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/btn-landing-page'))
            class="dropdown active"
            @endif
            @if (request()->is('admin/kode-transaksi'))
            class="dropdown active"
            @endif
            >
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Komponen</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ (request()->is('admin/bjbs-landing-page')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/admin/bjbs-landing-page') }}">BJBS</a>
                    </li>
                    <li class="{{ (request()->is('admin/bjbs-h2h-landing-page')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/admin/bjbs-h2h-landing-page') }}">BJBS H2H</a>
                    </li>
                    <li class="{{ (request()->is('admin/bri-landing-page')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/admin/bri-landing-page') }}">BRI</a>
                    </li>
                    <li class="{{ (request()->is('admin/bri-syariah-landing-page')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/admin/bri-syariah-landing-page') }}">BRIS</a>
                    </li>
                    <li class="{{ (request()->is('admin/bsm-landing-page')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/admin/bsm-landing-page') }}">BSM</a>
                    </li>
                    <li class="{{ (request()->is('admin/bt-landing-page')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/admin/btn-landing-page') }}">BTN</a>
                    </li>
                    <li class="{{ (request()->is('admin/kode-transaksi')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/admin/kode-transaksi') }}">Kode Transaksi</a>
                    </li>
                </ul>
            </li>
    </aside>
</div>
