<?php

function checkEmail($email) {
  if(eregi("^[a-zA-Z0-9_]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$]", $email)){
    return FALSE;
  }

  list($Username, $Domain) = split("@",$email);

	if(@getmxrr($Domain, $MXHost)){
		return TRUE;

	} else {
		if(@fsockopen($Domain, 25, $errno, $errstr, 30)){
			return TRUE;
		} else {

			return FALSE;
		}
	}
}

function checkArtist($artist) {
  if($artist !== 'Beethoven' && $artist !== 'Josh Groban' && $artist !== 'Nickelback') {
    return FALSE;
  } else {
    return TRUE;
  }
}

$response_array = array();

if(empty($_POST['number'])) {
  $response_array['status'] = 'error';
  $response_array['message'] = 'Number is blank';
} elseif(!checkEmail($_POST['email'])) {
  $response_array['status'] = 'error';
  $response_array['message'] = 'Email is blank or invalid';
} elseif(empty($_POST['artist'])) {
  $response_array['status'] = 'error';
  $response_array['message'] = 'Artist is blank';
} else {
  $response_array['status'] = 'success';
  $response_array['message'] = 'Success!';
}

  echo json_encode($response_array);

?>
