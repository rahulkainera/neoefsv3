@extends('app')
@section('content')
    <h1>Update Mutualfund</h1>
    {!! Form::model($mutualfund,['method' => 'PATCH','route'=>['mutualfunds.update',$mutualfund->id]]) !!}
    <div class="form-group">
        {!! Form::label('type', 'Type:') !!}
        {!! Form::text('type',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('acquired_value', 'Acquired Value:') !!}
        {!! Form::text('acquired_value',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('attained_date', 'Attained Date:') !!}
        {!! Form::text('attained_date',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('recent_value', 'Recent Value:') !!}
        {!! Form::text('recent_value',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('recent_date', 'Recent Date:') !!}
        {!! Form::text('recent_date',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop
