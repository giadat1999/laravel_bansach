<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sach;
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
        $sach = Sach::all();
        $sachngoaingu = Sach::where('id_type',3)->get();
        return view('pages.sanpham',['sach'=>$sach, 'sachnn'=>$sachngoaingu]);
    }
    public function getDetail()
    {
        return view('pages.chitiet_sanpham');
    }
    public function getSingin()
    {
        return view('pages.signin');
    }

}