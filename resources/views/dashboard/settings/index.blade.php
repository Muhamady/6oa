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
                        <i class="la la-cogs"></i> الأعدادات
                    </div>
                    <div class="card-body">
                        @if(count($settings) == 0 )
                        <button class="btn btn-primary float-left mb-2" data-toggle="modal" data-target="#add-settings-modal">
                            <i class="la la-plus-circle"></i> تعريف الأعدادات
                        </button>
                        @endif
                        <table class="table table-bordered table-outline text-center table-striped table-hober">
                            <thead class="thead-light">
                                <tr>
                                    <th>رقم الهاتف</th>
                                    <th>رقم 1 واتس آب</th>
                                    <th>رقم 2 واتس آب</th>
                                    <th>رقم 3 واتس آب</th>
                                    <th>سوشيال ميديا</th>
                                    <th>خيارات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($settings as $setting)
                                    <tr>
                                        <td>{{ is_null($setting->phone) ? 'لا يوجد' : $setting->phone }}</td>
                                        <td>{{ is_null($setting->whatsapp_one) ? 'لا يوجد' : $setting->whatsapp_one }}</td>
                                        <td>{{ is_null($setting->whatsapp_two) ? 'لا يوجد' : $setting->whatsapp_two }}</td>
                                        <td>{{ is_null($setting->whatsapp_three) ? 'لا يوجد' : $setting->whatsapp_three }}</td>
                                        <td>
                                            @if(!is_null($setting->facebook))
                                                <a href="{{ $setting->facebook }}" target="_blank" class="text-decoration-none btn btn-sm btn-facebook">
                                                    <i class="la la-facebook square"></i>
                                                </a>
                                            @endif
                                            @if(!is_null($setting->twitter))
                                                <a href="{{ $setting->twitter }}" target="_blank" class="text-decoration-none btn btn-sm btn-twitter">
                                                    <i class="la la-twitter square"></i>
                                                </a>
                                            @endif
                                            @if(!is_null($setting->instagram))
                                                <a href="{{ $setting->instagram }}" target="_blank" class="text-decoration-none btn btn-sm btn-instagram">
                                                    <i class="la la-instagram square"></i>
                                                </a>
                                            @endif
                                            @if(!is_null($setting->youtube))
                                                <a href="{{ $setting->youtube }}" target="_blank" class="text-decoration-none btn btn-sm btn-youtube">
                                                    <i class="la la-youtube square"></i>
                                                </a>
                                            @endif
                                        </td>
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
    @if(count($settings) == 0)
    <div class="modal fade" id="add-settings-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            {!! Form::open(['method' => 'POST', 'action' => 'SettingsController@store']) !!}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تعريف الأعدادات</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('phone', 'رقم الهاتف') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-mobile"></i>
                                        </span>
                                    </div>
                                    {!! Form::number('phone', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('whatsapp_one', 'رقم 1 واتس آب') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-whatsapp"></i>
                                        </span>
                                    </div>
                                    {!! Form::number('whatsapp_one', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('whatsapp_two', 'رقم 2 واتس آب') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-whatsapp"></i>
                                        </span>
                                    </div>
                                    {!! Form::number('whatsapp_two', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('whatsapp_three', 'رقم 3 واتس آب') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-whatsapp"></i>
                                        </span>
                                    </div>
                                    {!! Form::number('whatsapp_three', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('facebook', 'فيس بوك') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-facebook"></i>
                                        </span>
                                    </div>
                                    {!! Form::text('facebook', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('instagram', 'انستغرام') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-instagram"></i>
                                        </span>
                                    </div>
                                    {!! Form::text('instagram', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('youtube', 'يوتيوب') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-youtube"></i>
                                        </span>
                                    </div>
                                    {!! Form::text('youtube', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('twitter', 'تويتر') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-twitter"></i>
                                        </span>
                                    </div>
                                    {!! Form::text('twitter', null, ['class'=>'form-control']) !!}
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