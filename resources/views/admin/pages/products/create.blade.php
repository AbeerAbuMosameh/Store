@extends('admin.layouts.master')
@section('title')
    create new product
@endsection
@section('css')
    <style>
        input.larger {
            width: 50px;
            height: 50px;
        }
    </style>
@stop
@section('content')
    <div class="content-wrapper">
        @foreach ( $errors->all() as  $msg)
            <div class="alert alert-danger">{{ $msg }}</div>
        @endforeach
        <div class="card card-info">

            <div class="card-header">


                <h3 class="card-title"><i class="fa fa-plus"> </i> Create New Product</h3>


            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" method="Post" action="{{route('products.store')}}"
                  enctype="multipart/form-data" >
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-11">
                            <label for="inputEmail3" class="col-sm-10 col-form-label">Title <small> name of
                                    Product </small></label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="form-group row">

                        <div class="col-5">
                            <label class="col-sm-10 col-form-label">Old Prcie <small> old price for
                                    product</small></label>
                            <div class="col-sm-10">
                                <input type="text" name="old_price" class="form-control">
                            </div>
                        </div>

                        <div class="col-5">
                            <label class="col-sm-10 col-form-label">New Prcie <small> new price for
                                    product</small></label>
                            <div class="col-sm-10">
                                <input type="text" name="new_price" class="form-control">
                            </div>
                        </div>


                    </div>
                    <div class="form-group row">
                        <div class="col-3">
                            <label for="inputEmail3" class="col-sm-10 col-form-label"> SKU </label>
                            <div class="col-sm-10">
                                <input type="text" name="sku" class="form-control">
                            </div>
                        </div>

                        <div class="col-4">
                            <label for="inputEmail3" class="col-sm-10 col-form-label">Category<small> select
                                    category</small></label>
                            <div class="col-sm-10">
                                <select class="form-control" name="Category_id">
                                    <option selected="">Choose...</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>


                        <div class="col-3">
                            <label for="inputEmail3" class="col-sm-10 col-form-label"> In Stock <small> Availability of
                                    product</small></label>
                            <div class="custom-control custom-switch">
                                <input type="hidden" name="in_stock" value="0"/>
                                <input type="checkbox" name="in_stock" class=" custom-control-input" id="customSwitch1"
                                       value="1" {{ old('active', isset($product) ? 'checked' : '') }}">
                                <label class=" larger custom-control-label" for="customSwitch1">active</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-11">
                            <label class="col-sm-10 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="3" name="description"
                                          placeholder="Enter ..."></textarea>
                            </div>

                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-11">
                            <label for="inputEmail3" class="col-sm-10 col-form-label">File input</label>

                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <label class="form-label">Category Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Store</button>
                    <button type="reset" class="btn btn-default float-right">Rsest</button>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>


    </div>

@endsection

