<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use App\BillDetail;
use App\Sach;
class BillController extends Controller
{
    public function getList()
    {
        $bills = Bill::all();
        return view('admin.list_bills',compact('bills'));
    }
    public function getEdit($id)
    {
        $bills = Bill::find($id);
        return view('admin.edit_bills',compact('bills'));
    }
    public function getDelete($id)
    {
        $bills = Bill::find($id);
        $bills->delete();
        return redirect('admin/bill/list');
    }

    public function getDetail($id)
    {
        $bills_detail = BillDetail::find($id);
        $bills = Bill::all();
        return view('admin.bill_detail',compact('bills','bills_detail'));
    }
}
