
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Road To Jannah</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ request()->is('dashboard') ? "active" : "" }}" aria-current="page" href="{{ route('dashboard.index') }}">Home</a>
                <a class="nav-link {{ request()->is('manhaj') ? "active" : "" }}" aria-current="page" href="{{ route('manhaj') }}">Manhaj</a>
                <a class="nav-link {{ request()->is('fiqih') ? "active" : "" }}" aria-current="page" href="{{ route('fiqih') }}">Fiqih</a>
                <a class="nav-link {{ request()->is('aqidah') ? "active" : "" }}" aria-current="page" href="{{ route('aqidah') }}">Aqidah</a>
            </div>
        </div>
        <div class="text-end d-flex align-items-center">
            <div class="user me-3 text-white">
                Halo, {{ Auth::user()->name }}
            </div>
            <div class="logout">
                <a href="{{ route('login.logout') }}" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</nav>
