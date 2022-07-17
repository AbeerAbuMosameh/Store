@extends('admin.layouts.master')

@section('title')
    Categories
@endsection

@section('css')
    <link rel="stylesheet" href={{asset('admin/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}>
    <link rel="stylesheet"
          href={{asset('admin/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}>
    <link rel="stylesheet" href={{asset('admin/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}>
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Categories </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>active</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 0; ?>

                                    @foreach ($categories as $category)
                                        <?php $i++; ?>
                                        <tr>
                                            <th scope="row">{{"$i"}}</th>
                                            <td>{{$category->title}}</td>
                                            @if($category->active === 1)
                                                <td>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" name="active"
                                                               class="custom-control-input" id="customSwitch1"
                                                               value="{{$category->active}}"  disabled checked >
                                                        <label class="custom-control-label"
                                                               for="customSwitch1"></label>
                                                    </div>
                                                </td>
                                            @else
                                                <td>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" name="active"
                                                               class="custom-control-input" id="customSwitch1"
                                                               value="{{$category->active}}" disabled>
                                                        <label class="custom-control-label"
                                                               for="customSwitch1"></label>
                                                    </div>
                                                </td>
                                            @endif

                                            <td>
                                                <div class="mt-stats">
                                                    <div class="btn-group btn-group btn-group-justified">

                                                        <a href="{{route('categories.edit', $category->id)}}"
                                                           class="btn font-green">
                                                            <i class="fa fa-edit"></i> Edit
                                                        </a>

                                                        <form method="POST" action="{{ route('categories.destroy', $category->id) }}">
                                                            @csrf
                                                            @method('delete')
                                                            <button onclick="return confirm('Are you sure?')"
                                                               class="btn font-green">
                                                                <i class="fa fa-trash">delete</i></button>
                                                        </form>


                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
@endsection

@section('js')
    <!-- jQuery -->
    <script src={{asset('admin/assets/plugins/jquery/jquery.min.js')}}></script>
    <!-- Bootstrap 4 -->
    <script src={{asset('admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}></script>
    <script src={{asset('admin/assets/plugins/datatables/jquery.dataTables.min.js')}}></script>
    <script src={{asset('admin/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}></script>
    <script src={{asset('admin/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}></script>
    <script src={{asset('admin/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}></script>
    <script src={{asset('admin/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}></script>
    <script src={{asset('admin/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}></script>
    <script src={{asset('admin/assets/plugins/jszip/jszip.min.js')}}></script>
    <script src={{asset('admin/assets/plugins/pdfmake/pdfmake.min.js')}}></script>
    <script src={{asset('admin/assets/plugins/pdfmake/vfs_fonts.js')}}></script>
    <script src={{asset('admin/assets/plugins/datatables-buttons/js/buttons.html5.min.js"')}}></script>
    <script src={{asset('admin/assets/plugins/datatables-buttons/js/buttons.print.min.js')}}></script>
    <script src={{asset('admin/assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}></script>
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection

