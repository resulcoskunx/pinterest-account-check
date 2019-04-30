<?php
include 'config.php';
	if( $_POST ){
	   $text = $_POST['textarea_adi'];
	   if($text=="") {
		    echo "<script type='text/javascript'>alert('Boş alan bırakmayın');</script>";
	   }
	   else {
	   $array = explode("\n", $text);
	   $veri = preg_replace('/(?:(?:\r\n|\r|\n)\s*)/sim', "", $array);
	   foreach($veri as $key){
		  $query = $db->prepare("INSERT INTO hesaplar SET kadi = ?");
		  $insert = $query->execute(array($key));
	if ( $insert ){
		$last_id = $db->lastInsertId();
	}
	}
	echo "<script type='text/javascript'>alert('Kullanıcı adları eklendi');</script>";
	}
	}
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Pinterest Hesap Ekleme</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    </head>

    <body>
        </td>
        <td class="indtd">
            <div class="container">
                <h2>Kullanıcı Adlarını Alt Alta Yazın</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <textarea name="textarea_adi" class="form-control" rows="5"></textarea>
                    </div>

                    <button type="submit" class="btn btn-info">Ekle</button>
                </form>
        </td>
        </div>

    </body>
	
    </html>