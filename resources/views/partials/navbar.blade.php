
<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Road To Jannah</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{ route('dashboard.index') }}">Home</a>
                <a class="nav-link active" aria-current="page" href="{{ route('manhaj') }}">Manhaj</a>
                @php
                    if (Auth::user()->is_admin == 1) {
                @endphp
                    <a class="nav-link" aria-current="page" href="{{ route('admin.AdminController.index') }}">Data Admin</a>
                    <a class="nav-link" aria-current="page" href="/#ceitaislam">Fiqih</a>
                    <a class="nav-link" aria-current="page" href="/#belajarfiqih">Manhaj</a>
                    <a class="nav-link" aria-current="page" href="/#nasehatguru">Aqidah</a>
                    <a class="nav-link" aria-current="page" href="/#infopengajian">Sejarah</a>
                @php
                    }
                @endphp
            </div>
        </div>
        <div class="text-end d-flex align-items-center">
            <div class="user me-3">
                Halo, {{ Auth::user()->name }}
            </div>
            <div class="logout">
                <a href="{{ route('login.logout') }}" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</nav>
