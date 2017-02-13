<?php
	function getUsersFromApi(){
    	$users = json_decode(file_get_contents('http://docker/codiad/user'));
    	$array = [
			"username"=>"admin",
			"password"=>"9a7120a0bab34d461166e6d91148f569eaeea09c",
			"project"=>"mitchy"
		];
    	return json_encode($array);
    }
    getUsersFromApi();


