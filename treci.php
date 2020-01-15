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
            <h2>3. Zadatak</h2>
            <hr>
            <br>
            <form action="" method = "POST">
            <label for="broj">Upiši 1. broj</label>
            <input type="number" name = "prviBroj">
            <label for="broj">Upiši 2. broj</label>
            <input type="number" name = "drugiBroj">
            <input type="submit" value = "Postavi">
            </form>
            <?php
                $prviBroj = $_POST["prviBroj"];
                $drugiBroj = $_POST["drugiBroj"];

                $manji = $prviBroj < $drugiBroj ? $prviBroj : $drugiBroj;                
                $veci = $prviBroj > $drugiBroj ? $prviBroj : $drugiBroj;
                
                echo 'Prim brojevi izmedju ' .$manji. ' i ' .$veci. ' su: ';
                for($i = $manji; $i <= $veci; $i++) {
                    for($j = 2; $j <= $veci; $j++) {
                        if($i % $j == 0)
                            break;
                        }
                        
                    if($i === $j)
                        echo ($i . ', ');

                    }


            
            
            
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
