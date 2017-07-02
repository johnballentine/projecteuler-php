<?php
/**
Project Euler Solutions in PHP
by John Ballentine

Problem #3
https://projecteuler.net/problem=3

Description:
The prime factors of 13195 are 5, 7, 13 and 29.

What is the largest prime factor of the number 600851475143 ?
**/

function bc_is_prime($n){
  for ($i = 2; $i < $n; $i++){
    if (bcmod($n,$i) == 0){
      return false;
    }
  }
  return true;
}

function greatest_prime_factor($n){
  // BCMath is required to handle large integers (arbitrary precision).
  for ($i = 2; $i <= $n; $i++){
    // Divide by smallest number until the result is a prime.
    if (bcmod($n,$i) == 0){
      $div = bcdiv($n,$i);
      if (bc_is_prime($div)){
        return $div;
      }
    }
  }
}

echo greatest_prime_factor(600851475143);
?>
