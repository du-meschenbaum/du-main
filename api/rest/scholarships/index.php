<?php
try{
	// Check for the path elements
	if(!isset($path_params))
			$path_params = ( $_SERVER['PATH_INFO'] != null )? explode("/", $_SERVER['PATH_INFO']) : null;
	//var_dump($path_params);exit;
	if($path_params != null){
		if($path_params[1] == 'scholarships' && isset($path_params[2])){
			switch($path_params[2]){
				case 'search':
					require_once( 'search.php' );
					break;
					
				case 'constants':
					require_once( 'constants.php' );
					break;
					
				default:
					RestUtils::sendResponse(501);
			}
		}else{RestUtils::sendResponse(400);}
	}else{RestUtils::sendResponse(404);}
}catch(Exception $e) {
	RestUtils::sendResponse(500, $e->getMessage());
}
?>
