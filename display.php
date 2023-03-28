<!DOCTYPE html>
<html>
  <head>
    <title>Player Avatar Search</title>
    <link rel="stylesheet" type="text/css" href="style2.css?ref=v1" />

  </head>
<p><a href="index.php#">Home</a>
    </html>

<?php
 
  if(isset($_POST["submit"])){
$server_name = 'localhost';
$user_name = 'root';
$password="";
$db_name = 'game_player';

$mysqli=new mysqli($server_name,$user_name,$password,$db_name);
           
$str = $_POST["search"];
$query_string = "SELECT * FROM player where user_name =  '$str'  ";
$all_user = $mysqli->query($query_string);

if ($all_user ->num_rows == 0)
{
    echo "<div class='avatar-container'>\n";
    echo "<div class='avatar-box'>\n";
    echo "<h3><strong>NOTHING FOUND </strong></h3>\n";


}
else
{
echo "<pre>";

while($user = $all_user ->fetch_assoc()){
    
//    reference 
//print_r($user["user_name"]);  
//print_r($user["player_level"]);  
//print_r($user["weapon"]);  
//print_r($user["helmet"]);  
//print_r($user["chest"]);  
//print_r($user["boots"]);  
//print_r($user["quest_id"]);  
//print_r($user["abilities_id"]);  
//print_r($user["avatar"]);  

echo "<div class='avatar-container'>\n";
   echo "<div class='avatar-box'>\n";
    echo "<h3><strong>User Name: </strong>{$user["user_name"]}</h3>\n";
    echo "<img src='{$user["avatar"]}' alt='Avatar'>\n";
    echo "<p><strong>Level:</strong> {$user["player_level"]}</p>\n";
    echo "<p><strong>Weapon:</strong> {$user["weapon"]}</p>\n";
    echo "<p><strong>Helmet:</strong> {$user["helmet"]}</p>\n";
    echo "<p><strong>Chest:</strong> {$user["chest"]}</p>\n";
    echo "<p><strong>Boots:</strong> {$user["boots"]}</p>\n";
    echo "<p><strong>Quest ID:</strong> {$user["quest_id"]}</p>\n";  
   echo "</div>\n";
echo "</div>";



      } 
      

  }
  


  }
       

?>
 
<p><a href="index.php">Home</a>
    </html>