<header class="py-3" id="fixNav">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="trangchu"><img src="img/logo.png" alt=""></a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-3">
                    <li class="nav-item">
                        <a class="nav-link menu" href="trangchu">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item btn-group">
                        <a href="#" class="nav-link menu mb-n1">News</a>
                        <ul style="left: 0px;" class="dropdown-menu dropdown-menu-right mt-n4">
                            @foreach($theloai as $tl1)
                            <li>
                                <a href="theloai/{{$tl1->id}}/{{$tl1->TenKhongDau}}" class="dropdown-item">{{$tl1->Ten}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu" href="gioithieu">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu" href="lienhe">Liên hệ</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="timkiem" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <!-- <div class="search-box">
                            <input type="text" name="" class="search-txt" placeholder="Type to search" />
                            <a class="search-btn" href="#">
                                <i class="fa fa-search"></i>
                            </a>
                        </div> -->

                    <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm ..." name="keySearch">
                    <button class="btn btn-outline-info my-2 my-sm-0 text-white" type="submit">Tìm kiếm</button>
                </form>
                <ul class="navbar-nav mt-2 mt-lg-0 ml-3">
                    @if(session()->has('account'))
                    <li class="nav-item">
                        <a href="profile" class="nav-link">
                            <i class="fa fa-user" aria-hidden="true"></i>&nbsp;
                            {{session('account')}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dangxuat" id="confirmLogout"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; Đăng xuất</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <!-- data-toggle="modal" data-target=".modal-resigter-xl" -->
                        <a class="nav-link" href="dangky"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp; Đăng ký</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dangnhap"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp; Đăng nhập</a>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</header>