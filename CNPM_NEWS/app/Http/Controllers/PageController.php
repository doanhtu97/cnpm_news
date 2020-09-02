<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;
use App\LoaiTin;
use App\TinTuc;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{

    public function __construct()
    {
        $theloai = TheLoai::all();
        view()->share('theloai', $theloai);

    }

    public function trangchu()
    {
        $tinmoi = TinTuc::orderBy('id', 'desc')->take(5)->get();
        $noibat = TinTuc::where('NoiBat', 1)->orderBy('id', 'desc')->take(5)->get();

        $catePost = DB::table('tintuc')
            ->join('loaitin', 'tintuc.idLoaiTin', '=', 'loaitin.id')
            ->join('theloai', 'loaitin.idTheLoai', '=', 'theloai.id')
            ->orderBy('tintuc.id', 'desc')
            ->get();
        return view('index', ['tinmoi' => $tinmoi, 'noibat' => $noibat]);
    }
}
