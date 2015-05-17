<?php
  $errors = array();
  $data = array();

  if((empty($_POST['email'])) || (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))) {
    $errors['email'] = 'Please enter a valid email address.';
  }

  if(empty($_POST['number'])) {
    $errors['number'] = 'Number is required.';
  }

  if(empty($_POST['artist'])) {
    $errors['artist'] = 'Artist is required.';
  }

  if(!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
  } else {
    $data['success'] = true;
    $data['message'] = 'Success!';
  }

  echo json_encode($data);

?>
