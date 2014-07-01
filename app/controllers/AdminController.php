<?php
 
class AdminController extends BaseController {

	 // public function __construct()
  //   {
  //       $this->beforeFilter('auth', array('except' => 'getLogin'));
  //   }

	public function getNewuser()
	{
		return View::make('admin.newuser');
	}
	public function postNewuser()
	{
		$rules = array('firstname' 	=> 'required|alpha' , 
					   'lastname'  	=> 'required|alpha',
					   'death_date' => 'date',
					   'birthdate'  => 'date'
		);
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()){
			return Redirect::to('admin/newuser')
				->withErrors($validator)
				->withInput(Input::get())
				;
		} else {
			
				$niftar = new Niftar;
					$niftar->firstname	= Input::get('firstname');
					$niftar->lastname	= Input::get('lastname');
					$niftar->user_id	= Auth::user()->id;
					// $niftar->image	= Input::get('');
					$niftar->death_date	= Input::get('death_date');
					$niftar->description	= Input::get('description');
					$niftar->birthdate	= Input::get('birthdate');
					$niftar->fathersname	= Input::get('fathersname');
					$niftar->mothersname	= Input::get('mothersname');
					$niftar->city	= Input::get('city');
					$niftar->state	= Input::get('state');
					$niftar->save();
					return Redirect::to('admin/profile');
			}
	}
	
	public function postLogin()
	{
				// validate the info, create rules for the inputs
		$rules = array(
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('users/login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
			$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password')
			);

			// attempt to do the login
			if (Auth::attempt($userdata)) {

				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
				//echo 'SUCCESS!';
				return Redirect::to('/');

			} else {	 	

				// validation not successful, send back to form	
				return Redirect::to('users/login')->with('message', 'שם משתמש לא קיים או סיסמה שאינה נכונה. אנא נסה שנית');

			}

		}
	} 
	
	public function getLogout()
	{
		Auth::logout(); // log the user out of our application
		return Redirect::to('/'); // redirect the user to the login screen
	}
	
	public function postCreate() 
	{
    	$validator = Validator::make(Input::all(), User::$rules);
     	if ($validator->passes()) {
        	    $user = new User;
			    $user->firstname = Input::get('firstname');
			    $user->lastname = Input::get('lastname');
			    $user->email = Input::get('email');
			    $user->password = Hash::make(Input::get('password'));
			    $user->save();
				// Mail::send('emails.welcome', array('firstname'=>Input::get('firstname')), function($message)
					// {
					    // $message->to(Input::get('email'), Input::get('firstname'))->subject('השלמת הרשמה ללימוד משניות');
					// });
				
				if (Auth::attempt(array('email' => $user->email, 'password' =>Input::get('password')))){
					$msg="got in";
					
				}
				else {
					$msg="not in ";
									}
				
				return Redirect::to('/users/login')->with('message', 'ברוכים הבאים');
        	// validation has passed, save user in DB
        	
    	} else {
        	// validation has failed, display error messages
				return Redirect::to('users/register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
    	}
	}
	public function getProfile()
	{
		//$users=User::find(Auth::user()->id)->get();
		//$niftars=Niftar::find(Auth::user()->id);
		// $a = array('u'=>$users,
					// 'n'=>$niftars);
		return View::make('admin/profile')->with('users',User::find(Auth::user()->id));
		//return View::make('admin/profile',$a);
	}
	public function getNiftar($id)
	{
		$friends=Friend::where('niftarId','=', value($id))->get();
		return View::make('admin/niftars')->with('niftar',Niftar::find($id))->with('friends',$friends);
	}
		public function getConfirm()
	{
		return View::make('users/confirm');
	}
	public function postFriend()
	{
		$email = Friend::where('email','=',Input::get('email'))->first();
		//dd($email);
		if (is_null($email))
		{
			$friend = new Friend;
			$friend->name = Input::get('name');
			$friend->email = Input::get('email');
			$friend->niftarId = Input::get('niftarId');
			$friend->save();
		$user= new User;
		$user = User::find(Auth::user()->id);
		$name = Input::get('name');
		$invitename = $user->firstname . " " . $user->lastname;
		$relationship = "בן";
		$niftar = Niftar::find(Input::get('niftarId'));
		$nfirstname = $niftar->firstname;
		$nfathersname = $niftar->fathersname;
		$nmothersname = $niftar->mothersname;

		$data = array('id' => get('niftarId') ,
					  'name' => $name , 
					  'user' => $user ,
					  'niftar' => $niftar,
					  'invitename' => $invitename,
					  'niftarname' => $niftar->firstname . ' בן  ' . $niftar->fathersname,
					  );

		//	$user,$name,$invitename,$relationship,$nfathersname,$nfirstname,$nmothersname);
		//dd($user);
		Mail::queue("emails.emailfriend", $data, function($message)
			// uses ($invitename, $niftar, $name)
		{
			$message->to(Input::get('email'))
					->subject("משניות או לא להיות");
			
		}
		);
		$message = Input::get('name') . 'הוסף בהצלחה'	;
		}
		$message = 'הכתובת כבר במערכת, נסה שם אחר';
		$friends = Friend::where('niftarId',"=",$niftar->id)->get();
		return View::make('admin/niftars')->with('niftar',Niftar::find(Input::get('niftarId')))->with('friends',Friend::find(Input::get('niftarId')))->with('message',$message);
		return Redirect::to('admin/niftar/' . $niftar->id)->with('niftar',$niftar)->with('friends',$friends)->with('message','נמחק בהצלחה');
	}
	public function getDelfriend($id)
	{
		//dd($id);
		$nid = Friend::find($id)->niftarId;
		$friends = Friend::where('niftarId',"=",$nid)->get();
		$friend = Friend::find($id);
		$friend->delete();
		return Redirect::to('admin/niftar/'.$nid)->with('niftar',Niftar::find($nid))->with('friends',$friends)->with('message','נמחק בהצלחה');
	}
	
}
?>