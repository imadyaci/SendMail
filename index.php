<?php

if(isset($_POST['mailframe'])){
	
	$header="MIM-Version: 1.0\r\n";
	$header.='Form:"PrimFX.com"<support@primfx.com>'."\n";
	$header.='Content-Type:text/html; charset="utf-8"'."\n";
	$header.='Content-Transfer-Encoding: 8bit';

	$message ='
		
		<html>
			<body>
				<div align="center">
					J\'ai envoyé ce mail avec PHP !
					<br>
					<img src="https://cdn.pixabay.com/photo/2013/07/13/11/30/envelope-158279_960_720.png">

				</div>
			</body>
		</html>

	' ;
	echo $_POST['personmail'];
	mail($_POST['personmail'], "Salut test", $message, $header);
}
?>
<form action="" method="POST" >
	<input type="mail" name="personmail">
	<input type="Submit" name="mailframe" value="envoyé">
</form>