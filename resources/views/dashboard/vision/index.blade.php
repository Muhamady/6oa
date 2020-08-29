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
                        <i class="la la-eye"></i> الرؤية
                    </div>
                    <div class="card-body">
                        @if(!isset($vision))
                        <button class="btn btn-primary float-left mb-2" data-toggle="modal" data-target="#add-banners-modal">
                            <i class="la la-plus-circle"></i> رؤية الأكاديمية
                        </button>
                        @endif
                        <table class="table table-bordered table-outline text-center table-striped table-hober">
                            <thead class="thead-light">
                                <tr>
                                    <th>الرؤية</th>
                                    <th>الرسالة</th>
                                    <th>الهدف</th>
                                    <th>خيارات</th>
                                </tr>
                            </thead>
                            <tbody>
                               @isset($vision)
                               <tr>
                                    <td>{{ $vision->vision }}</td>
                                    <td>{{ $vision->message }}</td>
                                    <td>{{ $vision->goal }}</td>
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
            {!! Form::open(['method' => 'POST', 'action' => 'VisionController@store']) !!}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        تعريف رؤية الأكاديمية
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('vision', 'الرؤية') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-eye"></i>
                                        </span>
                                    </div>
                                    {!! Form::textarea('vision',null, ['class'=>'form-control', 'required']) !!}
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('message', 'الرسالة') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-envelope"></i>
                                        </span>
                                    </div>
                                    {!! Form::textarea('message',null, ['class'=>'form-control', 'required']) !!}
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('goal', 'الهدف') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-ball"></i>
                                        </span>
                                    </div>
                                    {!! Form::textarea('goal', null,['class'=>'form-control', 'required']) !!}
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