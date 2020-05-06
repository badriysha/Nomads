<!-- Navbar -->
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="{{url('frontend/images/logo.png')}}" alt="logo Nomads">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-target="#navbar" data-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link active">Home</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link">Paket Travel</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navdrop">
                        Services
                    </a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Link</a>
                        <a href="#" class="dropdown-item">Link</a>
                        <a href="#" class="dropdown-item">Link</a>
                    </div>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link">Testimonial</a>
                </li>
            </ul>
            <!-- Mobile btn_login -->
            <form class="form-inline d-sm-block d-md-none">
                <button class="btn-login my-2 my-sm-0">
                    Masuk
                </button>
            </form>

            <!-- Desktop btn_login -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                    Masuk
                </button>
            </form>
        </div>
    </nav>
</div>