@extends('admin.layouts.master')
@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">{{ __('admin.insurances') }}</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="{{ route('adminhome') }}">{{ __('admin.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('admin.insurances') }}</li>
                    </ol>
                </div>
            </div> <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <form action="" id="insurances" method="POST" data-parsley-validate>
                                @csrf
                                @method('put')
                                <input type="hidden" name="insuranceId" id="insurance_id" value="{{$insurance->id}}" class="form-control">
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-sm-2 col-form-label">{{ __('admin.name_ar') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" value="{{ $insurance->name_ar }}" type="text"
                                            name="name_ar" id="example-text-input"
                                            placeholder="{{ __('admin.name_ar') }} " parsley-trigger="change" >
                                            <span class="text-danger" id="name_arError"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-sm-2 col-form-label">{{ __('admin.name_en') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" value="{{ $insurance->name_en }}"
                                            name="name_en" id="example-text-input"
                                            placeholder="{{ __('admin.name_en') }}"  parsley-trigger="change" >
                                            <span class="text-danger" id="name_enError"></span>
                                    </div>
                                </div>
                                <div class="form-group text-center m-t-20">
                                    <div class="col-12">
                                        <button class="btn btn-primary btn-block btn-lg" name="submit"
                                            type="submit">تعديل</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
                <a href="{{url()->previous()}}">
                    <button class="btn btn-primary">{{ __('admin.return') }} <i class="fas fa-backward"></i></button>
                </a>
            </div>
        </div>
    </div>
</div>


@endsection
@push('js')
<script>
    $(function () {
        let name_ar = $("input[name=name_ar]").val();
        let name_en = $("input[name=name_en]").val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('body').on('submit','#insurances',function (e) {
                e.preventDefault();
                //  alert('asdasd');
                 let id = $('#insurance_id').val();
                 var url = '{{ route('insurances.update', ':id') }}';
                 url = url.replace(':id', id);
                $.ajax({
                    url: url,
                    method: "post",
                    data: new FormData(this),
                    dataType: 'json',
                    cache       : false,
                    contentType : false,
                    processData : false,

                    success: function (response) {
                        // console.log(response);
                        if(response.status == 'success'){
                            toastr.options = {
                            "closeButton": true,
                            "progressBar": true,
                            "showDuration": 500,
                            // "rtl": isRtl
                        }
                        toastr['info']("{{ __('admin.updatedsuccess') }}");
                        }
                    },
                    error:function (response) {
                        $('#name_arError').text(response.responseJSON.errors.name_ar);
                        $('#name_enError').text(response.responseJSON.errors.name_en);
                    }

                });
            });
        });
 </script>
@endpush
