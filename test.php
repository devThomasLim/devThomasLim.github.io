<?php

    $x = readline('From number: ');
    $y = readline('To number: ');    
    $palindrome = [];

    while ($x <= $y) {
        $reverse = strrev($x);

        if ($x == $reverse) {
            echo 'palindrome';
            array_push($palindrome, $x);
        } else {
            echo 'Not Palindrome';
        }
        $x++;
    }
    print_r($palindrome);

    // ============================================================================

    // long version
    // $x = readline('From number: ');
    // $y = readline('To number: ');    
    // $palindrome = [];

    // while ($x <= $y) {
    //     $digits = count(str_split($x)); 
    //     if ($digits % 2 == 0){
    //         $current = str_split($x);            
    //         while (true) {
    //             if (empty($current)) {
    //                 array_push($palindrome, $x);
    //                 echo 'Palindrome'. $x;
    //                 break;                    
    //             }
    //             $first = array_shift($current);
    //             $last = array_pop($current);
    //             if ($first == $last){
    //                 // keep going
    //             } else {                    
    //                 echo 'Not Palindrome'. $x;             
    //                 break;
    //             }
    //         }
    //     } elseif ($digits <= 1) {
    //         array_push($palindrome, $x);
    //         echo 'Palindrome'. $x;
    //     } else {
    //         $current = str_split($x);  
    //         while (true) {    
    //             if (count($current) <= 1) {
    //                 array_push($palindrome, $x);
    //                 echo 'Palindrome' . $x;
    //                 break;                
    //             }
    //             $first = array_shift($current);
    //             $last = array_pop($current);
    //             if ($first == $last){
    //                 // keep going
    //             } else {
    //                 echo 'Not Palindrome'. $x;                                    
    //                 break;
    //             }
    //         }
    //     }
    //     if ($x == $y) break;
    //     echo ' : ', $x;
    //     echo "\n";
    //     $x++;
    // }
    // print_r($palindrome);

    // ============================================================================

    // $question = readline("Enter a word: ");
    // $split = str_split($question);
    // $container = [];
    // $i = 0;

    // while(true){
    //     if ($i == count($split)) break;
    //     $char = $split[$i];
    //     if (!in_array($char , $container)){
    //         array_push($container, $char);
    //     } else {
    //         // do nothing
    //     }
    //     ++$i;
    // }
    
    // print_r($container);
    // // 24 minute
?>