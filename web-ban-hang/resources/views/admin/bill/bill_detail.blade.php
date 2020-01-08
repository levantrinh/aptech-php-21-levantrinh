@extends('admin.adminMaster')
@section('content')
<div class="container">
    <div class="row">
    <div class="col-2">
    </div>
    <div class="col-10">
        <div>
            <h2 class="text-center">Chi tiết đơn hàng</h2>
        </div>
        <hr>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container123  col-md-6"   style="">
                                
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="col-md-4">Thông tin khách hàng</th>
                                        <th class="col-md-6">Chi tiết</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Tên người đặt hàng</td>
                                        <td>{{ $customerInfo->customer_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Ngày đặt hàng</td>
                                        <td>{{ $customerInfo->bill_date }}</td>
                                    </tr>
                                    <tr>
                                        <td>Số điện thoại</td>
                                        <td>{{ $customerInfo->customer_phone }}</td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ</td>
                                        <td>{{ $customerInfo->customer_address }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{ $customerInfo->customer_email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Lưu ý</td>
                                        <td>{{ $customerInfo->customer_note }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <table id="myTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                <thead>
                                <tr role="row">
                                    <th>Tên sản phẩm</th>
                                    <th>Loại sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá tiền</th>
                                </thead>
                                <tbody>
                                @foreach($billInfo as $bill)
                                    <tr>
                                        <td>{{ $bill->product_name }}</td>
                                        <td>{{ $bill->type_product }}</td>
                                        <td>{{ $bill->qty }}</td>
                                        <td>{{ number_format($bill->price,0,",",".") }} <u>đ</u></td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td class=" text-right" colspan="4"><b>Tổng tiền</b></td>
                                    <td colspan="1"><b class="text-red">{{ $customerInfo->total }}0 <u>đ</u></b></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <form action="{{ url('bill') }}/{{ $customerInfo->id }}" method="POST">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="form-inline">
                                        <label for="status" class="mb-1">Trạng thái giao hàng:  </label>
                                        <select name="status" id="status" class="form-control input-inline" style="width: 150px">
                                            <option value="1">Chưa giao</option>
                                            <option value="2">Đã giao</option>
                                            <option value="3">Hủy đơn</option>
                                        </select>
                                        <input type="submit" value="Xử lý" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br>
        </section>
    </div>
</div>
@endsection