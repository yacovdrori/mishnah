<?php
 
class UsersController extends BaseController {
 	public function getRegister() {
 		//echo "hello";
    	return View::make('users.register');
	}
	public function getLogin()
	{
		return View::make('users.login');
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
				
				return Redirect::to('/admin/newuser')->with('message', 'ברוכים הבאים');
        	// validation has passed, save user in DB
        	
    	} else {
        	// validation has failed, display error messages
				return Redirect::to('users/register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
    	}
	}
	public function getProfile()
	{
		return View::make('users/profile');
	}
	
	public function postEdit()
	{
   	$validator = Validator::make(Input::all(), User::$editrules);
     	if ($validator->passes()) {
			$user=User::find(Auth::user()->id);
			$user->firstname = Input::get('firstname');
			$user->lastname = Input::get('lastname');
			$user->save();
			return Redirect::to('/admin/profile')->with('message','העדכון בוצע בהצלחה');
		} else {
			return Redirect::to('/admin/profile')->with('message','השגיאות הבאות ארעו')->withErrors($validator)->withInput();
		}
	}
	
		public function getConfirm()
	{
		return View::make('users/confirm');
	}
	
}
?>