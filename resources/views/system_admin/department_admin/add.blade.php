@extends('layouts.admin.master')
@section('title')
    Thêm trưởng đơn vị
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-ml-12">
        @include('common.errors')
            <div class="row">
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            {!! Form::open([
                                        'method'=>'POST',
                                        'route'=>'department-admin.store'
                                        ]) !!}
                                {!! Form::label('nameAdminDepartment', 'Chọn người ủy nhiệm') !!}
                                <div class="form-group">
                                    {!! Form::select('user_id', $searchAdmin, null,
                                            ['class' => 'selectpicker form-control',
                                            'data-live-search' => 'true']) !!}
                                </div>

                                {!! Form::label('nameDepartment', 'Chọn phòng ban tiếp quản') !!}
                                <div class="form-group">
                                    {!! Form::select('department_id', $searchDepartment, null,
                                            ['class' => 'selectpicker form-control',
                                            'data-live-search' => 'true']) !!}
                                </div>
                                {!! Form::label('date-start', 'Chọn ngày bắt đầu tiếp quản') !!}
                                <div class="form-group">
                                    {!! Form::date('start_date', '', [
                                            'class'=>'form-control',
                                            'required']) !!}
                                </div>
                                {!! Form::label('date-end', 'Chọn ngày kết thúc') !!}
                                <div class="form-group">
                                    {!! Form::date('end_date', '', [
                                            'class'=>'form-control']) !!}
                                </div>
                                {!! Form::submit('Thêm', [
                                    'class'=>'btn btn-primary mt-4 pr-4 pl-4']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
