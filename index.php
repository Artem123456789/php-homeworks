<?php
require_once 'Matrix.php';

$matA = new Matrix([[1,3,4], [2,4,6], [4,3,7]]);
$matB = new Matrix([[4,3,7], [2,4,6], [1,3,4]]);
$matA->add($matB);
print_r($matA);
$matA->diff($matB);
print_r($matA);
$matA->mult($matB);
print_r($matA);