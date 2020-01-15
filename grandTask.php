<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'predlozak/head.php'; ?>
  </head>
  <body>
    <div class="grid-container">
      <?php require_once 'predlozak/izbornik.php' ?>
      <!-- Početak bodya -->
      <div class="grid-x">
        <div class="large-12 small-12 stupci">
          <div class="callout" style="min-height: 400px;"> 

           <div class="input">
    
                <form action="" method="POST">
                <div class="#">Broj redaka</div>
                    <input type="number" class="input" name="a" value="<?php echo $redci; ?>">
                <div class="#">Broj stupaca</div>
                    <input type="number" class="input" name="b" value="<?php echo $stupci; ?>">
                    <br>
                    <input type="submit" value="KREIRAJ TABLICU">
                    
                </form>
                <br>
            </div> 

                    <?php 
                    
                        $redci = $_POST['a'];
                        $stupci = $_POST['b'];
                        $maxStupac = $stupci - 1;
                        $maxRed = $redci - 1;
                        $minRedak = 0;
                        $minStupac = 0;
                        $matrica = [];
                        $output = 1;


                        while ($output <= $redci*$stupci) 
                        {

                            for($j=$maxStupac; $j >= $minStupac; $j--)
                                {
                                    $matrica[$maxRed][$j] = $output++;
                                }

                            $maxRed--;

                                if ($output > $redci*$stupci) 
                                    break;
                                
                            for ($i=$maxRed; $i >= $minRedak ;$i--) 
                                { 
                                    $matrica[$i][$minStupac] = $output++;
                                }

                            $minStupac++;

                            if ($output > $redci*$stupci) 
                                break;
                            
                            for ($j=$minStupac; $j <= $maxStupac; $j++) 
                                { 
                                    $matrica[$minRedak][$j] = $output++;
                                }

                            $minRedak++;

                            if ($output > $redci*$stupci) 
                                break;
                            
                            for ($i=$minRedak; $i <= $maxRed; $i++) 
                                { 
                                    $matrica[$i][$maxStupac] = $output++;
                                }

                            $maxStupac--;    
                        }
                    ?>
                    
                <table class="table">
                    <?php 
                        for($i=0;$i<$redci;)
                        {
                          echo '<tr>';
                            
                            for ($j=0; $j < $stupci;) 
                                { 
                                    echo '<td>'. $matrica[$i][$j] .'</td>';
                                    $j++;
                                }
                            
                            echo '</tr>';
                            $i++;
                        } 
                    ?>
                    </table>








          </div>
        </div>
      </div>
      <!-- Kraj bodya -->
      <?php require_once 'predlozak/podnozje.php' ?>
    </div>
    <?php require_once 'predlozak/scripts.php' ?>
  </body>
</html>
