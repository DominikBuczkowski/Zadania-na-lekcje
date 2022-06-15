<?php
ini_set('display_errors',0);

if( isset( $_GET['wyslij'] ))
{
  include "index.html";
  $operator=$_REQUEST['operator'];
  $n1 = $_GET['liczba1'];
  $n2 = $_GET['liczba2'];

  if($operator=="+") {
  $res= $n1+$n2;
  }

  if($operator=="-") {
  $res= $n1-$n2;
  }

  if($operator=="*") {
  $res =$n1*$n2;
  }

  if($operator=="/") {
    if($n1 == 0 || $n2 == 0) {
      echo "<script language=javascript> alert(\"NIE MOŻNA DZIELIĆ PRZEZ 0\");</script>";
      
    }
  $res= $n1/$n2;
  }

  if($_REQUEST['liczba1']==NULL || $_REQUEST['liczba2']==NULL)
    {
      echo "<script language=javascript> alert(\"NIE WPROWADZONO LICZBY\");</script>";
    }

  echo '<p id="pp">'.$res.'</p>';
}

/* com multilines*/
// or # com singleline
?>
