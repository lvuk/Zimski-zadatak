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
            <h2>1. Zadatak</h1>
            <hr>
          <div>
          <form action="" method = "POST">
          <label for="broj">Upiši 1. broj niza</label>
          <input type="number" name= "0">
          <label for="broj">Upiši 2. broj niza</label>
          <input type="number" name= "1">
          <label for="broj">Upiši 3. broj niza</label>
          <input type="number" name= "2">
          <label for="broj">Upiši 4. broj niza</label>
          <input type="number" name= "3">
          <label for="broj">Upiši 5. broj niza</label>
          <input type="number" name= "4">
          <label for="broj">Upiši 6. broj niza</label>
          <input type="number" name= "5">
          <label for="broj">Upiši 7. broj niza</label>
          <input type="number" name= "6">
          <label for="broj">Upiši 8. broj niza</label>
          <input type="number" name= "7">
          <label for="broj">Upiši 9. broj niza</label>
          <input type="number" name= "8">
          <label for="broj">Upiši 10. broj niza</label>
          <input type="number" name= "9">
          <label for="broj">Upiši 11. broj niza</label>
          <input type="number" name= "10">
          <label for="broj">Upiši 12. broj niza</label>
          <input type="number" name= "11">
          <label for="broj">Upiši 13. broj niza</label>
          <input type="number" name= "12">
          <label for="broj">Upiši 14. broj niza</label>
          <input type="number" name= "13">
          <label for="broj">Upiši 15. broj niza</label>
          <input type="number" name= "14">
          <label for="broj">Upiši 16. broj niza</label>
          <input type="number" name= "15">
          <label for="broj">Upiši 17. broj niza</label>
          <input type="number" name= "16">
          <label for="broj">Upiši 18. broj niza</label>
          <input type="number" name= "17">
          <label for="broj">Upiši 19. broj niza</label>
          <input type="number" name= "18">
          <label for="broj">Upiši 20. broj niza</label>
          <input type="number" name= "19">
          <label for="broj">Upiši 21. broj niza</label>
          <input type="number" name= "20">
          <label for="broj">Upiši 22. broj niza</label>
          <input type="number" name= "21">
          <label for="broj">Upiši 23. broj niza</label>
          <input type="number" name= "22">
          <label for="broj">Upiši 24. broj niza</label>
          <input type="number" name= "23">
          <input type="submit" value="Postavi">
          <br>
          </div>
        
          
          </form>
          <?php 

            $niz = [];
            $zbroj = 0;
            
            for($i = 0; $i < 24; $i++){
              $niz[$i] = $_POST[$i];
              $zbroj += $niz[$i];
            }
            
            echo ('Najmanji broj je: ' .min($niz));
            echo ('<br>');
            echo ('Najveci broj je: ' .max($niz));
            echo ('<br>');
            echo ('Zbroj niza je: ' .$zbroj);
            echo ('<br>');

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
