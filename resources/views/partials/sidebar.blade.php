<!-- Sidebar -->
<div class="sidebar" id="side_nav">
    <div class="content">
        <div class="header-box px-3 pt-3 pb-4 d-flex justify-content-between">
            <h1 class="fs-4">
                <span class="bg-white text-dark rounded shadow px-2 me-2"><img src="/assets/images/logo-no-background.png"
                        alt=""></span>
                <a href="#" class="text-decoration-none"><span class="text-white">Jarvis Resto</span></a>
            </h1>
            <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"> <i
                    class="fa-solid fa-bars-staggered"></i></button>
        </div>

        <ul class="list-unstyled px-3">
            <li class="{{ $title === 'Dashboard' ? 'active' : '' }} py-2">
                <a href="/" class="text-decoration-none"><i class="fa-solid fa-house px-2"></i>Dashboard</a>
            </li>
            @if (auth()->user()->role == ['admin', 'manager'])
                <li class="{{ $title === 'Account' ? 'active' : '' }} py-2">
                    <a href="/user" class="text-decoration-none"><i class="fa-regular fa-user px-2"></i>User</a>
                </li>
            @endif



            <li class=" py-2">
                <form action="/logout" method="POST">
                    @csrf
                    <button class="btn btn-outline-danger" type="submit"><i
                            class="fa-solid fa-right-from-bracket px-2"></i>Logout
                    </button></a>
                </form>
            </li>

        </ul>
        <hr class="h-color">
    </div>
</div>