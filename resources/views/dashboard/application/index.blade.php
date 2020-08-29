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
                        <i class="la la-question"></i> الأسئلة المتكررة
                    </div>
                    <div class="card-body">
                        @if(!isset($application))
                        <button class="btn btn-primary float-left mb-2" data-toggle="modal" data-target="#add-banners-modal">
                            <i class="la la-plus-circle"></i> تعريف شروط التقديم
                        </button>
                        @endif
                        <table class="table table-bordered table-outline text-center table-striped table-hober">
                            <thead class="thead-light">
                                <tr>
                                    <th>الشروط</th>
                                    <th>الأوراق المطلوبة</th>
                                    <th>المدة الدراسية</th>
                                    <th>خيارات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($application)
                                <tr>
                                    <td>{{ $application->pre }}</td>
                                    <td>{{ $application->notes }}</td>
                                    <td>{{ $application->duration }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-danger"><i class="la la-trash"></i></button>
                                        <button class="btn btn-sm btn-success"><i class="la la-edit"></i></button>
                                    </td>
                                </tr>
                                @endisset
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
            {!! Form::open(['method' => 'POST', 'action' => 'ApplicationsController@store']) !!}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        تعريف شروط التقديم
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('pre', 'شروط القبول') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-question"></i>
                                        </span>
                                    </div>
                                    {!! Form::textarea('pre',null, ['class'=>'form-control','rows' => '2', 'required']) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('notes', 'الأوراق المطلوبة') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-envelope"></i>
                                        </span>
                                    </div>
                                    {!! Form::textarea('notes',null, ['class'=>'form-control','rows' => '2', 'required']) !!}
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('duration', 'المدة الدراسية') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-calendar"></i>
                                        </span>
                                    </div>
                                    {!! Form::textarea('duration',null, ['class'=>'form-control','rows' => '1', 'required']) !!}
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