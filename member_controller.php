<?php

$err_flg = true;
$err_message = array(
  'last_name' => '',
  'first_name' => '',
  'gender' => '',
  'prefecture' => '',
  'address' => '',
  'password' => '',
  'confirm_password' => '',
  'email' => '',
);


// エラーチェック
function err_check($last_name, $first_name, $gender, $prefecture, $address, $password, $confirm_password, $email, $err_flg = true, $err_message)
{
  // 氏名(姓)のチェック
  if (isset($last_name)) {
    $err_flg = false;
    $err_message['last_name'] = '氏名(姓)は入力必須です。';
  } else {
    if (mb_strlen($last_name) > 20) {
      $err_message['last_name'] = '氏名(姓)は20文字以内で入力して下さい。';
    }
  }

  // 氏名(名)のチェック
  if (isset($first_name)) {
    $err_flg = false;
    $err_message['last_name'] = '氏名(名)は入力必須です。';
  } else {
    if (mb_strlen($first_name) > 20) {
      $err_message['first_name'] = '氏名(名)は20文字以内で入力して下さい。';
    }
  }
  if (isset($gender)) {
    $err_flg = false;
  }
  if (isset($prefecture)) {
    $err_flg = false;
  }
  if (isset($address)) {
    $err_flg = false;
  }
  if (isset($password)) {
    $err_flg = false;
  }
  if (isset($confirm_password)) {
    $err_flg = false;
  }
  if (isset($email)) {
    $err_flg = false;
  }
}
