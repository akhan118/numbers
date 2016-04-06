<?php 
for ($i = 1; $i < 101; $i ++) {

    // Remainder 
    $m3 = $i % 3;
    $m5 = $i % 5;

    // If statments checks if the remainer is 0
    // if so then it must be a multiple of 3 or 5.
    if ($m3 === 0) {
        echo "Fizz";
    }

    if ($m5 === 0) {

        echo "Buzz";
    }
    if ($m3 && $m5 != 0) {
        echo $i;
    }
    echo "</br>";
}

?>

//
////$test=binarySearch();
//
//
//$insertArray=array(30,10,40,20);
//
//
//var_dump(inserationSort($insertArray));
//
//function inserationSort($a)
//{
//    
//    for ($i=1; $i < count($a); $i++)
//    {
//        
//      echo   $key=$a[$i];
//      echo "</br>";
//     echo    $j= $i -1;
//              echo "</br>";
//
//        while ($j > -1 && $a[$j] > $key)
//        {
//            
//            
//                  echo "</br>";
//
//            $a[$j +1]=$a[$j];
//          echo   $j=$j - 1;
//          
//                echo "</br>";
//
//        }
//        $a[$j+1]=$key;
//        
//    }
//    
//    return $a;
//    
//}
//
//
//
//$bubbleSortArray=array(3,2,4,1,5);
//
//
////$test=bubble_sort($bubbleSortArray);
////echo $test;
//function bubble_sort($a)
//
//{
//    
//   for ($i=0; $i <count($a) ;$i++)
//   {
//       
//  
//         for($j=0;$j < count($a)-1; $j ++)
//       
//       {
//  
//         if($a[$j] > $a[$j +1])    
//         {
//             $a[$j]=$a[$j +1];
//         }
//       }   
//       
//   }
//  
//   
//   var_dump($a);
//   
//   
//   
//           }
//
//
//
//
//
//
//
//
//$x = 19;
//$a = array(1, 2, 3, 5, 6, 7, 8, 10, 12, 13, 15, 16, 18, 19, 20, 22);
////$yellow = binarySearch($x, $a);
////var_dump($yellow);
//function binarySearch($x, $a) {
//    $i = 0;
//    $j = 15;
//    while ($i < $j) {
//        $m = floor(($i + $j) / 2);
//        if ($x > $a[$m]) {
//            $i = $m + 1;
//        } else {
//            $j = $m;
//        }
//        if ($x == $a[$i]) {
//            $location = $i;
//        } else {
//            $location = 0;
//        }
//    }
//    return $location;
//}
