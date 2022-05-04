<?php

use Framewokr\Http\Request;

chdir(dirname(__DIR__));

require 'vendor/autoload.php';

$request = new Request();

$name = $request->getQueryParams()['name'] ?? 'Guest';

header('popka');

echo 'Hello,' . $name;
