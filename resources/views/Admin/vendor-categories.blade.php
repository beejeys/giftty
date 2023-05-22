@extends('layouts.layout')

@section('styles')
<link rel="stylesheet" href="{{asset('assets/admin/css/plugins/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content container">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Dashboard ] start -->
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-6 d-flex align-items-center mb-4">
                        <h1 class="d-inline-block font-weight-normal mb-0">Vendor Categories</h1>

                    </div>
                    <div class="col-sm-6 d-block d-sm-flex align-items-center justify-content-end mb-4 text-right">
                        <a href="{{url('admin/vendor-categories/create')}}" class="btn d-block ml-auto btn-primary"
                            role="button"><i class="feather icon-plus mr-2"></i>New Vendor Category</a>

                        <div class="btn-group btn-group-toggle btn-group-link">

                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">


                        <div class="card">
                            <div class="card-body">


                                <div class="table-responsive">

                                    @if(session()->has('message'))
                                    {!! session('message') !!}
                                    @endif

                                     @if(count($vendor_categories))

                                    <form action="{{admin('vendor-categories/drop')}}" method="post">
                                        @csrf
                                        <table id="usertable" class="table table-center mb-0 ">


                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>id</th>
                                                    <th>Name</th>
                                                    <th>Status</th>
                                                    <th>Created_at</th>
                                                    <th class="text-right">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             
                                                @foreach($vendor_categories as $vendor_category)

                                                <tr>
                                                    <td>
                                                        <div class="form-group d-inline">
                                                            <div
                                                                class="checkbox checkbox-primary checkbox-fill  d-inline">
                                                                <input type="checkbox" name="checked[ ]"
                                                                    value="{{ $vendor_category->id}}"
                                                                    id="checkbox-s-{{ $vendor_category->id}}"
                                                                    class="vendors-for-delete">
                                                                <label for="checkbox-s-{{ $vendor_category->id}}" class="cr"
                                                                    onclick="checkDrop();"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{ $vendor_category->id}}</td>
                                                    <td>{{ $vendor_category->name}}</td>
                                                    <td>
                                                        <div class="custom-control custom-switch custom-control-inline"
                                                            style="margin-right:-10px;">
                                                            <input type="checkbox"
                                                                class="custom-control-input input-success"
                                                                id="list_input_featured{{ $vendor_category->id}}"
                                                                {{ $vendor_category->status ? 'checked':''}}
                                                                onchange="changeStatus('{{ $vendor_category->id}}');">
                                                            <label class="custom-control-label"
                                                                id="list_label_featured{{ $vendor_category->id}}"
                                                                for="list_input_featured{{ $vendor_category->id}}"></label>
                                                        </div>
                                                    </td>
                                                    <td>{{ $vendor_category->created_at->diffForHumans()}}</td>
                                                    <td class="text-right">
                                                        <a href="{{ url('admin/vendor-categories/'.$vendor_category->id.'/edit')}}"> <i
                                                                class="far fa-edit"></i></a> &nbsp;
                                                        <a href="{{ url('admin/vendor-categories/'.$vendor_category->id.'/delete')}}"
                                                            onclick="javascript:return confirm('Do you want to delete the Vendor Category');">
                                                          
                                                            <i class="fas fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                               
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <p>
                                            <button type="submit" class="btn btn-danger" disabled id="bulk-delete"><i
                                                    class="fa fa-trash"></i> &nbsp; Delete Selected</button>
                                        </p>
                                    </form>
                                     @else
                                    <div id="empty-message"><p>Sorry no Vendor category exists. <a href="{{admin('vendor-categories/create')}}">Create the Vendor category</a></p></div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Dashboard ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
@endsection
@section('bottom-scripts')
<!-- datatable Js -->
<script src="{{asset('assets/admin/js/plugins/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/pcoded.min.js')}}"></script>
<script>
$(function() {
    $('#usertable').DataTable();
})

function checkDrop() {
    setTimeout(function() {
        if ($(".vendors-for-delete:checked").length > 0) {
            $("#bulk-delete").removeAttr("disabled");
        } else {
            $("#bulk-delete").attr("disabled", "disabled");
        }
    }, 500);
}

function changeStatus(id) {
    if (id) {
        $.ajax({
            url: "/admin/vendor-categories/" + id + "/status",
            type: 'get',
            data: {},
            success: function(data) {
                console.log(data.status);
            }
        });
    }
}
</script>
@endsection