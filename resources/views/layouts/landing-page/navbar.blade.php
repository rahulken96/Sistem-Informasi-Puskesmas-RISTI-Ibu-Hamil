<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <img src="{{ asset('assets1/img/kesmas.png') }}" alt="">
            <span>Puskesmas Lohbener</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                @auth
                    <div class="d-flex user-logged nav-item dropdown no-arrow">
                        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            Halo, {{ explode(' ', Auth::user()->nama)[0] }}!
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right: 0; left: auto;">
                                @if (Auth::user()->role)
                                    <li>
                                        <a href="{{ route(getRoles(Auth::user()->role) . '.dashboard') }}"
                                            class="dropdown-item">Dashboard</a>
                                    </li>
                                @endif
                                <li>
                                    <a href="#" class="dropdown-item"
                                        onclick="confirm('Anda Yakin ?'); event.preventDefault(); document.getElementById('form-keluar').submit()"><i
                                            class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Keluar</a>
                                    <form id="form-keluar" action="{{ route('keluar') }}" method="post"
                                        style="display: none">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                                </li>
                            </ul>
                        </a>
                    </div>
                @else
                    <li class="dropdown"><a href="{{ route('login') }}">Masuk</i></a></li>
                @endauth
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
