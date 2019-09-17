<?php
require_once __DIR__ . '/vendor/autoload.php';

use Phpml\Classification\KNearestNeighbors;

$samples = [[100, 80, 100], [100, 100, 100], [70, 85, 90], [30, 20, 0], [0, 0, 0], [10, 50, 40]];
$labels = ['lulus', 'lulus', 'lulus', 'tidak lulus', 'tidak lulus', 'tidak lulus'];

$classifier = new KNearestNeighbors();
$classifier->train($samples, $labels);

echo $classifier->predict([40, 50, 70]);
// return 'b'
?>