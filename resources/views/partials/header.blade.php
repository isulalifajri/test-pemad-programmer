
<header>
    <div class="nav-wrapper">
        <div class="dsp-flex">
            <img src="{{ asset('../asset/images/logo-pemad.png') }}" alt="logo pemad" height="30px">
            <ul>
                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                <li class="{{ Request::is('users*') ? 'active' : '' }}"><a href="{{ url('/users') }}">User List</a></li>
                <li class="{{ Request::is('kliens*') ? 'active' : '' }}"><a href="{{ url('/kliens') }}">Klien</a></li>
                <li class="{{ Request::is('company*') ? 'active' : '' }}"><a href="{{ url('/company') }}">Company</a></li>
                <li class="{{ Request::is('jobs*') ? 'active' : '' }}"><a href="{{ url('/jobs') }}">Career</a></li>
                <li class="{{ Request::is('penawaran*') ? 'active' : '' }}"><a href="{{ url('/penawaran') }}">Penawaran</a></li>
                <li class="{{ Request::is('projects*') ? 'active' : '' }}"><a href="{{ url('/projects') }}">Projects</a></li>
                <li class="{{ Request::is('permintaan*') ? 'active' : '' }}"><a href="{{ url('/permintaan') }}">Permintaan</a></li>
                <li class="{{ Request::is('tagihan*') ? 'active' : '' }}"><a href="{{ url('/tagihan') }}">tagihan</a></li>
                <li class="{{ Request::is('pembayaran*') ? 'active' : '' }}"><a href="{{ url('/pembayaran') }}">Pembayaran</a></li>
            </ul>
        </div>
    </div>
</header>