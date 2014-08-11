<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
        'Facebook' => array(
            'client_id'     => '491962800931273',
            'client_secret' => '0005e4e1f41918837e61721eebbe9d82',
            'scope'         => array('email','read_friendlists','user_online_presence'),
        ),		

	)

);
