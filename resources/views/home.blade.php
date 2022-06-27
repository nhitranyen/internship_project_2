@extends('layouts.app')

@section('content')
<div class="sidebar">
    <div class="logo-details d-flex justify-content-center align-items-center">
        <span class="logo_name"><img src="images/Logoalta.png" alt=""></span>
    </div>
    <ul class="nav-links">
        <li class="active" >
            <a href="/" class="text-primary">
                <i class='bx bxs-dashboard'></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="/device" class="">
                <i class='bx bx-laptop'></i>
                <span class="links_name">Thiết bị</span>
            </a>
        </li>
        <li>
            <a href="/service" class="">
                <i class='bx bx-conversation'></i>
                <span class="links_name">Dịch vụ</span>
            </a>
        </li>
        <li>
            <a href="/number" class="">
                <i class='bx bx-layer'></i>
                <span class="links_name">Cấp số</span>
            </a>
        </li>
        <li>
            <a href="#" class="">
                <i class='bx bx-trending-up'></i>
                <span class="links_name">Báo cáo</span>
            </a>
        </li>



        <li>
            <a class="" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <i class='bx bx-cog'></i>
                <span class="links_name">Cài đặt hệ thống  <i class='bx bx-dots-vertical-rounded'></i>
                </span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="/role">Quản lý vai trò</a></li>
                <li><a class="dropdown-item" href="/account">Quản lý tài khoản</a></li>
                <li><a class="dropdown-item" href="#">Nhật người dùng</a></li>
            </ul>
        </li>
        @guest
        @if (Route::has('login'))

        @endif

        @if (Route::has('register'))

        @endif
        @else
        <li class="log_out">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class='bx bx-log-in'></i>
                <span class="links_name">Đăng xuất</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </li>
        @endguest
    </ul>
</div>
<section class="home-section">
    <nav>
        <div class="sidebar-button">

            <span class="dashboard">Thông tin cá nhân</span>
        </div>

        <div class="profile-details d-flex justify-content-end align-items-center">
            <div class="container d-flex justify-content-end align-items-center">
                <div class="row">
                    <div class="col-md-2">
                        <img src="images/avatar-001.jpg" alt="">
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="admin_hello col-md-12">
                                <span>Xin chào</span>
                            </div>
                            <div class="admin_name col-md-12">
                                <span>Trần Thị Yến Nhi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </nav>

    <div class="home-content infor">
        <div class="container cart-box">
            <form class="row">
            <div class="col-md-2">
                <img class="avatar" src="images/avatar-001.jpg" alt="">
                <p class="font-weight-bold mx-auto" style="width: fit-content;"><span> {{ Auth::user()->name }}</span></p>
                </div>
                <div class="col-md-5">
                    <div class="">
                        <label class="font-weight-bold">Tên Người Dùng</label>
                        <input value="{{ Auth::user()->name }}" type="text" class="form-control mb-3" readonly>
                    </div>
                    <div class="">
                        <label class="font-weight-bold">Số Điện Thoại</label>
                        <input value="{{ Auth::user()->account_number }}" type="tel" class="form-control mb-3" readonly>
                    </div>
                    <div class="">
                        <label class="font-weight-bold">Mail</label>
                        <input value="{{ Auth::user()->email  }}" type="text" class="form-control mb-3" readonly>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="">
                        <label class="font-weight-bold">Tên Đăng Nhập</label>
                        <input value="{{ Auth::user()->account_username }}" type="text" class="form-control mb-3" readonly>
                    </div>
                    <div class="">
                        <label class="font-weight-bold">Mật Khẩu</label>
                        <input value="{{ Auth::user()->	password }}" type="mail" class="form-control mb-3" readonly>
                    </div>
                    <div class="">
                        <label class="font-weight-bold">Vai Trò</label>
                        <input value="{{ Auth::user()->account_role }}" type="text" class="form-control mb-3" readonly>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else
            sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
</script>
@endsection