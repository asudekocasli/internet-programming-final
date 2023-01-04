
<?php 

 $baglan = new mysqli("localhost";"asude","1234",deneme); 
 $baglan->set_charset("utf-8");


 try{
    $db=new PDO("mysql:host=localhost;dbname=deneme;charset=utf8",'root','');

}catch(PDOException $e){
    echo $e->getMessage();
}
?>