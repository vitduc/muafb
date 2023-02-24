<div class="iq-sidebar sidebar-default">

    <div class="iq-sidebar-logo d-flex align-items-end justify-content-between">
        <a href="{{ route('home')}}" class="header-logo">
            <img src="{{asset('images/aa.jpg')}}" class="img-fluid rounded-normal light-logo" alt="logo">
        </a>
    </div>

    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">

            <ul id="iq-sidebar-toggle" class="side-menu">
                <br>
                <li class="px-3 pt-3 pb-2 ">
                    <span class="text-uppercase small font-weight-bold">Số Dư <span style="color: yellow;">0đ</span> - Giảm: <span style="color: red;">0%</span>
                    </span>
                </li>
                <li class=" sidebar-layout">
                    <a href="{{route('products')}}" class="svg-icon ">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="ml-2">Products</span>
                    </a>
                </li>
                <li class=" sidebar-layout">
                    <a href="{{route('history')}}" class="svg-icon ">
                        <i class="fas fa-history"></i>
                        <span class="ml-2">Purchase History</span>
                    </a>
                </li>
                <li class="px-3 pt-3 pb-2 ">
                    <span class="text-uppercase small font-weight-bold">Nạp Tiền</span></span>
                </li>
                <li class=" sidebar-layout">
                    <a href="{{ route('bank_transfer')}}" class="svg-icon ">
                        <i class="fas fa-university"></i>
                        <span class="ml-2">Bank Transfer</span>
                    </a>
                </li>
                <li class=" sidebar-layout">
                    <a href="{{route('invoices')}}" class="svg-icon ">
                        <i class="fas fa-file-invoice"></i>
                        <span class="ml-2">Invoices</span>
                    </a>
                </li>
                <li class="px-3 pt-3 pb-2 ">
                    <span class="text-uppercase small font-weight-bold">Khác</span></span>
                </li>
                <li class=" sidebar-layout">
                    <a href="#" class="svg-icon ">
                        <i class="fa-brands fa-blogger"></i>
                        <span class="ml-2">Bài Viết</span>
                    </a>
                </li>
                <li class=" sidebar-layout">
                    <a href="#" class="svg-icon ">
                        <i class="far fa-question-circle"></i>
                        <span class="ml-2">FAQ</span>
                    </a>
                </li>
                <li class=" sidebar-layout">
                    <a target="_blank" href="https://documenter.getpostman.com/view/9826758/TzzANcVu" class="svg-icon ">
                        <i class="far fa-file-code"></i>
                        <span class="ml-2">Tài Liệu API</span>
                    </a>
                </li>
                <li class=" sidebar-layout">
                    <a href="#" class="svg-icon ">
                        <i class="fas fa-address-book"></i>
                        <span class="ml-2">Liên Hệ</span>
                    </a>
                </li>
                <li class="sidebar-layout">
                    <a target='_blank' href="https://taophoi.com/" class="svg-icon ">
                        <i class="fas fa-user"></i> <span class="ml-2">Tạo phôi XMDT</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="pt-5 pb-5"></div>
    </div>
</div>