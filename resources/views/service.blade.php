@extends('layouts.app')
@section('title')
Dịch vụ
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
            <a href="/device">
                <i class='bx bx-laptop'></i>
                <span class="links_name">Thiết bị</span>
            </a>
        </li>
        <li class="active">
            <a href="#" class="">
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
                class="dashboard">Danh sách dịch vụ</span>
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
        <div class="device">
            <div class="col-md-12 ">
                <h3 class="text-primary" style="margin-bottom: 30px;">Quản lý dịch vụ</h3>
                <div class="row">
                    <div class="col-md-4 pr-0">
                        <div class="form-group">
                            <label for="inputEmail4" class="form-label">Trạng thái hoạt động</label>
                            <button style="text-align: left;padding: 3px;" class="form-control  dropdown-toggle"
                                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Tất cả
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="/service">tất cả</a></li>
                                <li><a class="dropdown-item" href="/service-active">đang hoạt động</a></li>
                                <li><a class="dropdown-item" href="/service-shut-dow">ngưng hoạt động</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 p-0">
                        <div class="row">
                            <label for="inputEmail4" class="form-label col-md-12">Chọn thời gian</label>
                            <div class="col-md-7 d-flex">
                                <div class="form-group">
                                    <input type="date" class="form-control date" placeholder="Nhập từ khóa">
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="45" fill="currentColor" class="bi bi-caret-right-fill date-icon" viewBox="0 0 16 16">
                                   <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input type="date" class="form-control date" placeholder="Nhập từ khóa">
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-4 search">
                        <div class="form-group">
                            <form action="" method="get">
                                @csrf
                                <label for="inputEmail4" style="margin-left:25%" class="form-label">Từ khóa</label>
                                <input type="text" name="key" style="width: 220px; margin-left:25%" class="form-control" placeholder="Nhập từ khóa">
                                <button type="submit" name="submit"><i class='bx bx-search'></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="add-device">
                        <a href="/add-service">
                            <img src="/images/Component 3.png" alt="">
                        </a>
                    </div>

                    <div class="col-md-12">
                        <div class="table100 ver1 m-b-110">
                            <div class="table100-body js-pscroll ps ">
                                <table id="table_id">
                                    <thead>
                                        <tr class="">
                                            <th class="text-center">Mã dịch vụ</th>
                                            <th class="text-center">Tên dịch vụ</th>
                                            <th class="text-center" style="width:525.062px">Mô tả</th>
                                            <th class="text-center">Trạng thái hoạt động</th>
                                            <th class="text-center"><a href=""></a></th>
                                            <th class="text-center"><a href=""></a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $item)
                                        <tr class="row100 body">
                                            <td class="text-center">{{$item->service_code}}</td>
                                            <td class="text-left">{{$item->service_name}}</td>
                                            <td class="text-left">{{$item->service_content}}</td>
                                            @if($item->service_status==1)
                                            <td class="text-center"><i class='bx bxs-circle text-success'></i> Đang
                                                hoạt động</td>
                                            @else
                                            <td class="text-center"><i class='bx bxs-circle text-danger'></i> Ngưng
                                                hoạt động</td>
                                            @endif
                                            <td class="text-center"><a class="text-info"
                                                    href="/service-detail/{{$item->id}}">Chi tiết</a></td>
                                            <td class="text-center"><a class="text-info"
                                                    href="/edit-service/{{$item->id}}">Cập nhật</a></td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-end" style="margin-top:10px ;">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="" style="position: fixed;top: 750px;right: 139px;">
    {{ $data->links() }}
</div>
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