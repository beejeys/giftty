@extends('layouts.layout')
@section('styles')
<!-- <link rel="stylesheet" href="croppie.css" /> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />
@endsection
@section('content')


<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content container">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Sidebar Forms ] start -->

            <div class="col-lg-12">

                @if($errors->count())
                <div class="alert alert-danger alert-dismissable">
                    Sorry some errors in form submission
                </div>
                @endif

                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
            
                <div class="row">
                    <div class="col-sm-6 d-flex align-items-center mb-4">
                            <h1 class="d-inline-block font-weight-normal mb-0"> @if(isset($customer)) Edit @else Create New Customer @endif </h1>
                    </div>
                    <div class="col-sm-6 d-block d-sm-flex align-items-center justify-content-end mb-4 text-right">
                         <a href="{{url('admin/customers')}}" class="btn d-block ml-auto btn-primary" role="button"><i class="feather icon-plus mr-2"></i>Back to Customers</a>
                        <div class="btn-group btn-group-toggle btn-group-link">
                        </div>
                    </div>
                </div> 

                <div class="card">
                    <div class="card-body">
                        <form
                            action="@if(isset($customer)){{admin('customers/'.$customer->id)}}@else{{admin('customers')}}@endif"
                            class="user-form-wrap form-submit-vendor" method="post" enctype="multipart/form-data">

                            @if(isset($customer)) @method('PUT') @endif

                            {{ csrf_field() }}

                            <div class="form-group mb-4">
                                <label class="h6 f-12 ">First Name</label>
                                <input type="text" class="form-control" name="firstname"
                                    value="{{old('firstname',isset($customer) ? $customer->firstname:'')}}">
                                <span class="form-error">{{$errors->first('firstname')}}</span>
                            </div>
                            <div class="form-group mb-4">
                                <label class="h6 f-12 "> Last Name</label>
                                <input type="text" class="form-control" name="lastname"
                                    value="{{old('lastname',isset($customer) ? $customer->lastname:'')}}">
                                <span class="form-error">{{$errors->first('lastname')}}</span>
                            </div>

                            <div class="form-group mb-4">
                                <label class="h6 f-12 ">Email</label>
                                <input type="email" class="form-control" name="email" autocomplete="off"
                                    value="{{old('email',isset($customer) ? $customer->email:'')}}">
                                <span class="form-error">{{$errors->first('email')}}</span>
                            </div>
                            <div class="form-group mb-4">
                                <label class="h6 f-12">Password</label>
                                <input type="password" class="form-control" name="password" autocomplete="off" value="">
                                <span class="form-error">{{$errors->first('password')}}</span>
                            </div>
                            <div class="form-group mb-4">
                                <label class="h6 f-12 ">Phone</label>
                                <input type="text" class="form-control mob_no" data-mask="999-999-9999" name="phone"
                                    value="{{old('phone',isset($customer) ? $customer->phone:'')}}">
                                <span class="form-error">{{$errors->first('phone')}}</span>
                            </div>
                            <!--    <div class="form-group mb-4">
                                        <label class="h6 f-12 ">Website</label>
                                        <input type="text" class="form-control" name="website" value="{{old('website',isset($customer) ? $customer->website:'')}}">
                                        <span class="form-error">{{$errors->first('website')}}</span>
                                    </div> -->
                            <div class="form-group mb-4">
                                <label class="h6 f-12">Description</label>
                                <textarea rows="8" column="200" class="form-control"
                                    name="bio">{{old('bio',isset($customer) ? $customer->bio:'')}}</textarea>
                                <span class="form-error">{{$errors->first('bio')}}</span>
                            </div>

                            <!-- <div class="form-group mb-4">
                                        <label class="h6 f-12">Vendor Type</label>
                                        <select class="form-control" name="vendor_type" > 
                                       
                                            <option value="Business"  @if(old('vendor_type',isset($customer) ? $customer->vendor_type:'')=='Business') selected @endif>Business
                                            </option>
                                            <option value="Individual" @if(old('vendor_type',isset($customer) ? $customer->vendor_type:'')=='Individual') selected @endif>Individual
                                            </option>

                                        </select>
                                        <span class="form-error">{{$errors->first('vendor_type')}}</span>
                                    </div>
 -->

                            <div class="col-lg-12 col-md-12 text-center">
                                <h3>Profile Picture</h3>
                            </div>
                            <div class="col-lg-12">
                                <div class="jumbotron text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <img id="uploaded-image"
                                                src="{{old('picture',isset($customer) && $customer->picture != '' ? asset('images/users/'.$customer->id.'/'.$customer->picture):asset('images/users/dummy-image.jpg'))}}">


                                        </div>
                                        <div class="input-group mt-3">
                                            <div class="custom-file">
                                                <input type="file" accept="image/*" id="profile_pic">
                                                <input type="hidden" name="picture" id="picture" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="custom-control custom-switch custom-control-inline">
                                <input type="checkbox" class="custom-control-input input-success" name="status"
                                    id="customswitchclr3" @if(old('status',isset($customer) ? $customer->status:0) == 1)
                                checked @endif>
                                <label class="custom-control-label" for="customswitchclr3">
                                    Active
                                </label>
                            </div>

                            <button class="btn btn-primary btn-block mt-3"> @if(isset($customer)) Update Customer @else
                                Add Customer @endif</button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- [ Sidebar Forms ] end -->
</div>
<!-- [ Main Content ] end -->
</div>
</div>


<!-- This is the modal -->
<div class="modal" tabindex="-1" role="dialog" id="uploadimageModal">
    <div class="modal-dialog" role="document" style="min-width: 700px">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div id="image_demo"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary crop_image">Crop and Save</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


@endsection
<!-- [ Main Content ] end -->

@section('bottom-scripts')
<script src="{{asset('assets/admin/js/plugins/croppie.js')}}"></script>
<script src="croppie.js"></script>
<script src="{% static 'ImageCropper/image-cropper.js' %}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{asset('assets/admin/js/plugins/moment.min.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/daterangepicker.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/dropify.min.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/select2.full.min.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/jquery.mask.min.js')}}"></script>
<script>
// [ Sidebar Forms ] start
var image_crop = $('#image_demo').croppie({
    viewport: {
        width: 250,
        height: 250,
        type: 'square'
    },
    boundary: {
        width: 350,
        height: 350
    }
});
/// catching up the cover_image change event and binding the image into my croppie. Then show the modal.
$('#profile_pic').on('change', function() {
    var reader = new FileReader();
    reader.onload = function(event) {
        image_crop.croppie('bind', {
            url: event.target.result,
        });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal').modal('show');
});


$('.crop_image').click(function(event) {
    image_crop.croppie('result', {
        type: 'canvas',
        format: 'png'
    }).then(function(response) {
        $("#uploaded-image").attr("src", response);
        $("#picture").val(response);
    });
    $("#profile_pic").val("");
    $('#uploadimageModal').modal('hide');
});


$(function() {
    $('#logo-dropify1').dropify({
        messages: {
            'default': 'Drag and drop a file here',
            'replace': 'Drag and drop or click to replace',
            'remove': 'Remove',
            'error': 'Ooops, something wrong happended.'
        }
    });
    $('#attachments-dropify1').dropify({
        messages: {
            'default': 'Drag and drop a file here',
            'replace': 'Drag and drop or click to replace',
            'remove': 'Remove',
            'error': 'Ooops, something wrong happended.'
        }
    });
    $(".office-mlt-select").select2();
    $(".location-mlt-select").select2();
});
// [ Sidebar Forms ] start

$(function() {
    $(document).ready(function() {
        // [ mobile-num masking ]
        $('.mob_no').mask('000-000-0000');
        // [ phone masking ]
        $('.phone').mask('0000-0000');
        // [ telphone-code masking ]
        $('.telphone_with_code').mask('(00) 0000-0000');
        // [ us-telphone masking ]
        $('.us_telephone').mask('(000) 000-0000');
    });
});
$(function() {
    $(document).ready(function() {
        $('input').attr('autocomplete', 'off');
    });
});
</script>

@endsection