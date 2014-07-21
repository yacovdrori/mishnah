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
    	{{ Form::open(array('url' => 'admin/friend','class'=>'form-inline','role'=>'form','id'=>'addFriend')) }}
    	<div class="row">
    		<div class="col-md-3 "></div>
    		<div class="col-md-2 ">{{ Form::submit('המשך->', array('class'=>'btn btn-xs  '))}}</div>
    		<div class="col-md-3 ">{{ Form::text('name', null, array('class'=>'form-control', 'placeholder'=>'שם החבר','id'=>'name')) }}</div>
    		<div class="col-md-3 ">{{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'דוא"ל','id'=>'email')) }}</div>
    		{{ Form::hidden('niftarId', $niftar->id)}}
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
<h3>חברים שהוזמנו</h3>
@foreach ($friends as $friend)
	<div class="row">
		<div class="col-md-5"></div>
		<div class="col-md-3">{{$friend->name}}</div>
		<div class="col-md-3">{{$friend->email}}</div>
		<div class="col-md-1">
			<div class="btn-group btn-group-xs">
				<a class="btn btn-default" href="/admin/delfriend/{{($friend->id)}}">x</a>
			</div>
		</div>	
	</div>
@endforeach
</div>
</div> 

	

</div>
@stop