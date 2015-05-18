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

function checkNumber($number) {
  if($number >= 1 && $number <= 9999) {
    return TRUE;
  } else {
    return FALSE;
  }
}

$response_array = array();

if(empty($_POST['number']) || !checkNumber($_POST['number'])) {
  $response_array['status'] = 'error';
  $response_array['message'] = 'Number is invalid';
} elseif(!checkEmail($_POST['email'])) {
  $response_array['status'] = 'error';
  $response_array['message'] = 'Email is invalid';
} elseif(empty($_POST['artist']) || !checkArtist($_POST['artist'])) {
  $response_array['status'] = 'error';
  $response_array['message'] = 'Artist is invalid';
} else {
  $response_array['status'] = 'success';
  $response_array['message'] = 'Success!';
}

  echo json_encode($response_array);

?>
