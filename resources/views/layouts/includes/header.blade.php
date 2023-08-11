<nav class="navbar  navbar-light bg-gradiant-green-blue nav-shadow">
    <a class="navbar-brand" href="#">My Blog</a>
    <span class="">

            <span class="dropdown">
                <a class="dropdown-toggle text-decoration-none text-dark BJadidBold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     {{ auth()->user()->fname }} {{ auth()->user()->lname }} <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right BHoma text-aligned" aria-labelledby="navbarDropdown">
                   <form action="{{ route('panel.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">خروج از حساب کاربری</button>
                    </form>
                </div>
            </span>
       </span>
</nav>
