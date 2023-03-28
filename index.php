<!DOCTYPE html>
<html>
  <head>
    <title>Player Avatar Search</title>
    <link rel="stylesheet" type="text/css" href="style2.css?ref=v1" />
  <script>
function searchField(value) {
    var searchInput = document.querySelector('input[name="search"]');
    searchInput.value = value;

    var submitButton = document.querySelector('input[name="submit"]');
    submitButton.click();
}
    </script>
  </head>
  <body>
    <header>
      <h1>Player Avatar Search</h1>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>       
           
                 

        </ul>
      </nav>
    </header>
   

       <form method = "post" action="display.php" >
         <label>Search:</label>
          <input type="text"  name="search" >
            <input type="submit" name = "submit">
        </form>


<?php



echo "<div class='avatar-container'>\n";


$server_name = 'localhost';
$user_name = 'root';
$password="";
$db_name = 'game_player';

$mysqli=new mysqli($server_name,$user_name,$password,$db_name);
          

$query_string = "SELECT * FROM player  ";
$all_user = $mysqli->query($query_string);
$count = 0;
while($user = $all_user ->fetch_assoc()){
 
   if($count == 3) {
        break;
    }
echo "<div class='avatar-container'>\n";
   echo "<div class='avatar-box'>\n";
    echo "<h3><strong>User Name: </strong>{$user["user_name"]}</h3>\n";
    echo "<img src='{$user["avatar"]}' alt='Avatar'>\n";            
 echo "<p><strong><a href='#' onclick=\"searchField('{$user['user_name']}'); return false;\">Level:</a></strong> {$user['player_level']}</p>\n";
   
   echo "</div>\n";
echo "</div>";
$count++;
}


?>

 

    <footer>
      
  
          
      
      <ul>
        
      </ul>
    </footer>

    
  </body>
</html>
