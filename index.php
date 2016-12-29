<?php
session_start();
//var_dump($_SERVER);
//log in form handler======
$login = $_POST['login'];
if(!empty($login)){
    $_SESSION['login'] = $login;
}
//==============

//exit===========
if(isset($_GET['action'])){
    session_destroy();
    header('Location:'.$_SERVER['PHP_SELF']);//see var_dump
}
//===============
?>
<html>
    <head>
	<meta charset ="UTF-8">
	</head>
	<body>
	<?php if(empty($_SESSION['login'])):?>
	
	    <form method="post">
		<label>
		    <input type="text" name ="login"/>
		</label>   
		<input type="submit" value="log in"/>
	    </form>
	<?php else:?>
	    <?=$_SESSION['login'] ?>
	    
	    <a href="?action=exit"> Log out </a>    
	<?php endif; ?>
	</body>
    
    
</html>



