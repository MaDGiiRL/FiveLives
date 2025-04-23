<nav class="navbar navbar-expand-lg navbar-custom " aria-label="Offcanvas navbar large">
    <div class="container-fluid">
        <a class="navbar-brand link-light pt-2" href="{{route('homepage')}}"><img src="/images/logo.png" alt="LOGO" class="img-fluid" width="30"> FiveLives</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbar2Label">FiveLives</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('homepage')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('connect')}}">How To Connect</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('rules')}}">Rules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                    </li>

                </ul>
                <div class="pt-md-0 pt-lg-0 pt-3">
                    <a href="{{route('login')}}" class="btn btn-outline-danger me-2">Login</a>
                    <a href="{{route('register')}}" class="btn btn-outline-danger">Sign-up</a>
                </div>
            </div>
        </div>
    </div>
</nav>