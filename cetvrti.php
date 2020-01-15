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
        <div class="large-12 small-12 columns">
          <div class="callout" style="min-height: 400px;"> 
            
            <h2>4. Zadatak</h2>
            <hr>
                      
            <?php 
              
              echo '<form action="" method="post">';
              for($i=0;$i<16;$i++)

                {
                  echo 'Upiši ' .($i+1). ' za drugu matricu:';
                  echo '<input type="number" name="$prva[]" id="0">';
                }
                
                
                for($j=0;$j<16;$j++)
                  {
                    echo 'Upiši ' .($j+1). ' za drugu matricu:';
                    echo '<input type="number" name="$druga[]" id="0">';
                  }       
                echo '<input type="submit" value="Postavi">';
                
                $prva=($_POST['$prva']);
                $druga=($_POST['$druga']);
                $zbroj=[];
                
                for ($i=0; $i<16; $i++) 
                  { 
                    $zbroj[$i]=$prva[$i]+$druga[$i];
                  }
              ?>

            <table>
              <?php 
                 echo '<br/>Prva matrica';
                 for($i=0;$i<4;$i++)
                    {
                      echo '<tr>';
                      for ($j=0; $j < 4; $j++) 
                        { 
                          echo '<td>'. $prva[4*$i+$j] .'</td>' ;
                        }
                        echo '</tr>';
                    }
                ?>
            </table>
            
            <table>
              <?php 
              echo 'Druga matrica';
                for($i=0;$i<4;$i++)
                {
                  echo '<tr>';
                    for ($j=0; $j < 4; $j++) 
                    { 
                      echo '<td>'. $druga[4*$i+$j] .'</td>' ;
                    }
                    echo '</tr>';
                }
              ?>
            </table>

            <table>
              <?php 
              echo 'Zbroj matrica';
                for($i=0;$i<4;$i++)
                {
                  echo '<tr>';
                    for ($j=0; $j < 4; $j++) 
                    { 
                     echo '<td>'. $zbroj[4*$i+$j] .'</td>' ;
                    }
                    echo '</tr>';
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
