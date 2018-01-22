<?php

// Get random card
function _lotto() {
         $hitCards = array();
         $hitCards[0] = array( 'id' => 1, 'rate' => 1);
         $hitCards[1] = array( 'id' => 2, 'rate' => 1);
         $hitCards[2] = array( 'id' => 3, 'rate' => 1);
         $hitCards[3] = array( 'id' => 4, 'rate' => 1);
         $hitCards[4] = array( 'id' => 5, 'rate' => 1);
         $hitCards[5] = array( 'id' => 6, 'rate' => 1);
         $hitCards[6] = array( 'id' => 7, 'rate' => 1);
         $hitCards[7] = array( 'id' => 8, 'rate' => 100);
  
         $total = 0;
         $hits = array();
         $data = array();
 
         foreach ($hitCards as $key => $value) {
 
             $total  = $total + $value['rate'];
             $hits[] = $value['rate'];
             $data[] = $value;
         }
 
         $from = 0;
         $to   = 0;
         $n = round(rand(1,$total) );
 
         for ($i = 0; $i <= count($hits); $i++) {
 
             $from = $to;
             $to += $hits[$i];
             if ( $from < $n && $n <= $to ) {
 
                 $lotCard = $data[$i];
                 break;
             }
         }

         return $lotCard;
}

    $cards = array();
    $count = array();


    for ($i = 0 ; $i < 100; $i++) {
        $cards[] = _lotto();
        $count[$cards[$i]['id']]++;
    }

    
    print_r($count);


?>
