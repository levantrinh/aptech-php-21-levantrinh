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

        $customers = DB::table('customer')
                    ->orderBy('id', 'desc')
                    ->get();

            return view('admin/bill.bill_list', compact('customers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $customerInfo = DB::table('customer')
                        ->join('bills', 'customer.id', '=', 'bills.id_customer')
                        ->select('customer.*', 'bills.id as id_bill', 'bills.date_order as bill_date')
                        ->where('customer.id', '=', $id)
                        ->first();

        $billInfo = DB::table('bills')
                    ->join('bill_detail', 'bills.id', '=', 'bill_detail.id_bill')
                    ->leftjoin('products', 'bill_detail.id_product', '=', 'products.id')
                    ->leftjoin('type_products', 'products.id_type', '=', 'type_products.id')
                    ->where('bills.id_customer', '=', $id)
                    ->select('bills.*', 'bill_detail.*', 'products.name as product_name', 'type_products.name as type_product')
                    ->get();
                    
        
        $this->data['customerInfo'] = $customerInfo;
        $this->data['billInfo'] = $billInfo;
        
        return view('admin.bill.bill_detail', $this->data);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bill = DB::table('bill_detail')->join('bills','bill_detail.id_bill','=','bills.id')
                                        ->leftjoin('customer','bills.id_customer','=','customer.id')
                                        ->where('bills.id_customer', $id)->delete();
        
        Session::flash('message', "Xóa đơn hàng thành công");
        
        return Redirect::to('bill');
    }
}
