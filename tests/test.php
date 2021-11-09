<?php

require_once __DIR__.'/../functions.php';

$file = 'tests/fixtures/file.txt';

file_put_contents($file, '0123456789');
var_dump(filesize($file));

file_reduce($file, 2);

clearstatcache();
var_dump(filesize($file));
$data = file_get_contents($file);

if ($data != '89') {
    echo "Test fallito\n";
    exit(1);
}
