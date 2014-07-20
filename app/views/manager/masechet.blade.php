@extends('index')
@section('content')
<div class=" container">
<div class="jumbotron">

    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    {{ Form::open(array('url' => 'manager/editmasechet','class'=>'form-signup')) }}
            <h2 class="form-signup-heading">ערוך מסכת</h2>
    {{ Form::text('name', $masechet->name, array('class'=>'input-block-level', 'placeholder'=>'שם המסכת')) }}<br />
    {{ Form::text('size', $masechet->size, array('class'=>'input-block-level', 'placeholder'=>'מספר פרקים')) }}<br />
    {{ Form::select('seder',$seder_op, $seder, array('class'=>'input-block-level'))}}<br />
    {{ Form::hidden('id',$masechet->id)}}
    {{ Form::submit('הוסף', array('class'=>'btn btn-large btn-primary '))}}

    {{ Form::close() }}



</div>
</div>
@stop