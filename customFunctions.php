<?php

function tabel($makeTable){
    if(is_array($makeTable)){
        echo '<table class="table table-striped"><tr>';
        // capul de tabel
        foreach(array_keys($makeTable[0]) as $key){
            echo "<th>$key</th>";
        }
        echo '</tr>';
    
        foreach($makeTable as $user){
            echo '<tr>';
            foreach($user as $field=>$value){
                echo "<td>$value</td>";
            }
            echo '</tr>';
        }
        // inregistrarile
        echo '</table>';
    }
    else echo 'Parameter in NOT an ARRAY!';
    
}