<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{asset('')}}">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title')</title>
    <link href="css/mystyle.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/lightslider.css">
    <link rel="shortcut icon" href="https://vignette.wikia.nocookie.net/loopplanet/images/b/b2/NEWSPAPER_FAVICON/revision/latest?cb=20181208105457" type="image/x-icon">
</head>

<body>
    <!-- Header -->
    @include('layout.header')
    <!-- /Header -->

    <!-- Modal -->
    <div class="modal fade modal-resigter-xl" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Đăng ký</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationServer01">Họ và tên </label>
                                <input type="text" class="form-control" id="validationServer01" placeholder="Họ và tên" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationServer04">Email </label>
                                <input type="email" class="form-control" id="validationServer04" placeholder="Email" required>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationServer04">Mật khẩu </label>
                                <input type="password" class="form-control" id="validationServer04" placeholder="Mật khẩu" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationServer04">Nhập lại mật khẩu </label>
                                <input type="password" class="form-control" id="validationServer04" placeholder="Nhập lại mật khẩu" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>&nbsp; Close</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('layout.sideButton')


    @yield('content')


    <!-- footer -->
    @include('layout.footer')





    <button id="topBtn"><i class="fa fa-arrow-up"></i></button>






    <script src="js/jquery-3.4.0.min.js "></script>
    <script src="js/bootstrap.bundle.min.js "></script>
    <script type="text/javascript ">
        $(window).on("scroll ", function() {
            if ($(window).scrollTop()) {
                $('#fixNav').addClass('stickyNav');
            } else {
                $('#fixNav').removeClass('stickyNav');
            }
        });
    </script>


    <!-- Slick -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/myscript.js"></script>
    <script src="js/lightslider.min.js"></script>

    @yield('scriptpage')

</body>

</html>