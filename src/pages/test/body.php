<?php

use vcms\Request;

$req = new Request('rest-example', 'get');
/** @var \vcms\resources\Resource $res */
$res = $req->generate_resource();

$res->send();