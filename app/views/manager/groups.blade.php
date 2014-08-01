@extends('index')
@section('content')
<div class=" container">
<div class="jumbotron">
	<h2>הוסף קבוצה</h2>
	@if($group->id)
    {{ Form::open(array('url' => 'manager/addgroup','class'=>'form-group')) }}
    @else
    {{ Form::open(array('url' => 'manager/editgroup','class'=>'form-group')) }}
    @endif
        {{ Form::text('name', $group->name, array('class'=>'form-control', 'placeholder'=>'שם קבוצה')) }}<br />
   		{{ Form::submit('הוסף', array('class'=>'btn btn-large btn-primary '))}}
    {{ Form::close()}}

    @foreach(Niftargroup::all() as $group)
    	{{HTML::link('manager/editgroups/' . $group->id, $group->name)}}
    @endforeach
</div>
</div>
@stop