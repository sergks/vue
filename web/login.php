<?php

require_once('SignInForm.php');

$form = new SignInForm();
$form->load($_POST);
$result = $form->isLogin();

var_dump($result);