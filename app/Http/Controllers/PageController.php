<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sach;
use App\LoaiSach;
class PageController extends Controller
{
    public function getIndex()
    {
        return view('pages.trangchu');
    }
    public function getLogin()
    {
        return view('pages.login');
    }

    public function getList()
    {
        $sachmoi = Sach::where('spmoi','1')->get();
        $allsach = Sach::orderBy('id','desc')->paginate(10); 
        $loaisach = LoaiSach::all();
        return view('pages.sanpham',['allsach'=>$allsach, 'sachmoi'=>$sachmoi,'loaisach'=>$loaisach]);
    }
    public function getSingup()
    {
        return view('pages.signup');
    }

    public function getLoaiSach($id)
    {
        $loaisach = LoaiSach::find($id);
        $sach = Sach::where('id_type',$id)->get(); 
        return view('pages.loaisach',['sach'=>$sach,'loaisach'=>$loaisach]);
    }

    public function getDetail($id)
    {
        $chitiet = Sach::find($id);
        $gia = $chitiet->unit_price;
        $km = $chitiet->promotion_price;
        $tietkiem = (int)$gia-(int)$km;
        $splq = Sach::where('id_type',$chitiet->id_type)->get();
        return view('pages.chitiet_sanpham',['chitiet'=>$chitiet,'tietkiem'=>$tietkiem,'splq'=>$splq]);
    }
    public function getCart()
    {
        return view('pages.giohang');
    }

}