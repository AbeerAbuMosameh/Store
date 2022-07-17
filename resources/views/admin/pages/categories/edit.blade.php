@extends('admin.layouts.master')
@section('title')
    Edit Category
@endsection
@section('content')
    <div class="content-wrapper">
        @foreach ( $errors->all() as  $msg)
            <div class="alert alert-danger">{{ $msg }}</div>
        @endforeach
        <div class="card card-info">

            <div class="card-header">


                <h3 class="card-title"><i class="fa fa-plus"> </i> Edit Category</h3>


            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="{{ route('categories.update', $category->id) }}"
                  enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Category Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" value="{{$category->title}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Active</label>


                        <div class="form-group">
                            <td>
{{--                                @if($category->active === 1)--}}
{{--                                    value="{{$category->active}}" checked--}}
{{--                                @endif--}}

                                <div class="custom-control custom-switch">
                                    <input type="hidden" name="active" value="0"/>
                                    <input type="checkbox" name="active"
                                           class="custom-control-input" id="customSwitch1" @if( old('active') || (!old('submit') && $category->active) ) checked='checked' @endif >
                                    <label class="custom-control-label"
                                           for="customSwitch1">active</label>
                                    <br><small> Is Product available to display</small>

                                </div>
                            </td>
                        </div>
                    </div>


                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Update</button>
                    <button type="reset" class="btn btn-default float-right">Rsest</button>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>


    </div>

@endsection

