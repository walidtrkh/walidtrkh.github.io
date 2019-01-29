<?php 
SESSION_START(); 
require_once 'connexion.php';

if(isset($_POST['message']))
{
$nom=mysql_real_escape_string($_POST['nom']);
$message=mysql_real_escape_string($_POST['message']);
$siteweb=mysql_real_escape_string($_POST['siteweb']);
$tel=($_POST['tel']);
$email=($_POST['email']);
$captcha=($_POST['captcha']);

if ($captcha != 0) {
mysql_query("INSERT INTO contact(`id`, `nom`, `tel`, `email`, `message`, `siteweb`) values (NULL,'$nom','$tel','$email','$message','$siteweb')");

$to = " contact@downloadstream.net";
$subject = "Contact";
$txt = "Nouveau Message sur walidtrkh.info";
$headers = "From:  contact@downloadstream.net" . "\r\n" .
"CC:  contact@downloadstream.net";

mail($to,$subject,$txt,$headers);

}
}


if(isset($_POST['lg_username']))
{
$username=$_POST['lg_username'];
$mp=$_POST['lg_password'];
$query= mysql_query("SELECT * from user where (username='$username' and mp='$mp') ") ;
while ($req=mysql_fetch_array($query)) {
	$_SESSION['connected'] = '1' ;
	$_SESSION['id'] = $req['id'] ;
	$_SESSION['username'] = $req['username'] ;
	$_SESSION['mail'] = $req['mail'] ;
	?>
<script type="text/javascript">
	window.location.href='admin/?login=success';
</script> 
<?php
}
}
if($_SESSION['connected']!='1') { ?>
<script type="text/javascript">
	window.location.href='login.php?erreur=1';
</script>
<?php } ?>
