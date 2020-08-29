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
                        <i class="la la-question"></i> الفروع
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary float-left mb-2" data-toggle="modal" data-target="#add-banners-modal">
                            <i class="la la-plus-circle"></i> فرع جديد
                        </button>
                        <table class="table table-bordered table-outline text-center table-striped table-hober">
                            <thead class="thead-light">
                                <tr>
                                    <th>الأسم</th>
                                    <th>العنوان</th>
                                    <th>رقم التليفون</th>
                                    <th>خيارات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($branchs as $branch)
                                <tr>
                                    <td>{{ $branch->name }}</td>
                                    <td>{{ $branch->address }}</td>
                                    <td>{{ $branch->phone }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-danger"><i class="la la-trash"></i></button>
                                        <button class="btn btn-sm btn-success"><i class="la la-edit"></i></button>
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
            {!! Form::open(['method' => 'POST', 'action' => 'BranchsController@store', 'files' => true]) !!}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        تعريف شريك جديد
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="alert alert-warning font-weight-bold">
                                يمكنك رفع اكثر من صورة في المرة الواحدة
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('name', 'الأسم') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-list"></i>
                                        </span>
                                    </div>
                                    {!! Form::text('name',null, ['class'=>'form-control','required']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('address', 'العنوان') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-map-marker"></i>
                                        </span>
                                    </div>
                                    {!! Form::text('address',null, ['class'=>'form-control','required']) !!}
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('phone', 'رقم التليفون') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-mobile"></i>
                                        </span>
                                    </div>
                                    {!! Form::text('phone',null, ['class'=>'form-control','required']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('google_map', 'رابط الخريطة') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-map-marker"></i>
                                        </span>
                                    </div>
                                    {!! Form::text('google_map',null, ['class'=>'form-control','required']) !!}
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