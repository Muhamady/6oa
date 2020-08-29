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

        <div class="card">
            <div class="card-body">
                <div class="nav-tabs-boxed">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home">القاعات والمباني</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">حفلات التخرج</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#messages" role="tab" aria-controls="messages">المؤتمرات والندوات</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <button class="btn btn-primary float-left mb-2" data-toggle="modal" data-target="#add-academy-numbers-modal">
                                <i class="la la-plus-circle"></i> صورة جديدة
                            </button>
                            <table class="table table-bordered table-outline text-center table-striped table-hober">
                                <thead class="thead-light">
                                    <tr>
                                        <th>صورة</th>
                                        <th>حذف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($buildings as $building)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('buildings/'. $building->image) }}" alt="Building Image" width="50">
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="la la-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel">
                            <button class="btn btn-primary float-left mb-2" data-toggle="modal" data-target="#add-graduation">
                                <i class="la la-plus-circle"></i> صورة جديدة
                            </button>
                            <table class="table table-bordered table-outline text-center table-striped table-hober">
                                <thead class="thead-light">
                                    <tr>
                                        <th>صورة</th>
                                        <th>حذف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($graduations as $graduation)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('graduations/'. $graduation->image) }}" alt="Graduation Image" width="50">
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="la la-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="messages" role="tabpanel">
                            <button class="btn btn-primary float-left mb-2" data-toggle="modal" data-target="#add-conference">
                                <i class="la la-plus-circle"></i> مؤتمر جديد
                            </button>
                            <table class="table table-bordered table-outline text-center table-striped table-hober">
                                <thead class="thead-light">
                                    <tr>
                                        <th>صورة</th>
                                        <th>الاسم</th>
                                        <th>تاريخ المؤتمر</th>
                                        <th>خيارات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($conferences as $conference)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('conferences/'. $conference->image) }}" alt="Conference Image" width="50">
                                        </td>
                                        <td>{{ $conference->name }}</td>
                                        <td>{{ $conference->conference_date }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-success">
                                                <i class="la la-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="la la-trash"></i>
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


    </div>




    {{-- Add Settings Modal --}}
    <div class="modal fade" id="add-academy-numbers-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            {!! Form::open(['method' => 'POST', 'action' => 'AcademyMediaController@addNewBuilding' ,'files' => true]) !!}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">صورة جديدة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning font-weight-bold">
                                *
                                يمكنك رفع اكثر من صورة في المرة الواحدة
                            </div>
                        </div>
                    </div>

                    <div class="form-row appendHere">

                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                {!! Form::label('image', 'صورة') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-image"></i>
                                        </span>
                                    </div>
                                    {!! Form::file('image[]', ['class'=>'form-control', 'multiple']) !!}
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









    {{-- Add Settings Modal --}}
    <div class="modal fade" id="add-graduation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            {!! Form::open(['method' => 'POST', 'action' => 'AcademyMediaController@addNewGraduation' ,'files' => true]) !!}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">صورة جديدة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning font-weight-bold">
                                *
                                يمكنك رفع اكثر من صورة في المرة الواحدة
                            </div>
                        </div>
                    </div>

                    <div class="form-row appendHere">

                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                {!! Form::label('image', 'صورة') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-image"></i>
                                        </span>
                                    </div>
                                    {!! Form::file('image[]', ['class'=>'form-control', 'multiple']) !!}
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











{{-- Add Settings Modal --}}
<div class="modal fade" id="add-conference" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        {!! Form::open(['method' => 'POST', 'action' => 'AcademyMediaController@addNewConference' ,'files' => true]) !!}
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">مؤتمر جديد</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('image', 'صورة') !!}
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


                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('video', 'فيديو') !!}
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="la la-video"></i>
                                    </span>
                                </div>
                                {!! Form::file('video', ['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>

                </div>


                <div class="form-row">

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('name', 'اسم المؤتمر') !!}
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="la la-pen"></i>
                                    </span>
                                </div>
                                {!! Form::text('name',null, ['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('date', 'تاريخ المؤتمر') !!}
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="la la-calendar"></i>
                                    </span>
                                </div>
                                {!! Form::date('date',null ,['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>

                </div>

                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('description', 'وصف المؤتمر') !!}
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="la la-list"></i>
                                    </span>
                                </div>
                                {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
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