<?php 
//variable
$a=true;
echo $a;
echo "-------";
echo "yassine learn php";
echo "-------";
$b=1;
echo $b;
echo "-------";
$b="lhadi";
echo $b;
echo "-------";
//tableaux
$item=array('yassine',1);
echo '<pre>';
print_r($item);
echo '</pre>';
$item1=array();
echo '<pre>';
print_r($item1);
echo '</pre>';
array_push($item1,'khalid');
echo '<pre>';
print_r($item1);
echo '</pre>';
$item3=['gjh'];
// $item3=[...$item3,'KHALID'];
array_push($item3,'erfgr','zhfi',3334,TRUE);
echo '<pre>';
print_r($item3);
echo '</pre>';
?>

<?php 
for($i=0;$i<6;$i++)
{
    echo $i;
}
echo "-----------";
if(isset($_POST["btn1"]))
echo $_POST["client"];
if(isset($_GET["btn2"]))
echo $_GET["user"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="learnphp.php" method="GET">

<input  type="text" placeholder="enter your name" name="client">
<br>
<button  type="submit" name="btn1">recuperate</button>
<br>
<input type="text" placeholder="enter your name" name="user">
<br>
<button type="submit" name="btn2">recuperate</button>
<?php
session_start();
 $_SESSION["ses"]="casablanca"; ?>
<a href="session.php">session</a>
</form>
</body>
</html>

<?php

class Produit
{
public $name;
public $prix ;
public function __construct($name,$prix)
{
    $this->name=$name;
    $this->prix=$prix;
}
public function tostrin()
{
    return $this->name.'-' .$this->prix;
}
}

class Pain extends Produit
{
    $age;
     function __construct($name,$prix,$age)
    {
        $this->age=$age;
        parent::__construct($name,$prix);
    }

    public function tostrin()
{
    return $this->name.'-' .$this->prix;
}
    {
        
    }
}


?>
<?php
$cl=new Produit($name,$prix);
$cl->tostrin();
?>


<?php 
//class

class Produit
{
    public $name;
    public $prix;
    public function __construct($name,$prix)
    {
        $this->name=$name;
        $this->prix=$prix;
    }

}

class pain extends Produit
{
   public  $poids ;
    public function __construct($poids,$name,$prix)
    {
        $this->poids=$poids;
        parent::__construct($name,$prix);
    }

    public function fn($poi)
    {
        return $this->poids=$poi;
    }
}

?>

<?php
$poi=10;
$pr=new Produit("lait",10);
$p=new pain(23,'lait',$poi);
echo $p->poids;
echo $p->name;
echo $p->prix;
echo '------';
 echo $p->fn($poi);
?>
