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
            <h2>2. Zadatak</h2>
            <hr>
            Tablica mnozenja 15x15
            <?php
                
                echo '<table id="tablicaMnozenja"';
                for($i=0;$i<15;$i++){ 
                  echo '<tr>';
                  for($j=0;$j<15;$j++){
                    
                     echo '<td>' . ($i+1) * ($j+1) .'</td>';
                  }
                  echo '</tr>';
                }
                echo '</table>';
            
            
            
            ?>
          </div>
        </div>
      </div>
      <!-- Kraj bodya -->
      <?php require_once 'predlozak/podnozje.php' ?>
    </div>
    <?php require_once 'predlozak/scripts.php' ?>
  </body>
</html>
