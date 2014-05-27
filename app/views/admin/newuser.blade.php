@extends('index')
@section('content')
                        <div class = "container">               
                        	<div class = "jumbotron">
                                	<h2>שלום {{Auth::user()->firstname}} על מנת להתחיל אנא מלא פרטי  להרשמה עליך ועל הנפטר</h2>
                                	{{ Form::open(array('url' => 'admin/newuser','class'=>'form-signup')) }}

		<!-- if there are login errors, show them here -->
 	    <h2 class="form-signup-heading">פרטי הנפטר	</h2>
 
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
 
    {{ Form::text('firstname', null, array('class'=>'input-block-level', 'placeholder'=>'שם הנפטר')) }}<br />
    {{ Form::text('lastname', null, array('class'=>'input-block-level', 'placeholder'=>'שם משפחה של הנפטר')) }}<br />
    {{ Form::text('death_date', null, array('class'=>'input-block-level', 'placeholder'=>'תאריך פטירה')) }}<br />
    {{ Form::textarea('description', null, array('class'=>'input-block-level', 'placeholder'=>'תיאור')) }}<br />
	{{ Form::text('birthdate', null, array('class'=>'input-block-level', 'placeholder'=>'תאריך לידה')) }}<br />
    {{ Form::text('fathersname', null, array('class'=>'input-block-level', 'placeholder'=>'שם האב')) }}<br />
    {{ Form::text('mothersname', null, array('class'=>'input-block-level', 'placeholder'=>'שם האם')) }}<br />
    {{ Form::text('city', null, array('class'=>'input-block-level', 'placeholder'=>'עיר מגוריו')) }}<br />
    {{ Form::text('state', null, array('class'=>'input-block-level', 'placeholder'=>'ארץ')) }}<br />
    {{ Form::file('state', null, array('class'=>'input-block-level', 'placeholder'=>'תמונה')) }}<br />
    <p />
 
    {{ Form::submit('המשך->', array('class'=>'btn btn-large btn-primary '))}}
			
	{{ Form::close() }}
                        	</div>
                        </div>

@stop
