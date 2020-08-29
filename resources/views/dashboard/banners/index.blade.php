@extends('dashboard.layout')
@section('content')
    <div class="container-fluid">
        @if($errors->any())
            <div class="alert font-weight-bold alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header font-weight-bold">
                        <i class="la la-image"></i> الأعلانات
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary float-left mb-2" data-toggle="modal" data-target="#add-banners-modal">
                            <i class="la la-plus-circle"></i> اعلان جديد
                        </button>
                        <table class="table table-bordered table-outline text-center table-striped table-hober">
                            <thead class="thead-light">
                                <tr>
                                    <th>الصورة</th>
                                    <th>العنوان</th>
                                    <th>الوصف</th>
                                    <th>خيارات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($banners as $banner)
                                    <tr>
                                        <td><img src="{{ asset('banners/'. $banner->image) }}" alt="Banner Image" style="width:50px;height:50px;"></td>
                                        <td>{{ $banner->title }}</td>
                                        <td>{{ $banner->description }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="la la-trash"></i>
                                            </button>
                                            <button class="btn btn-sm btn-success">
                                                <i class="la la-edit"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{-- Add Banners Modal --}}
    <div class="modal fade" id="add-banners-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            {!! Form::open(['method' => 'POST', 'action' => 'BannersController@store', 'files' => true]) !!}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">اضافة اعلان جديد</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('image', 'الصورة') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-image"></i>
                                        </span>
                                    </div>
                                    {!! Form::file('image', ['class'=>'form-control', 'required']) !!}
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('title', 'العنوان') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-list"></i>
                                        </span>
                                    </div>
                                    {!! Form::text('title', null, ['class'=>'form-control', 'required']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('description', 'الوصف') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-whatsapp"></i>
                                        </span>
                                    </div>
                                    {!! Form::textarea('description', null, ['class'=>'form-control', 'rows' => '1', 'required']) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('button_one_text', 'عنوان الزر الأول') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-thumbs-up"></i>
                                        </span>
                                    </div>
                                    {!! Form::text('button_one_text', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('button_one_link', 'رابط الزر الأول') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-thumbs-up"></i>
                                        </span>
                                    </div>
                                    {!! Form::text('button_one_link', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('button_two_text', 'عنوان الزر الثاني') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-thumbs-up"></i>
                                        </span>
                                    </div>
                                    {!! Form::text('button_two_text', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('button_two_link', 'رابط الزر الثاني') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-thumbs-up"></i>
                                        </span>
                                    </div>
                                    {!! Form::text('button_two_link', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">تأكيد</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">تراجع</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    @if(Session::has('created_successfully'))
    <script>
        Swal.fire({
            title: "تهانينا",
            text: "تم بنجاح",
            icon: "success",
            confirmButtonText: "حسناً"
        })
    </script>
    @endif
@endsection