@extends('index')
@section('content')
<div class=" container">
<div class="jumbotron">
    
	{{ Form::open(array('url' => 'users/create','class'=>'form-signup')) }}

		<!-- if there are login errors, show them here -->
 	    <h2 class="form-group">הרשמה לאתר</h2>
 
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    
 <div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-xs-8 col-md-offset-6">
        {{ Form::text('firstname', null, array('class'=>'form-control input-sm', 'placeholder'=>'שם פרטי')) }}<br />

        {{ Form::text('lastname', null, array('class'=>'form-control input-sm', 'placeholder'=>'שם משפחה')) }}<br />
        {{ Form::text('email', null, array('class'=>'form-control input-sm', 'placeholder'=>'כתובת דוא"ל')) }}<br />
        {{ Form::password('password', array('class'=>'form-control input-sm', 'placeholder'=>'סיסמה')) }}<br />
        {{ Form::password('password_confirmation', array('class'=>'form-control input-sm', 'placeholder'=>'אשר סיסמה')) }}<p />
     
        {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary '))}}
    			
    	{{ Form::close() }}
    </div>
    </div>
</div>
</div>
</div>
@stop