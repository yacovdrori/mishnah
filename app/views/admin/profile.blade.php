@extends('index')
@section('content')
<div class="container">
<div class="jumbotron">
 
		<!-- if there are login errors, show them here -->
 	    <h2>פרופיל משתמש <small>{{$users->firstname}} {{$users->lastname}}</small></h2>
 

    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <div class="container  text-right">
    	<div class="row">
    		<div class="col-md-8 "></div>
    		<div class="col-md-2 ">{{$users->firstname}}</div>
    		<div class="col-md-2 ">שם פרטי:</div>    		
    	</div>
    	<div class="row">
    		<div class="col-md-8"></div>
    		<div class="col-md-2">{{$users->lastname}}</div>
    		<div class="col-md-2">שם משפחה:</div>    		
    	</div>
    	<div class="row">
    		<div class="col-md-8"></div>
    		<div class="col-md-2">{{$users->email}}</div>
    		<div class="col-md-2">דוא"ל:</div>    		
    	</div>
    </div>
   
<div class="wrapper">
<div class="content-secondary">
	<h2><small>רשימת הנפטרים</small></h2>
	
    @foreach ($users->niftar as $niftar)
    	{{HTML::link('admin/niftar/'.$niftar->id , $niftar->firstname . " " . $niftar->lastname . " בן " .
    	 $niftar->fathersname . " ו" .$niftar->mothersname)}} 
    	<small>
    		{{HTML::link("admin/delniftar&id=" . $niftar->id ,'(מחק)')}}
    		
    	</small>
    @endforeach
</div>
</div>
</div> 

	

</div>
@stop