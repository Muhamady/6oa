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
                        <i class="la la-list"></i> أقسام الأكاديمية
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary float-left mb-2" data-toggle="modal" data-target="#add-academy-numbers-modal">
                            <i class="la la-plus-circle"></i> قسم جديد
                        </button>
                        <table class="table table-bordered table-outline text-center table-striped table-hober">
                            <thead class="thead-light">
                                <tr>
                                    <th>صورة القسم</th>
                                    <th>اسم القسم</th>
                                    <th>الشهادة</th>
                                    <th>خيارات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sections as $section)
                                    <tr>
                                        <td><img class="img-thumbnail" src="{{ asset('sections/'. $section->image) }}" alt="Section Image" width="50"></td>
                                        <td>{{ $section->name }}</td>
                                        <td>{{ $section->certificate }}</td>
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




    {{-- Add Settings Modal --}}
    <div class="modal fade" id="add-academy-numbers-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            {!! Form::open(['method' => 'POST', 'action' => 'SectionsController@store' ,'files' => true]) !!}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تعريف قسم جديد</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('name', 'اسم القسم') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-list"></i>
                                        </span>
                                    </div>
                                    {!! Form::text('name', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('vision', 'رؤية القسم') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-eye"></i>
                                        </span>
                                    </div>
                                    {!! Form::textarea('vision', null, ['class'=>'form-control', 'rows' => '1']) !!}
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('message', 'رسالة القسم') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-envelope"></i>
                                        </span>
                                    </div>
                                    {!! Form::textarea('message', null, ['class'=>'form-control', 'rows' => '1']) !!}
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('goals', 'أهداف القسم') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-map-marker"></i>
                                        </span>
                                    </div>
                                    {!! Form::textarea('goals', null, ['class'=>'form-control', 'rows' => '1']) !!}
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-row">

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('instructors', 'أعضاء هيئة التدريس') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-users"></i>
                                        </span>
                                    </div>
                                    {!! Form::textarea('instructors', null, ['class'=>'form-control', 'rows' => '1']) !!}
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('description', 'توصيف عمل الخريج') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-list"></i>
                                        </span>
                                    </div>
                                    {!! Form::textarea('description', null, ['class'=>'form-control', 'rows' => '1']) !!}
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="form-row">

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('educational_system', 'النظام الدراسي') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-pen"></i>
                                        </span>
                                    </div>
                                    {!! Form::textarea('educational_system', null, ['class'=>'form-control', 'rows' => '1']) !!}
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('certificate', 'الشهادة') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-envelope"></i>
                                        </span>
                                    </div>
                                    {!! Form::textarea('certificate', null, ['class'=>'form-control', 'rows' => '1']) !!}
                                </div>
                            </div>
                        </div>

                    </div>


                    
                    <div class="form-row">



                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('name', 'صورة القسم') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-image"></i>
                                        </span>
                                    </div>
                                    {!! Form::file('image', ['class'=>'form-control']) !!}
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