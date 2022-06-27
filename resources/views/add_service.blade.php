@extends('layouts.app')
@section('title')
Thêm dịch vụ
@endsection
@section('content')
<div class="sidebar">
    <div class="logo-details d-flex justify-content-center align-items-center">
        <span class="logo_name"><img src="images/Logoalta.png" alt=""></span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="/">
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
        <li class="active">
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
            <a href="/report" class="">
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
            <span class="text-secondary">Dịch vụ</span> <i class='bx bx-chevron-right text-secondary'></i><span
                class="dashboard text-secondary">Danh sách dịch vụ</span><i
                class='bx bx-chevron-right text-secondary'></i><span class="dashboard">Thêm dịch vụ</span>
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
    <div class="home-content" id="device">
        <h3 class="text-primary" style="margin-left: 30px;font-size: 24px;margin-bottom: 15px;">Quản lý dịch vụ</h3>
        <form action="/save-service" method="post">
            <div class="form-box">
                <div class="col-md-12">
                    <h5 class="text-primary" style="padding-left: 12px;">Thông tin dịch vụ</h5>
                    <div class="row">
                        <div class="col-md-12">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Mã dịch vụ: <span
                                                    class="text-danger">*</span> </label>
                                            <input name="service_code" type="text" class="form-control"
                                                placeholder="Nhập tên thiết bị">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên dịch vụ: <span
                                                    class="text-danger">*</span> </label>
                                            <input name="service_name" type="text" class="form-control"
                                                placeholder="Nhập tên thiết bị">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label for="exampleInputEmail1">Mô tả: <span
                                                class="text-danger">*</span> </label>
                                        <textarea class="service-content" name="service_content" id="" placeholder="Mô tả dịch vụ"
                                            style="padding: 10px;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <h5 class="text-primary" style="padding-left: 12px;">Quy tắc cấp số</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-group list-group-flush" style="margin-left: 25px;">
                                <li class="list-group-item list-group-item-service"> <input class="square" type="checkbox"> Tăng tự động từ: <input name="service_min" class="form-control form-control-service1" type="text"> <span style="margin-left: 85px;">đến</span> <input name="service_max" class="form-control form-control-service2" type="text"></li>
                                <li class="list-group-item list-group-item-service"> <input class="square" type="checkbox">Prefix: <input name="service_Prefix" class="form-control form-control-service1" type="text"> </li>
                                <li class="list-group-item list-group-item-service"> <input class="square" type="checkbox">Surfix: <input name="service_Surfix" class="form-control form-control-service1" type="text"> </li>
                                <li class="list-group-item list-group-item-service"> <input class="square" type="checkbox">Reset mỗi ngày</li>   
                              </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <button class="btn-huy btn-add-device  ">Hủy bỏ</button>
                <button class="btn-add btn-add-device  btn btn-primary">Thêm</button>
            </div>
        </form>
    </div>
</section>

<!-- <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
  </script> -->

@endsection