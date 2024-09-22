<?php
// Array-slice--->>from where to array start and hw many value be put in array
$numbers = range(1, 100);
$data = array_slice($numbers, 20, 50);

foreach ($data as $number) {
  echo $number;
}
