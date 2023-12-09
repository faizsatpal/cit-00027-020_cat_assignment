<?php
function majority_element($arr)
 {

    // init index 
        $index = 0;
        //occurence
        $occurrence = 1;
        
        for($i=1; $i<sizeof($arr); $i++)
        {
            if ($arr[$index] == $arr[$i])
            {
                $occurrence += 1;
            }
            else
             {
                $occurrence -= 1;
                if ($occurrence == 0)
                {
                    $index = $i;
                    $occurrence = 1;
                }
          }   
        }      
    return $arr[$index];
}
$number = array(3, 3, 3, 1, 0, 2, 8, 4, 10, 21, 12);

// echo output
echo('majority element:'.majority_element($number)." <br>");
?>
