@extends('index')
@section('content')
<div class=" container">
<div class="jumbotron">
@foreach($ch as $chh)
	{{$chh}}<br />
@endforeach
</div>
</div>
@stop