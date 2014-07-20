<?php
 
class ManagerController extends BaseController {

	public function getSeder()
	{
		$seder_op = Seder::all()->lists('name','id');
		$masechet = Masechet::all();
		return View::make('manager.seder')->with('seders',Seder::all())->with('seder_op', $seder_op)->with('masechets', $masechet);
	}

	public function postSeder()
	{
		$rules = array('name' 	=> 'required' , 
					   'size'  	=> 'required|integer',
					   );
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()){
			return Redirect::to('manager/seder')
				->withErrors($validator)
				->withInput(Input::get())
				;
		} else {
			$seder = new Seder;
			$seder->name = Input::get('name');
			$seder->size = Input::get('size');
			$seder->save();
			return Redirect::to('manager/seder')->with('message', Input::get('name') . ' נוסף');

		}
	}

	public function postMasechet()
	{
		$rules = array('name' 	=> 'required' , 
					   'size'  	=> 'required|integer',
					   );
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()){
			return Redirect::to('manager/seder')
				->withErrors($validator)
				->withInput(Input::get())
				;
		} else {
			$masechet = new Masechet;
			$masechet->name = Input::get('name');
			$masechet->size = Input::get('size');
			$masechet->seder_id = Input::get('seder');
			$masechet->save();
			return Redirect::to('manager/seder')->with('message', Input::get('name') . ' נוסף');
		}
	}

	public function getDelmasechet($id)
	{
		$masechet = Masechet::find($id);
		$name= $masechet->name;
		$masechet->delete();

		return Redirect::to('manager/seder')->with('message', $name . 'נמחק');
	}

	public function getEditmasechet($id)
	{
		$seder_op = Seder::all()->lists('name','id');
		$masechet = Masechet::find($id);
		$seder = Seder::find($masechet->seder_id);
		return View::make('manager.masechet')->with('masechet',$masechet)->with('seder_op',$seder_op)->with('seder',$seder->name);
	}

	public function postEditmasechet()
	{
		$masechet = Masechet::find(Input::get('id'));
		$masechet->name = Input::get('name');
		$masechet->size = Input::get('size');
		$masechet->seder_id = Input::get('seder');
		$masechet->save();	
		
		return Redirect::to('manager/seder')->with('message', Input::get('name') . ' נשמר');	

	}
}