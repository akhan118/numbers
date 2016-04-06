//Here¹s a generalized version that accepts any value for any exponent.
//Powers of two and three seem to be unique (or at least unusual) in that
//any integer can be created through decomposition.


<?php
$exp = 3;
for ($i = 500; $i < 600; $i++)
{
   $a = getDecompositionOf($i, $exp);
   if (sizeof($a)) {
       $d = implode(', ', $a);
       print "{$i} : {$d}\n";
   }
}
function getDecompositionOf($t, $exp)
{
   $decomp = array(); // This is the decomposition, which is the return
value.
   $t = intval($t);
   $L = intval(log($t) / log($exp)) + 1; // Maximum power of the target
   // This calculates the ranges of powers of the exponent.
   $ranges = array(0 => 0);
   for ($p = 0; $p < $L; $p++)
   {
       $ranges[$p + 1] = $ranges[$p] + pow($exp, $p);
   }
   // Step through the powers backwards, looking for numbers that can be
   // used in the decomposition.
   for ($p = $L; $p >= 0; $p--)
   {
       $v = pow($exp, $p); // Value of the current power
       $cr = $ranges[$p]; // Current range (+/-) of this power
       $c = array_sum($decomp); // Current progress; the sum of accepted
numbers
       // Does the positive value fit in the range? If so, add it to
$decomp
       if (abs($t - ($c + $v)) <= $cr) {$decomp[] = $v;}
       // Does the negative value fit in the range? If so, add it to
$decomp
       elseif (abs($t - ($c - $v)) <= $cr) {$decomp[] = -$v;}
   }
   // No valid decomposition was found, so return an empty array
   if (array_sum($decomp) != $t) {$decomp = array();}
   return $decomp;
}
