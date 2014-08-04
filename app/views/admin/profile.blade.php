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
    <h2>נרשמתי ללמוד עבור</h2>
    <?php $niftaruser= Niftaruser::user(Auth::user()->id)->get()?>
    <ul>
    @foreach( $niftaruser as $niftar)
        <?php $nif= Niftar::find($niftar->niftar_id)?>
        <li>{{$nif->firstname}} {{$nif->lastname}}
        <?php $mases = Masechetniftaruser::niftaruser($niftar->id)->get() ?>
        <ul>
        @foreach($mases as $mas)
        <?php
        $masName = Masechet::find($mas->id)->name;

         ?>
            <li> {{$masName}}<br />
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  עבור ללימוד המשנה
                </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">סגור</span></button>
                        <h4 class="modal-title" id="myModalLabel">{{$masName}}</h4>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">סגור</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
        @endforeach
        </ul>
    @endforeach
    </ul>

	<h2><small>רשימת הנפטרים</small></h2>({{HTML::link("admin/newuser","הוסף ניפטר")}})<br />
	
    @if($users->niftar->count()>0)
    @foreach ($users->niftar as $niftar)
    	{{HTML::link('admin/niftar/'.$niftar->id , $niftar->firstname . " " . $niftar->lastname . " בן " .
    	 $niftar->fathersname . " ו" .$niftar->mothersname)}} 
    	<small>
    		{{HTML::link("admin/delniftar/" . $niftar->id ,'(מחק)')}}
    		
    	</small>
    @endforeach
    @endif

    <h2>למד עבור</h2>
    @foreach(Niftar::all() as $niftar)
        {{$niftar->firstname}}<br />
    @endforeach

</div>
</div>
</div> 

	

</div>
@stop