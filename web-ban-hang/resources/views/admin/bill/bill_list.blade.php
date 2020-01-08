@extends('admin.adminmaster')
@section('content')
<div class="container">
            <div class="row">
                <div class="col-2">
                </div>
                <div class="col-10">
                    <div class="content-header">
                        <h3 class=" text-center">
                            Danh sách đơn hàng
                        </h3>
                    </div>
                    <!-- Main content -->
                    <section class="content">
                        @if (Session::has('message'))
                        <div class="alert alert-info"> {{ Session::get('message') }}</div>
                        @endif
                        <!-- Default box -->
                        <div class="box">
                            <div class="box-header with-border">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting">Tên khách</th>
                                                    <th class="sorting">Địa chỉ</th>
                                                    <th>Email</th>
                                                    <th class="sorting">Tổng tiền</th>
                                                    <th>Trạng thái</th>
                                                    <th class="sorting">Vào xem</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($bills as $bill)
                                                <tr>
                                                    <td>{{ $bill->customer->name }}</td>
                                                    <td>{{ $bill->customer->address }}</td>
                                                    <td>{{ $bill->customer->email }}</td>
                                                    
                                                    <td>{{ $bill->total }}</td>
                                                    <td>
                                                        @if(!($bill->status)) Chưa xử lý
                                                        @elseif($bill->status==1) Chưa giao hàng
                                                        @elseif($bill->status==2) Đã giao hàng
                                                        @else Đơn hàng đã hủy
                                                        @endif</td> 
                                                    
                                                    <td><a href="{{ url('bill')}}/{{ $bill->id }}/edit">Chi tiết</a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
@endsection