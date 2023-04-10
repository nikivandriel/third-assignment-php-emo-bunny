<!-- print table on page -->
<table>
    <tr>
        <th class="table-header" colspan="5">Hoe vaak komen scores voor?</th>
    </tr>
    <tr class="first-row">
        <?php         
            // get score till 5 from file
            for($index = 0; $index< 5; $index++){   
               
                $fh = fopen("data/score_$index.txt", 'r') or die("failed to open file");
                $scoreData_index = fgets($fh);
                echo "<td>Score $index : $scoreData_index </td>";
                
            }
        ?>
    </tr>
    <tr class="second-row">
        <?php 
            // get score till 10 from file
            for($index = 5; $index< 10; $index++){  
                
                $fh = fopen("data/score_$index.txt", 'r') or die("failed to open file");
                $scoreData_index = fgets($fh);
                echo "<td>Score $index : $scoreData_index </td>";
            }
        ?>
    </tr>
    <tr class="last-row">
        <?php 
            // get score till 15 from file
            for($index = 10; $index< 15; $index++){

                $fh = fopen("data/score_$index.txt", 'r') or die("failed to open file");
                $scoreData_index = fgets($fh);
                echo "<td>Score $index : $scoreData_index </td>";
            }
        ?>
    </tr>
</table>

<!-- updated data -->
<?php         
    for($index = 0; $index< 15; $index++){   
        
        $fh = fopen("data/score_$index.txt", 'r') or die("failed to open file");
        $scoreData_index = fgets($fh);
        
        if($score == $index ){ 
            $fh = fopen("data/score_$index.txt", 'w') or die("failed to open file");
            fwrite($fh, $scoreData_index+1) or die("could not write to file");    
            fclose($fs);;
        }
    }
?>
        