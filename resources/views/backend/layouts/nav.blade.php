<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('dashboard')}}">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{Route('admin.users')}}">
                    <span data-feather="file"></span>
                    Khách hàng
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.contact')}}">
                    <span data-feather="shopping-cart"></span>
                    Liên hệ
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.notification')}}">
                    <span data-feather="shopping-cart"></span>
                    Thông báo
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{Route('admin.category')}}">
                    <span data-feather="file"></span>
                    Danh mục
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{Route('admin.product')}}">
                    <span data-feather="shopping-cart"></span>
                    Kho nguyên liệu
                </a>
            </li>
        </ul>
    </div>
</nav>