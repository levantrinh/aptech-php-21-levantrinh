<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Customer;
use App\BillDetail;
use App\Bill;
class AdminBillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $bills = Bill::all();

            return view('admin/bill.bill_list', compact('bills'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $customerInfo = DB::table('bills')
                    ->join('customer', 'bills.id_customer', '=', 'customer.id')
                    ->where('bills.id',$id)
                    ->select('bills.*',
                    'bills.date_order as bill_date','customer.name as customer_name','customer.email as customer_email','customer.address as customer_address','customer.phone_number as customer_phone','customer.note as customer_note')
                    ->first();
        $billInfo = DB::table('bill_detail')
                    ->join('products', 'bill_detail.id_product', '=', 'products.id')
                    ->join('type_products', 'products.id_type', '=', 'type_products.id')
                    ->where('bill_detail.id_bill',$id)
                    ->select('bill_detail.*',
                    'products.name as product_name', 'type_products.name as type_product')
                    ->get();
                    //dd($billInfo); exit();
            return view('admin.bill.bill_detail',compact('customerInfo','billInfo'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bill = Bill::find($id);
        $bill->status = $request->input('status');
        $bill->save();
        Session::flash('message', "Cập nhật trạng thái đơn hàng thành công");

        return Redirect::to('bill');
    }
}