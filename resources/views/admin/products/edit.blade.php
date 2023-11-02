@extends('admin.layouts.master')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product
                        <small>Edit</small>
                    </h1>
                    @if (count($errors))
                        <div class="alert alert-danger">
                            @foreach ($errors as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>ID</label>
                            <input class="form-control" name="id"
                                value="{{ $product->id }}" readonly/>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="name" placeholder="Please Enter Name"
                                value="{{ $product->product_name }}"/>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input class="form-control" name="price" placeholder="Please Enter Price"
                                value="{{ $product->price }}" />
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea id="content" name="description" class="ckeditor">{{ $product->product_description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Update</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection
