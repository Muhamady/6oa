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
                        <i class="la la-graduation-cap"></i> الأكاديمية في أرقام
                    </div>
                    <div class="card-body">
                        @if(count($academies) == 0 )
                        <button class="btn btn-primary float-left mb-2" data-toggle="modal" data-target="#add-academy-numbers-modal">
                            <i class="la la-plus-circle"></i> تعريف الأرقام
                        </button>
                        @endif
                        <table class="table table-bordered table-outline text-center table-striped table-hober">
                            <thead class="thead-light">
                                <tr>
                                    <th>عدد سنوات الخبرة</th>
                                    <th>عدد اقسام الأكايديمية</th>
                                    <th>عدد الخريجين</th>
                                    <th>عدد اعضاء هيئة التدريس</th>
                                    <th>خيارات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($academies as $academy)
                                    <tr>
                                        <td>{{ $academy->experience_years }}</td>
                                        <td>{{ $academy->academy_sections }}</td>
                                        <td>{{ $academy->graduates }}</td>
                                        <td>{{ $academy->instructors }}</td>
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
    @if(count($academies) == 0)
    <div class="modal fade" id="add-academy-numbers-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            {!! Form::open(['method' => 'POST', 'action' => 'AcademyNumbersController@store']) !!}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تعريف أرقام الأكاديمية</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('experience_years', 'عدد سنوات الخبرة') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-list"></i>
                                        </span>
                                    </div>
                                    {!! Form::number('experience_years', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('academy_sections', 'عدد اقسام الأكاديمية') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-list"></i>
                                        </span>
                                    </div>
                                    {!! Form::number('academy_sections', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('graduates', 'عدد الخريجين') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-graduation-cap"></i>
                                        </span>
                                    </div>
                                    {!! Form::number('graduates', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('instructors', 'عدد اعضاء هيئة التدريس') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-users"></i>
                                        </span>
                                    </div>
                                    {!! Form::number('instructors', null, ['class'=>'form-control']) !!}
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
    @endif

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