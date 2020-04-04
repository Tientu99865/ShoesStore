<!-- partial:partials/_navbar.html -->
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="admin/trangchu"><img src="admin_asset/images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="admin/trangchu"><img src="admin_asset/images/logo-mini.svg" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <img src="admin_asset/images/faces/face5.jpg" alt="profile"/>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    @if(Auth::check())
                        <a class="dropdown-item">
                            <i class="mdi mdi-account text-primary"></i>
                            {{Auth::user()->name}}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="admin/dangxuat">
                            <i class="mdi mdi-logout text-primary"></i>
                            Đăng xuất
                        </a>
                    @endif
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- partial -->
