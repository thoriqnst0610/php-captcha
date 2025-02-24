<?php
session_start();
require_once __DIR__.'/vendor/autoload.php';

// use Gregwar\Captcha\CaptchaBuilder;

// $builder = new CaptchaBuilder;
// $builder->build();

// $_SESSION['captcha'] = strtolower($builder->getPhrase());

// header('Content-type: image/jpeg');
// $builder->output();

use Gregwar\Captcha\CaptchaBuilder;

$builder = new CaptchaBuilder;
$builder->build();

$_SESSION['captcha'] = strtolower($builder->getPhrase());

header('Content-type: image/jpeg');
$builder->output();
