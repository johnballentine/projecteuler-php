<?php
/**
Project Euler Solutions in PHP
by John Ballentine

Problem #1
https://projecteuler.net/problem=1

Description:
If we list all the natural numbers below 10 that are multiples of 3 or 5, we get
3, 5, 6 and 9. The sum of these multiples is 23.

Find the sum of all the multiples of 3 or 5 below 1000.

**/

foreach (range(1,999) as $i){
  if ($i % 3 == 0 || $i % 5 == 0){
    $result += $i;
  }
}

echo $result;

?>
