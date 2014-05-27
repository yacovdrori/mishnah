@extends('index')
@section('content')
<div class=" container">
<div class="jumbotron">
	{{ Form::open(array('url' => 'users/edit','class'=>'form-signup')) }}

		<!-- if there are login errors, show them here -->
 	    <h2 class="form-signup-heading">הרשמה לאתר</h2>
 
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
 
    {{ Form::text('firstname', null, array('class'=>'input-block-level', 'placeholder'=>'שם פרטי')) }}<br />
    {{ Form::text('lastname', null, array('class'=>'input-block-level', 'placeholder'=>'שם משפחה')) }}<br />
    {{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'כתובת דוא"ל')) }}<br />
    {{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'סיסמה')) }}<br />
    {{ Form::password('password_confirmation', array('class'=>'input-block-level', 'placeholder'=>'אשר סיסמה')) }}<p />
 
    {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary '))}}
			
	{{ Form::close() }}
</div>
</div>
@stop