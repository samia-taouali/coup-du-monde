<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form  action="index.php" method="POST">
        <!-- MATCH 1 -->
        <h1>simulateur du coup du Monde</h1>
        <div class="match">
        <h3 class="mb-4 mt-4">MATCH 1</h3>
          <div class="pardido">
              <div class="grp">
              <img class="rounded" src="imgs/Morocco.png" alt="">
                <input type="text"  name="MoroccoM1">
              </div>
                <h3 class="d-flex align-items-center">VS</h3>
              <div class="grp">
                <input type="text" name="CroatiaM1">
                <img class="rounded" src="imgs/croatia.png" alt="">
              </div>
          </div>
          <div class="pardido"> 
              <div class="grp">
              <img src="imgs/flagbelgium.webp" alt="">
              <input type="text" name="BelgiumM1">
              </div>
              <h3 class="d-flex align-items-center">VS</h3>
              <div class="grp">
              <input type="text" name="CanadaM1">
              <img src="imgs/canada.webp" alt="">
              </div>
          </div>
        </div>

        <!-- MATCH 2 -->
        <div class="match">
        <h3 class="mb-4 mt-4">MATCH 2</h3>
          <div class="pardido">
              <div class="grp">
                <img src="imgs/Morocco.png" alt="">
                <input type="text"  name="MoroccoM2">
              </div>
              <h3 class="d-flex align-items-center">VS</h3>
              <div class="grp">
                <input type="text" name="CanadaM2">
                <img  src="imgs/canada.webp" alt="">
              </div>
          </div>
          <div class="pardido"> 
              <div class="grp">
              <img src="imgs/croatia.png" alt="">
                <input type="text" name="CroatiaM2">
              </div class="pardido">
              <h3 class="d-flex align-items-center">VS</h3>
              <div class="grp">
                <input type="text" name="BelgiumM2">
                <img src="imgs/flagbelgium.webp" alt="">
              </div>
          </div>
        </div>
        <!-- MATCH 3 -->
        <div class="match">
          <h3 class="mb-4 mt-4">MATCH 3</h3>
          <div class="pardido">
              <div class="grp">
                <img src="imgs/Morocco.png" alt="">
                <input type="text" name="MoroccoM3">
              </div>
              <h3 class="d-flex align-items-center">VS</h3>
              <div class="grp">
                <input type="text" name="BelgiumM3">
                <img src="imgs/flagbelgium.webp" alt="">
              </div>
          </div>
          <div class="pardido"> 
            <div class="grp">
            <img src="imgs/croatia.png" alt="">
              <input type="text" name="CroatiaM3">
            </div>
            <h3 class="d-flex align-items-center">VS</h3>
            <div class="grp">
              <input type="text" name="CanadaM3">
              <img src="imgs/Canada.webp" alt="">
            </div>
          </div>
        </div>
        <div class="btn">
        <input type="submit" value="Simulate" name="simulate"id="btn">
        </div>
    </form>
    <table class="table table-blue table-striped-columns">
        <tbody>
          <tr>
            <th scope='col'>Teams</th>
            <th scope='col'>points</th>
            <th scope='col'>match joues</th>
            <th scope='col'>matche swon</th>
            <th scope='col'>tied matches</th>
            <th scope='col'>lost matches</th>
            <th scope='col'>goal sscored</th>
            <th scope='col'>goal sconceded</th>
            <th scope='col'>goal difference </th>
          </tr>
<?php 
    // faire le traitement qu'après envoi du formulaire 
    if(isset($_POST['simulate'] )) {
    
      
      $point=array('morocco'=>0,'Croatia'=>0,'Belgium'=>0,'Canada'=>0);
      $matchjoues=array('morocco'=>0,'Croatia'=>0,'Belgium'=>0,'Canada'=>0);
      $matcheswons=array('morocco'=>0,'Croatia'=>0,'Belgium'=>0,'Canada'=>0);
      $tiedmatches=array('morocco'=>0,'Croatia'=>0,'Belgium'=>0,'Canada'=>0);
      $tiedmatches=array('morocco'=>0,'Croatia'=>0,'Belgium'=>0,'Canada'=>0);
      $lostmatches=array('morocco'=>0,'Croatia'=>0,'Belgium'=>0,'Canada'=>0);
      $goalsscored=array('morocco'=>0,'Croatia'=>0,'Belgium'=>0,'Canada'=>0);
      $goalsconceded=array('morocco'=>0,'Croatia'=>0,'Belgium'=>0,'Canada'=>0);
      $goaldifference=array('morocco'=>0,'Croatia'=>$goalsscored['Croatia']-$goalsconceded['Croatia'],'Belgium'=>$goalsscored['Belgium']-$goalsconceded['Belgium'],'Canada'=>$goalsscored['Croatia']-$goalsconceded['Croatia'],'Canada'=>$goalsscored['Canada']-$goalsconceded['Canada']);

      $maroc1 = $_POST['MoroccoM1'];
      $croatia1 = $_POST['CroatiaM1'];
      $belgium1 = $_POST['BelgiumM1'];
      $canada1 = $_POST['CanadaM1'];

      $maroc2 = $_POST['MoroccoM2'];
      $canada2 = $_POST['CanadaM2'];
      $croatia2= $_POST['CroatiaM2'];
      $belgium2 = $_POST['BelgiumM2'];

      $maroc3 = $_POST['MoroccoM3'];
      $belgium3 = $_POST['BelgiumM3'];
      $croatia3= $_POST['CroatiaM3'];
      $canada3 = $_POST['CanadaM3'];

      //  MATCH 1
          if($_POST['MoroccoM1'] > $_POST['CroatiaM1']){
              $point["morocco"] += 3;
              $matchjoues["morocco"] +=1;
              $matchjoues["Croatia"] +=1;  
              $matcheswons["morocco"] +=1;  
              $lostmatches["Croatia"] +=1; 
              $goalsscored["morocco"]+= $maroc1;
              $goalsscored["Croatia"]+= $croatia1;
              $goalsconceded["morocco"]+= $croatia1;
              $goalsconceded["Croatia"]+= $maroc1; 
              $goaldifference["morocco"]+=$goalsscored['morocco']-$goalsconceded['morocco'];
              $goaldifference["Croatia"]+=$goalsscored['Croatia']-$goalsconceded['Croatia'];

          }elseif($_POST['MoroccoM1'] < $_POST['CroatiaM1']){
            $point["Croatia"] += 3;
            $matchjoues["morocco"] +=1;
            $matchjoues["Croatia"] +=1;  
            $matcheswons["Croatia"] +=1;  
            $lostmatches["morocco"] +=1;
            $goalsscored["Croatia"]+= $croatia1;
            $goalsscored["morocco"]+= $maroc1;
            $goalsconceded["morocco"]+= $croatia1;
            $goalsconceded["Croatia"]+= $maroc1;
            $goaldifference["morocco"]+=$goalsscored['morocco']-$goalsconceded['morocco'];
            $goaldifference["Croatia"]+=$goalsscored['Croatia']-$goalsconceded['Croatia'];
          }elseif($_POST['MoroccoM1'] == $_POST['CroatiaM1']){
            $point["morocco"] += 1;
            $point["Croatia"] += 1;
            $matchjoues["morocco"] +=1;
            $matchjoues["Croatia"] +=1;
            $tiedmatches["morocco"] +=1;
            $tiedmatches["Croatia"] +=1;
            $goalsscored["morocco"] += $maroc1;
            $goalsscored["Croatia"] += $croatia1;
            $goalsconceded["morocco"]+= $croatia1;
            $goalsconceded["Croatia"]+= $maroc1;
            $goaldifference["morocco"]+=$goalsscored['morocco']-$goalsconceded['morocco'];
            $goaldifference["Croatia"]+=$goalsscored['Croatia']-$goalsconceded['Croatia'];
          }
          

          if($_POST['BelgiumM1'] > $_POST['CanadaM1']){
            $point["Belgium"] += 3;
            $matchjoues["Belgium"] +=1;
            $matchjoues["Canada"] +=1;  
            $matcheswons["Belgium"] +=1;  
            $lostmatches["Canada"] +=1;
            $goalsscored["Belgium"] += $belgium1;
            $goalsscored["Canada"] +=$canada1;
            $goalsconceded["Belgium"]+=$canada1;
            $goalsconceded["Canada"] += $belgium1;
            $goaldifference["Belgium"]+=$goalsscored['Belgium']-$goalsconceded['Belgium'];
            $goaldifference["Canada"]+=$goalsscored['Canada']-$goalsconceded['Canada'];
        }elseif($_POST['BelgiumM1'] < $_POST['CanadaM1']){
          $point["Canada"] += 3;
          $matchjoues["Belgium"] +=1;
          $matchjoues["Canada"] +=1;  
          $matcheswons["Canada"] +=1;  
          $lostmatches["Belgium"] +=1;
          $goalsscored["Belgium"] += $belgium1;
          $goalsscored["Canada"] +=$canada1;
          $goalsconceded["Belgium"]+=$canada1;
          $goalsconceded["Canada"] += $belgium1;
          $goaldifference["Belgium"]+=$goalsscored['Belgium']-$goalsconceded['Belgium'];
          $goaldifference["Canada"]+=$goalsscored['Canada']-$goalsconceded['Canada'];
       
        }elseif($_POST['BelgiumM1'] == $_POST['CanadaM1']){
          $point["Belgium"] += 1;
          $point["Canada"] += 1;
          $matchjoues["Canada"] +=1;
          $matchjoues["Belgium"] +=1;
          $tiedmatches["Belgium"] +=1;
          $tiedmatches["Canada"] +=1;
          $goalsscored["Belgium"] += $belgium1;
          $goalsscored["Canada"] +=$canada1;
          $goalsconceded["Belgium"]+=$canada1;
          $goalsconceded["Canada"] += $belgium1;
          $goaldifference["Belgium"]+=$goalsscored['Belgium']-$goalsconceded['Belgium'];
          $goaldifference["Canada"]+=$goalsscored['Canada']-$goalsconceded['Canada'];
        }

        // MATCH 2


        if($_POST['MoroccoM2'] > $_POST['CanadaM2']){
          $point["morocco"] += 3;
          $matchjoues["morocco"] +=1;
          $matchjoues["Canada"] +=1;  
          $matcheswons["morocco"] +=1;  
          $lostmatches["Canada"] +=1;
          $goalsscored["morocco"] += $maroc2;
          $goalsscored["Canada"] += $canada2;
          $goalsconceded["morocco"]+= $maroc2;
          $goalsconceded["Canada"]+= $canada2;    //HYJUDYJYJDJUUJDJDUDJ
          $goaldifference["morocco"]+=$goalsscored['morocco']-$goalsconceded['morocco'];
          $goaldifference["Canada"]+=$goalsscored['Canada']-$goalsconceded['Canada'];

        }elseif($_POST['MoroccoM2'] < $_POST['CanadaM2']){
          $point["Canada"] += 3;
          $matchjoues["morocco"] +=1;
          $matchjoues["Canada"] +=1;  
          $matcheswons["Canada"] +=1;  
          $lostmatches["morocco"] +=1;
          $goalsscored["morocco"] += $maroc2;
          $goalsscored["Canada"] += $Canada2;
          $goalsconceded["morocco"]+= $Canada2;
          $goalsconceded["Canada"]+= $maroc2; //6666
          $goaldifference["morocco"]+=$goalsscored['morocco']-$goalsconceded['morocco'];
          $goaldifference["Canada"]+=$goalsscored['Canada']-$goalsconceded['Canada'];

        }elseif($_POST['MoroccoM2'] == $_POST['CanadaM2']){
          $point["morocco"] += 1;
          $point["Canada"] += 1;
          $matchjoues["morocco"] +=1;
          $matchjoues["Canada"] +=1;
          $tiedmatches["morocco"] +=1;
          $tiedmatches["Canada"] +=1;
          $goalsscored["morocco"] += $maroc2;
          $goalsscored["Canada"] += $Canada2;
          $goalsconceded["morocco"]+= $Canada2;
          $goalsconceded["Canada"]+= $maroc2;//666   
          $goaldifference["morocco"]+=$goalsscored['morocco']-$goalsconceded['morocco'];
          $goaldifference["Canada"]+=$goalsscored['Canada']-$goalsconceded['Canada'];
        }

        if($_POST['CroatiaM2'] > $_POST['BelgiumM2']){
          $point["Croatia"] += 3;
          $matchjoues["Croatia"] +=1;
          $matchjoues["Belgium"] +=1;  
          $matcheswons["Croatia"] +=1;  
          $lostmatches["Belgium"] +=1;
          $goalsscored["Croatia"] += $croatia2;
          $goalsscored["Belgium"] += $belgium2;
          $goalsconceded["Croatia"]+= $belgium2;
          $goalsconceded["Belgium"]+= $croatia2; //66C
          $goaldifference["Belgium"]+=$goalsscored['Belgium']-$goalsconceded['Belgium'];
          $goaldifference["Croatia"]+=$goalsscored['Croatia']-$goalsconceded['Croatia'];
      }elseif($_POST['CroatiaM2'] < $_POST['BelgiumM2']){
        $point["Belgium"] += 3;
        $matchjoues["Belgium"] +=1;
        $matchjoues["Croatia"] +=1;  
        $matcheswons["Belgium"] +=1;  
        $lostmatches["Croatia"] +=1;
        $goalsscored["Croatia"] += $croatia2;
        $goalsscored["Belgium"] += $Belgium2;
        $goalsconceded["Croatia"]+= $belgium2;
        $goalsconceded["Belgium"]+= $croatia2; //66C
        $goaldifference["Belgium"]+=$goalsscored['Belgium']-$goalsconceded['Belgium'];
        $goaldifference["Croatia"]+=$goalsscored['Croatia']-$goalsconceded['Croatia'];
      }elseif($_POST['CroatiaM2'] == $_POST['BelgiumM2']){
        $point["Croatia"] += 1;
        $point["Belgium"] += 1;
        $Belgium["matchjoues"] +=1;
        $Croatia["matchjoues"] +=1;   
        $tiedmatches["Croatia"] +=1;
        $tiedmatches["Belgium"] +=1;
        $goalsscored["Croatia"] += $croatia2;
        $goalsscored["Belgium"] += $Belgium2;
        $goalsconceded["Croatia"]+= $belgium2;
        $goalsconceded["Belgium"]+= $croatia2; //66
        $goaldifference["Belgium"]+=$goalsscored['Belgium']-$goalsconceded['Belgium'];
        $goaldifference["Croatia"]+=$goalsscored['Croatia']-$goalsconceded['Croatia'];
      }

    //   MATCH 3
        if($_POST['MoroccoM3'] > $_POST['BelgiumM3']){
          $point["morocco"] += 3;
          $matchjoues["morocco"] +=1;
          $matchjoues["Belgium"] +=1;  
          $matcheswons["morocco"] +=1;  
          $lostmatches["Belgium"] +=1;
          $goalsscored["morocco"] += $maroc3;
         $goalsscored["Belgium"] += $belgium3;
         $goalsconceded["morocco"]+= $belgium3;
         $goalsconceded["Belgium"]+= $maroc3; //66
         $goaldifference["Belgium"]+=$goalsscored['Belgium']-$goalsconceded['Belgium'];
         $goaldifference["morocco"]+=$goalsscored['morocco']-$goalsconceded['morocco'];

        }elseif($_POST['MoroccoM3'] < $_POST['BelgiumM3']){
          $point["Belgium"] += 3;
          $matchjoues["morocco"] +=1;
          $matchjoues["Belgium"] +=1;  
          $matcheswons["Belgium"] +=1;  
          $lostmatches["morocco"] +=1;
          $goalsscored["morocco"] += $maroc3;
         $goalsscored["Belgium"] += $belgium3;
         $goalsconceded["morocco"]+= $belgium3;
         $goalsconceded["Belgium"]+= $maroc3;
         $goaldifference["Belgium"]+=$goalsscored['Belgium']-$goalsconceded['Belgium'];
         $goaldifference["morocco"]+=$goalsscored['morocco']-$goalsconceded['morocco'];
        }elseif($_POST['MoroccoM3'] == $_POST['BelgiumM3']){
          $point["morocco"] += 1;
          $point["Belgium"] += 1;
          $matchjoues["morocco"] +=1;
          $matchjoues["Belgium"] +=1; 
          $tiedmatches["morocco"] +=1;
          $tiedmatches["Belgium"] +=1;
          $goalsscored["morocco"] += $maroc3;
          $goalsscored["Belgium"] += $belgium3;
          $goalsconceded["morocco"]+= $belgium3;
          $goalsconceded["Belgium"]+= $maroc3;//63  
          $goaldifference["Belgium"]+=$goalsscored['Belgium']-$goalsconceded['Belgium'];
          $goaldifference["morocco"]+=$goalsscored['morocco']-$goalsconceded['morocco'];

        }

        if($_POST['CroatiaM3'] > $_POST['CanadaM3']){
          $point["Croatia"] += 3;
          $matchjoues["Canada"] +=1;
          $matchjoues["Croatia"] +=1;  
          $matcheswons["Croatia"] +=1;  
          $lostmatches["Canada"] +=1;
          $goalsscored["Croatia"] += $croatia3;
         $goalsscored["Canada"] += $canada3;
         $goalsconceded["Croatia"]+= $canada3;
         $goalsconceded["Canada"]+= $croatia3;//8
         $goaldifference["Croatia"]+=$goalsscored['Croatia']-$goalsconceded['Croatia'];
         $goaldifference["Canada"]+=$goalsscored['Canada']-$goalsconceded['Canada'];
    }elseif($_POST['CroatiaM3'] < $_POST['CanadaM3']){
      $point["Canada"] += 3;
      $matchjoues["Canada"] +=1;
      $matchjoues["Croatia"] +=1;  
      $matcheswons["Canada"] +=1;  
      $lostmatches["Croatia"] +=1;
      $goalsscored["Croatia"] += $croatia3;
      $goalsscored["Canada"] += $canada3;
      $goalsconceded["Croatia"]+= $canada3;
      $goalsconceded["Canada"]+= $croatia3;//8
      $goaldifference["Croatia"]+=$goalsscored['Croatia']-$goalsconceded['Croatia'];
      $goaldifference["Canada"]+=$goalsscored['Canada']-$goalsconceded['Canada'];
    }elseif($_POST['CroatiaM3'] == $_POST['CanadaM3']){
      $point["Croatia"] += 1;
      $point["Canada"] += 1;
      $matchjoues["Canada"] +=1;
      $matchjoues["Croatia"] +=1;  
      $tiedmatches["Croatia"] +=1;
      $tiedmatches["Canada"] +=1;
      $goalsscored["Croatia"] += $croatia3;
      $goalsscored["Canada"] += $canada3;
      $goalsconceded["Croatia"]+= $canada3;
      $goalsconceded["Canada"]+= $croatia3;//8
      $goaldifference["Croatia"]+=$goalsscored['Croatia']-$goalsconceded['Croatia'];
      $goaldifference["Canada"]+=$goalsscored['Canada']-$goalsconceded['Canada'];

    }
    function cmp($a,$b){
      if($a==$b){
        return 0;
      }
      return ($a>$b)?-1:1;

    }
    uasort ($point,"cmp");
    foreach($point as $key => $value){
      echo "
      <tr>
            <td>$key</td>
            <td>$value</td>
            <td>$matchjoues[$key]</td>
            <td>$matcheswons[$key]</td>
            <td>$tiedmatches[$key]</td>
            <td>$lostmatches[$key]</td>
            <td>$goalsscored[$key]</td>
            <td>$goalsconceded[$key]</td>
            <td>$goaldifference[$key]</td>

                    
      </tr>";
      
    };
      
    }

    
?>
        </tbody>
    </table>
</body>
</html>