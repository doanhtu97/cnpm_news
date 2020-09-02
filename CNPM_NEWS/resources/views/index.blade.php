@extends('layout.master')
@section('title', 'Trang chủ')

@section('content')

<section class="top1 mt-3">
    <div class="container">
        @if(session('thongbao'))
        <div class="alert alert-danger">
            {{session('thongbao')}}
        </div>
        @endif
        <div class="row">
            <?php
            //5 tin tuc noi bat moi nhat
            $data = $tinmoi->sortByDesc('created_at');
            // $data = $tl->tintuc->where('NoiBat', 1)->sortByDesc('created_at')->take(5); //array
            $tin1 = $data->shift(); //lay 1 tin trong data, trong data con lai 4 tin //array
            $tin2 = $data->shift();
            $tin3 = $data->shift();



            ?>
            <div class="col-xm-12 col-md-8 w-100">
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="upload/images/tin-tuc/{{$tin1['Hinh']}}" class="d-block w-100 bca" alt="..." height="500px">
                                <div class="carousel-caption d-none d-md-block">
                                    <a class="text-white" href="tintuc/{{$tin1['id']}}/{{$tin1['TieuDeKhongDau']}}.html">
                                        <h3>{{$tin1['TieuDe']}}</h3>
                                    </a>
                                </div>

                            </div>
                            <div class="carousel-item">

                                <img src="upload/images/tin-tuc/{{$tin2['Hinh']}}" class="d-block w-100" alt="..." height="500px">
                                <div class="carousel-caption d-none d-md-block">
                                    <a class="text-white" href="tintuc/{{$tin2['id']}}/{{$tin2['TieuDeKhongDau']}}.html">
                                        <h3>{{$tin2['TieuDe']}}</h3>
                                    </a>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <img src="upload/images/tin-tuc/{{$tin3['Hinh']}}" class="d-block w-100" alt="..." height="500px">
                                <div class="carousel-caption d-none d-md-block">
                                    <a class="text-white" href="tintuc/{{$tin3['id']}}/{{$tin3['TieuDeKhongDau']}}.html">
                                        <h3>{{$tin3['TieuDe']}}</h3>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 w-100">
                @foreach($data->all() as $tinmoi45)
                <div class="row mb-3">
                    <div class="card text-white mr-3">
                        <img src="upload/images/tin-tuc/{{$tinmoi45['Hinh']}}" class="card-img" alt="..." style="height: 240px">
                        <div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
                            <a class="text-white" href="tintuc/{{$tinmoi45['id']}}/{{$tinmoi45['TieuDeKhongDau']}}.html">
                                <h5 class="card-title">{{$tinmoi45['TieuDe']}}</h5>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</section>

<section class="mt-5">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-7">
                <div class="p-3 mb-2 bg-dark text-white" style="font-weight: bold">TIN MỚI NHẤT</div>
                @foreach($tinmoi as $tm)
                <div class="row">
                    <div class="col-5">
                        <a href="tintuc/{{$tm->id}}/{{$tm->TieuDeKhongDau}}.html">
                            <img src="upload/images/tin-tuc/{{$tm->Hinh}}" class="img-fluid" alt="" srcset="" style="height:200px">
                        </a>
                    </div>
                    <div class="col-7">
                        <div class="row">
                            <a href="tintuc/{{$tm->id}}/{{$tm->TieuDeKhongDau}}.html">
                                <h5 style="font-weight: bold">{{$tm->TieuDe}}</h5>
                            </a>
                            <i class="fa fa-user"> Admin</i> &nbsp;
                            <i class="fa fa-calendar"> {{$tm->created_at}}</i> &nbsp;
                            <i class="fa fa-eye"> {{$tm->SoLuotXem}}</i>
                            <p style="text-indent: 25px">{!!$tm->TomTat!!}</p>
                        </div>
                    </div>
                    <hr class="line-hr w-75">
                </div>
                @endforeach
            </div>


            <div class="col-sm-12 col-md-5">
                <div class="p-3 mb-2 bg-dark text-white" style="font-weight: bold">TIN NỔI BẬT</div>
                @foreach($noibat as $nb)

                <div class="row">
                    <div class="col-5">
                        <a href="tintuc/{{$nb->id}}/{{$nb->TieuDeKhongDau}}.html">
                            <img src="upload/images/tin-tuc/{{$nb->Hinh}}" class="img-fluid" alt="" srcset="" style="height:150px">
                        </a> </div>
                    <div class="col-7">
                        <div class="row">
                            <a href="tintuc/{{$nb->id}}/{{$nb->TieuDeKhongDau}}.html">
                                <h5 style="font-weight: bold">{{$nb->TieuDe}}</h5>
                            </a> <i class="fa fa-user"> Admin</i> &nbsp;
                            <i class="fa fa-calendar"> {{ $nb->created_at == null ? "": $nb->created_at->format('d-m-Y')}}</i> &nbsp;
                            <i class="fa fa-eye"> {{$nb->SoLuotXem}}</i>
                        </div>
                    </div>
                    <hr class="line-hr w-75">
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

<section class="mt-5">
    <div class="container">
        <div class="row">
            @foreach($theloai as $tl)
            <?php
            $postCate = $tl->tintuc->sortByDesc('created_at')->take(3);
            $postCate1 = $postCate->shift();
            ?>
            <div class="col-sm-6 col-md-3">
                <div class="row">
                    <div class="col">
                    {{$postCate1['id']}}
                        <div class="p-3 mb-2 bg-dark text-white" style="font-weight: bold;"><i class="fa fa-newspaper-o" style="color: red" aria-hidden="true"></i>&nbsp; {{$tl->Ten}}</div>
                        <a href="{{$postCate1['id']}}">
                            <img src="upload/images/tin-tuc/{{$postCate1['Hinh']}}" style="height: 200px" class="img-fluid" alt="" srcset="">
                            <h5 style="font-weight: bold">{{$postCate1['TieuDe']}}</h5>
                        </a>
                    </div>
                </div>
                @foreach($postCate->all() as $Catepost)
                <hr class="line-hr">
                <div class="row">
                    <div class="col-5">
                        <a href="tintuc/{{$Catepost['id']}}/{{$Catepost['TieuDeKhongDau']}}.html">
                            <img src="upload/images/tin-tuc/{{$Catepost['Hinh']}}" class="img-fluid" alt="" srcset="">
                        </a> </div>
                    <div class="col-7">
                        <a href="tintuc/{{$Catepost['id']}}/{{$Catepost['TieuDeKhongDau']}}.html">
                            <h6 style="font-weight: bold">{{$Catepost['TieuDe']}}</h6>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</section>


@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('#imageGallery').lightSlider({
            gallery: true,
            item: 1,
            thumbItem: 8,
            slideMargin: 0,
            speed: 500,
            auto: true,
            loop: true,
            onSliderLoad: function() {
                $('#image-gallery').removeClass('cS-hidden');
            }
        });
    });
</script>
@endsection
