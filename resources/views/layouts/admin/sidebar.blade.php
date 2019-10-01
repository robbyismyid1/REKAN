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
                <a href="/admin/artikel"><i class="fas fa-fire"></i><span style="color:black">Dashboard</span></a>
            </li>
            <li class="menu-header" style="color:green">Manage</li>
            <li class={{ (request()->is('admin/user-manage')) ? 'active' : '' }} ><a class="nav-link" href="{{ url('/admin/user-manage') }}"><i class="fas fa-scroll"></i> <span style="color:black">User Manage</span></a></li>
            <li
            @if (request()->is('admin/bris'))
            class="dropdown active"
            @endif>
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Komponen</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ (request()->is('admin/bris')) ? 'active' : '' }}"><a class="nav-link" href="{{ url('/admin/bri-syariah') }}">BRIS</a></li>
                    <li class="{{ (request()->is('admin/bris')) ? 'active' : '' }}"><a class="nav-link" href="{{ url('/admin/bri') }}">BRI</a></li>
                    <li class="{{ (request()->is('admin/kode-rekening')) ? 'active' : '' }}"><a class="nav-link" href="{{ url('/admin/kode-rekening') }}">Kode Rekening</a></li>
                </ul>
            </li>
    </aside>
</div>
