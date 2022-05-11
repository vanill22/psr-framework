<?php

use Framework\Http\ResponseSender;
use Zend\Diactoros\ServerRequestFactory;
use Zend\Diactoros\Response\HtmlResponse;


chdir(dirname(__DIR__));

require 'vendor/autoload.php';

$request = ServerRequestFactory::fromGlobals();


$name = $request->getQueryParams()['name'] ?? 'Guest';

$response = (new HtmlResponse('Hello, ' . $name . '!'))
    ->withHeader('X-developer', 'Popka');

$emitter = new ResponseSender();
$emitter->send($response);