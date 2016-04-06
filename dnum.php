<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
    <center>
        
        <p>
            This is a decomposition program - given an integer it will ouput
            the decomposition for an integer using the powers of 3, namely 
            1, 3, 9, 27, 81 and it will only use each power of 3 once.</p>
        <p>
            Enter an integer between -121 and 121 excluding Zero </p>
        <form>
            
            
            <input type="text" name="num">
            <input type="submit" value="Submit">
        </form>
    </center>
    <br>
        <?php
        
       // error_reporting(E_ALL);
//ini_set("display_errors", 1);

$input=isset($_GET['num']) ? $_GET['num'] :'';


$get_powers=get_powers($input);

echo "<center>";
    p1($get_powers,$input);

  p2($get_powers,$input);

  p3($get_powers,$input);

 p4($get_powers,$input);

 p5($get_powers,$input);
 
 echo "</center>";



 
  function p5($powers, $input) {

    $count = count($powers);

    if ($count == 5) {


//   ++++
        if ($powers[0] + $powers[1] + $powers[2] + $powers[3] + $powers[4] == $input) {
            echo $input. " = ".$powers[0] . "+" . $powers[1] . "+" . $powers[2]."+" . $powers[3] ."+".$powers[4];
        }
//  +++-
              if ($powers[0] + $powers[1] + $powers[2] + $powers[3] - $powers[4] == $input) {
            echo $input. " = ".$powers[0] . "+" . $powers[1] . "+" . $powers[2]."+" . $powers[3] ."-".$powers[4];
        }
 //  ++--
       
         if ($powers[0] + $powers[1] + $powers[2] - $powers[3] - $powers[4] == $input) {
            echo $input. " = ".$powers[0] . "+" . $powers[1] . "+" . $powers[2]."-" . $powers[3] ."-".$powers[4];
        }
        
    //  +---
   
              if ($powers[0] + $powers[1] - $powers[2] - $powers[3] - $powers[4] == $input) {
            echo $input. " = ".$powers[0] . "+" . $powers[1] . "-" . $powers[2]."-" . $powers[3] ."-".$powers[4];
        }
        
        //  ----

               if ($powers[0] - $powers[1] - $powers[2] - $powers[3] - $powers[4] == $input) {
            echo $input. " = ".$powers[0] . "-" . $powers[1] . "-" . $powers[2]."-" . $powers[3] ."-".$powers[4];
        }
        
     
//  -+++

               if ($powers[0] - $powers[1] + $powers[2] + $powers[3] + $powers[4] == $input) {
            echo $input. " = ".$powers[0] . "-" . $powers[1] . "+" . $powers[2]."+" . $powers[3] ."+".$powers[4];
        }
        
        //  --++

                 if ($powers[0] - $powers[1] - $powers[2] + $powers[3] + $powers[4] == $input) {
            echo $input. " = ".$powers[0] . "-" . $powers[1] . "-" . $powers[2]."+" . $powers[3] ."+".$powers[4];
        }
       //  ---+
 
                       if ($powers[0] - $powers[1] - $powers[2] - $powers[3] + $powers[4] == $input) {
            echo $input. " = ".$powers[0] . "-" . $powers[1] . "-" . $powers[2]."-" . $powers[3] ."+".$powers[4];
        }
        

        
 
                      //++-+
                     if ($powers[0] + $powers[1] + $powers[2] - $powers[3] + $powers[4] == $input) {
            echo $input. " = ".$powers[0] . "+" . $powers[1] . "+" . $powers[2]."-" . $powers[3] ."+".$powers[4];
        }
 
                //-++-
                     if ($powers[0] - $powers[1] + $powers[2] + $powers[3] - $powers[4] == $input) {
            echo $input. " = ".$powers[0] . "-" . $powers[1] . "+" . $powers[2]."+" . $powers[3] ."-".$powers[4];
        }
        
 // +--+
                     if ($powers[0] + $powers[1] - $powers[2] - $powers[3] + $powers[4] == $input) {
            echo $input. " = ".$powers[0] . "+" . $powers[1] . "-" . $powers[2]."-" . $powers[3] ."+".$powers[4];
        }
        
  //--+-
                     if ($powers[0] - $powers[1] - $powers[2] + $powers[3] - $powers[4] == $input) {
            echo $input. " = ".$powers[0] . "-" . $powers[1] . "-" . $powers[2]."+" . $powers[3] ."-".$powers[4];
        }
        
  //-+--
        
                     if ($powers[0] - $powers[1] + $powers[2] - $powers[3] - $powers[4] == $input) {
            echo $input. " = ".$powers[0] . "-" . $powers[1] . "+" . $powers[2]."-" . $powers[3] ."-".$powers[4];
        }
        
 // +-++
                         if ($powers[0] + $powers[1] - $powers[2] + $powers[3] + $powers[4] == $input) {
            echo $input. " = ".$powers[0] . "+" . $powers[1] . "-" . $powers[2]."+" . $powers[3] ."+".$powers[4];
        }
        

 // -+-+
        
                         if ($powers[0] - $powers[1] + $powers[2] - $powers[3] + $powers[4] == $input) {
            echo $input. " = ".$powers[0] . "-" . $powers[1] . "+" . $powers[2]."-" . $powers[3] ."+".$powers[4];
        }
 // +-+-
                         if ($powers[0] + $powers[1] - $powers[2] + $powers[3] - $powers[4] == $input) {
            echo $input. " = ".$powers[0] . "+" . $powers[1] . "-" . $powers[2]."+" . $powers[3] ."-".$powers[4];
        }
        
    }
}
 
 
 
 
 
  function p4($powers, $input) {

    $count = count($powers);

    if ($count == 4) {


        if ($powers[0] + $powers[1] + $powers[2] + $powers[3] == $input) {
            echo $input. " = ".$powers[0] . "+" . $powers[1] . "+" . $powers[2]."+" . $powers[3];
        }

        if ($powers[0] + $powers[1] + $powers[2] - $powers[3]== $input) {
            echo  $input." = ".$powers[0] . "+" . $powers[1] . "+" . $powers[2]."-". $powers[3];
        }

        if ($powers[0] + $powers[1] - $powers[2] - $powers[3] == $input) {
            echo  $input." = ".$powers[0] . "+" . $powers[1] . "-" . $powers[2]."-" . $powers[3] ;
        }

        if ($powers[0] - $powers[1] + $powers[2] - $powers[3]== $input) {
            echo  $input." = ". $powers[0] . "-" . $powers[1] . "+" . $powers[2]. "-" . $powers[3];
        }
        
          if ($powers[0] + $powers[1] - $powers[2] + $powers[3]== $input) {
            echo  $input." = ". $powers[0] . "+" . $powers[1] . "-" . $powers[2]. "+" . $powers[3];
        }
          if ($powers[0] - $powers[1] - $powers[2] + $powers[3]== $input) {
            echo  $input." = ".$powers[0] . "-" . $powers[1] . "-" . $powers[2]. "+" . $powers[3];
        }
              if ($powers[0] - $powers[1] + $powers[2] + $powers[3]== $input) {
            echo  $input." = ".$powers[0] . "-" . $powers[1] . "+" . $powers[2]. "+" . $powers[3];
        }
        
              if ($powers[0] - $powers[1] - $powers[2] - $powers[3]== $input) {
            echo  $input." = ".$powers[0] . "-" . $powers[1] . "-" . $powers[2]. "-" . $powers[3];
        }
    }
}

function p1($powers, $input)
{
      $count = count($powers);

      if ($count == 1 && $input !=0 && $input !='') {

         if ($powers[0]  == $input) {
            echo  $input." = ".$powers[0];
        }
        

        }
        
    
    
    
}
 
function p2($powers, $input)
{
      $count = count($powers);

      if ($count == 2) {



        if ($powers[0] + $powers[1]  == $input) {
            echo  $input." = ".$powers[0] . "+" . $powers[1];
        }
        
             if ($powers[0] - $powers[1]  == $input) {
            echo  $input." = ".$powers[0] . "+" . $powers[1];
        }
        
      }
    
}
 function p3($powers, $input) {

    $count = count($powers);

    if ($count == 3) {



        if ($powers[0] + $powers[1] + $powers[2] == $input) {
            echo  $input." = ".$powers[0] . "+" . $powers[1] . "+" . $powers[2];
        }

        if ($powers[0] + $powers[1] - $powers[2] == $input) {
            echo  $input." = ".$powers[0] . "+" . $powers[1] . "-" . $powers[2];
        }

        if ($powers[0] - $powers[1] + $powers[2] == $input) {
            echo  $input." = ".$powers[0] . "-" . $powers[1] . "+" . $powers[2];
        }

        if ($powers[0] - $powers[1] - $powers[2] == $input) {
            echo  $input." = ".$powers[0] . "-" . $powers[1] . "-" . $powers[2];
        }
    }
}

function get_powers($input) {
    $ranges = get_range($input);
    $powers = get_powers_remainder($ranges);
        $P[] = $powers['0'];


    while ($powers['remainder'] != 0) {
        $ranges = get_range($powers['remainder']);
        $powers = get_powers_remainder($ranges);
        $P[] = $powers['0'];
    }

    return $P;    
}

function get_powers_remainder($Ranges_Input_array) {
    for ($j = count($Ranges_Input_array['powers']) - 1; $j >= 0; $j --) {
        
        
        
//        $remainder = abs($Ranges_Input_array['powers'][$j] - $Ranges_Input_array['input']);
//return array($Ranges_Input_array['powers'][$j], 'remainder' => $remainder);


        if ($Ranges_Input_array['powers'][$j] >= $Ranges_Input_array['input']) {
            $remainder = $Ranges_Input_array['powers'][$j] - $Ranges_Input_array['input'];
            return array($Ranges_Input_array['powers'][$j], 'remainder' => $remainder);
        }
        
        if ($Ranges_Input_array['powers'][$j] <= $Ranges_Input_array['input']) {
            $remainder = $Ranges_Input_array['input'] - $Ranges_Input_array['powers'][$j];
            return array($Ranges_Input_array['powers'][$j], 'remainder' => $remainder);
        }
        break;
    }
}

function get_range($input) {
    $array = ['ranges' => [
            ['max' => 121, 'min' => 41, 'powers' => [1, 3, 9, 27, 81]],
            ['max' => 40, 'min' => 14, 'powers' => [1, 3, 9, 27]],
            ['max' => 13, 'min' => 5, 'powers' => [1, 3, 9]],
            ['max' => 4, 'min' => 2, 'powers' => [1, 3]],
            ['max' => 1, 'min' => 1, 'powers' => [1]],
        ]
    ];
    for ($i = 0; $i < count($array['ranges']); $i ++) {

        $max = $array['ranges'][$i]['max'];
        $min = $array['ranges'][$i]['min'];
        $powers = $array['ranges'][$i]['powers'];

        // When the input is negative
        if ($input < 0) {
            $max = -1 * $max;
            $min = -1 * $min;

            for ($k = 0; $k < count($powers); $k++) {
                $powers[$k] = -1 * $powers[$k];
            }
            if ($input <= $min && $input >= $max) {
                return $array = array('powers' => $powers, 'input' => $input);
            }
        }
        //  When the input is positive. 
        if ($input >= $min && $input <= $max) {
            return $array = array('powers' => $powers, 'input' => $input);
        }
    }
}
        ?>
    </body>
</html>
