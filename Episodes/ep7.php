<?php

# str_starts_with

$id = 'inv_fsafadfsfsadgas';

//$result = stripos($id, 'inv_') === 0; //if it is zero, then it is an inv

$result = str_starts_with($id, 'inv_');

var_dump($result);

//------------------------------------
#str_ends_with

$newId = 'fsafadfsfsadgas_inv';

//$result = stripos(strrev($newId), strrev('_inv')) === 0;
//
//var_dump($result);

//-------------------------------------
//var_dump(!!preg_match('/_inv$/', $newId));

$result = str_ends_with($newId, '_inv');

var_dump($result);

#str_contains

$url = 'https://example.com?foo=bar';

//var_dump(parse_url($url)['query']);

//-------------------------------------
//$result = strpos($url, '?') !== false;
//
//var_dump($result);

$result = str_contains($url, '?');

var_dump($result);

//str_contains(), str_starts_with() and str_ends_with().