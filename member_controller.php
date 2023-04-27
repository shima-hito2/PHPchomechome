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
function err_check($last_name, $first_name, $gender, $prefecture, $address, $password, $confirm_password, $email)
{
  // エラーの有無
  if (isset($last_name)) {
    $err_flg = false;
  }
  if (isset($first_name)) {
    $err_flg = false;
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
