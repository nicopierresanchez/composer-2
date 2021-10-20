<?php

require __DIR__ . "/../vendor/autoload.php";

use Wcs\Hello;


echo Hello::talk();

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');


$bessie = new Cow('J\'aime faire CACA');
$bessie->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@ @@ @@@ @ @@@@ @@ @@ @ @@@ @@@@@')
    ->setUdder('P');
echo $bessie . PHP_EOL ;