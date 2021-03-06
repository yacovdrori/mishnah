@extends('index')
@section('content')
<div class=" container">
<div class="jumbotron">

    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

            <h2 class="form-signup-heading">ערוך משתמשים</h2>
            <ul>
    @foreach($users as $user)
        <div class="btn-group btn-group-xs">
           <a class="btn btn-default" href="/manager/deluser/{{($user->id)}}">x</a>
        </div>
        {{$user->firstname}} {{$user->lastname}} {{$user->email}} 
        <ul>
            @foreach($user->learnsfor as $lf)
                <li>{{$lf->firstname}}
            @endforeach    
        </ul>
    @endforeach
</ul>

</div>
</div>
@stop