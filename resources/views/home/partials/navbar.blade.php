        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="/" class="nav-item nav-link {{ $title === 'Home' ? 'active' : '' }}">Home</a>
                        <a href="/category"
                            class="nav-item nav-link {{ $title === 'Category' ? 'active' : '' }}">Category</a>
                        <a href="/menu" class="nav-item nav-link {{ $title === 'Menu' ? 'active' : '' }}">Menu</a>
                        <a href="/about" class="nav-item nav-link {{ $title === 'About' ? 'active' : '' }}">About</a>
                    </div>
                </div>
                <a href="/menu" class="btn btn-primary py-2 px-4">Order Now</a>

        </div>
        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container my-5 py-5">
                <div class="row align-items-center g-5">

                </div>
            </div>
        </div>
        </nav>
        </div>
        <!-- Navbar & Hero End -->
