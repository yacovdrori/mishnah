@extends('index')
@section('content')
<div class="container">
<div class="jumbotron">
 
		<!-- if there are login errors, show them here -->
 	    <h2>לימוד לעילוי נשמת {{$niftar->firstname}} {{$niftar->lastname}}</h2>
 

    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <div class="container text-right">
    	{{ Form::open(array('url' => 'admin/postFriend','class'=>'form-inline','role'=>'form','id'=>'addFriend')) }}
    	<div class="row">
    		<div class="col-md-3 "></div>
    		<div class="col-md-2 ">{{ Form::submit('המשך->', array('class'=>'btn btn-xs  '))}}</div>
    		<div class="col-md-3 ">{{ Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'שם החבר','id'=>'firstName')) }}</div>
    		<div class="col-md-3 ">{{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'דוא"ל','id'=>'email')) }}</div>
    		<div class="col-md-1 ">הזמן חבר</div>
    	</div>
    	<div class="row">
    		<div class="col-md-8"></div>
    		<div class="col-md-2">דוא"ל</div>
    		<div class="col-md-2">שם</div>    		
    	</div>
    	<div class="row">
    		<div class="col-md-8"></div>
    		<div class="col-md-2">{{--$users->email--}}</div>
    		<div class="col-md-2">דוא"ל:</div>    		
    	</div>
    </div>
   
<div class="wrapper">
<div class="content-secondary">
</div>
</div>
</div> 

	

</div>
@stop