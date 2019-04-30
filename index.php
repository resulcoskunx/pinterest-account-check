<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
set_time_limit(0);
require('vendor/autoload.php');
require('config.php');

use seregazhuk\PinterestBot\Factories\PinterestBot;

$bot = PinterestBot::create();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pinterest Hesap Kontrolcüsü</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
	<table class="table">
  <thead class=" thead-dark">
    <tr>
      <th scope="col">#</th>
	  <th scope="col">Kullanıcı Adı</th>
	  <th scope="col">Takipçiler</th>
	  <th scope="col">Takip Edilenler</th>
      <th scope="col">Website</th>
	  <th scope="col">Pin</th>
      <th scope="col">Pano</th>
	  <th scope="col">Son Yapılan Pin Zamanı</th>
    </tr>
  </thead>
  <?php 
          $bilgisor=$db->prepare("SELECT * from hesaplar");
          $bilgisor->execute();
          while ($bilgicek=$bilgisor->fetch(PDO::FETCH_ASSOC)) {?>
  <tbody>
   <?php
      $userData = $bot->pinners->info($bilgicek["kadi"]);
	  $i=1;
		   echo "<tr>";
		   echo "<td>$i</td>";
		   echo "<td>".$userData["username"]."</td>";
		   echo "<td>".$userData["follower_count"]."</td>";
		   echo "<td>".$userData["following_count"]."</td>";
		   if ($userData['domain_verified']==1) {
		   echo '<td>'.$userData["domain_url"].'(onaylı)</td>';
		   } else { 
		   echo "<td>".$userData["domain_url"]."(onaylı değil ya da website yok)</td>";
		   }
		   echo "<td>".$userData["pin_count"]."</td>";
		   echo "<td>".$userData["board_count"]."</td>";
		   echo "<td>".$userData["last_pin_save_time"]."</td>";
		   echo "</tr>";
		   $i++;
	  ?>
  </tbody>
  <?php } ?>
</table>

</div>
 
</body>
</html>