<?php
$counterFile = 'data/counter.txt';

// Read and update visitor count
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, '1');
    $count = 1;
} else {
    $count = (int)file_get_contents($counterFile);
    $count++;
    file_put_contents($counterFile, $count);
}

echo $count;
?>
