@extends('admin.layouts.master')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Order
                        <small>Details</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <h1>Details Order No.{{$order[0]->order_id}}</h1>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr align="center">
                                <th>Product name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order as $item)
                                <tr align="center">
                                    <td>{{ $item->product_name }}</td>
                                    <td>${{ $item->price }}</td>
                                    <td>{{ $item->quantity}}</td>
                                    <td> ${{ $item->price * $item->quantity }}</td>
                                </tr>
                            @endforeach
                            <tr align="center">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>${{ $total}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection
