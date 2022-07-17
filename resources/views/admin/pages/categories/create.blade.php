@extends('admin.layouts.master')
@section('title')
    create new category
@endsection
@section('content')
    <div class="content-wrapper">
        @foreach ( $errors->all() as  $msg)
            <div class="alert alert-danger">{{ $msg }}</div>
        @endforeach
        <div class="card card-info">

            <div class="card-header">


                <h3 class="card-title"> <i class="fa fa-plus"> </i> Create New Category</h3>


            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal"  method="Post" action="{{route('categories.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Category Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Active</label>
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="hidden" name="active" value="0"/>
                                <input type="checkbox" name="active" class="custom-control-input" id="customSwitch1"
                                       value="1">
                                <label class="custom-control-label" for="customSwitch1">active</label>
                                <br><small> Is Product available to display</small>
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

