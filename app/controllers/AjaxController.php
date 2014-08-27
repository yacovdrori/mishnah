<?php
 
class AjaxController extends BaseController {

	public function postDate2jewish(){
		if ( Session::token() !== Input::get( '_token' ) ) {
            return Response::json( array(
                'msg' => 'Unauthorized attempt to create option'
            ) );
        }

		$jewdate = jdtojewish(Input::get('date'));
		return Response::json($jewdate);
	}

	public function getD2j($date){
		if ( Session::token() !== Input::get( '_token' ) ) {
            return Response::json( array(
                'msg' => 'Unauthorized attempt to create option'
            ) );
        }

		$jewdate = jdtojewish($date);
		return Response::json($jewdate);
	}
}
?>