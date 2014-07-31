
@foreach(Niftaruser::user(Auth::user()->id) as $niftar))
	{{$niftar->firstname}}
@endforeach
