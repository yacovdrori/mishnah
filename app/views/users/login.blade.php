@extends('index')
@section('content')
<div class=" container">
  <div class="panel-heading">
    <h3 class="panel-title">כניסה לאתר</h3>
  </div>
  <div class="jumbotron">
	{{ Form::open(array('url' => 'users/login','class'=>'form-signup')) }}

		<!-- if there are login errors, show them here -->
	   <ul>
	        @foreach($errors->all() as $error)
	            <li>{{ $error }}</li>
	        @endforeach
	    </ul>
		<table>
			<tr>
				<td>{{ Form::label('email', 'כתובת דואל') }}</td>
				<td>{{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}</td>
			</tr>
			<tr>
				<td>{{ Form::label('password', 'סיסמה') }}</td><td>{{ Form::password('password') }}</td>
			</tr>
			<tr>
				<td></td><td>{{ Form::submit('כניסה!') }}</td>
			</tr>
		</table>
			
	{{ Form::close() }}
</div>
</div>
@stop