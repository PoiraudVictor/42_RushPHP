<?php
if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] === "OK")
{
	$content = file_get_contents('../db/users');
	$accounts = unserialize($content);
	$flag = 0;
	if ($accounts)
	{
		foreach ($accounts as $key => $value)
		{
	    	if ($value['login'] === $_POST['login'])
				$flag = 1;
		}
	}
	if ($flag)
		//Antoine integre au front le fait que le user doive Sign In et non Sign Up car il existe deja
	else
	{
		$user['login'] = $_POST['login'];
		$user['passwd'] = hash('whirlpool', $_POST['passwd']);
        $user['panier'] = array();
        $user['cookie'] = array();
        $user['validé'] = array();
        $user['to_pay'] = $to_pay;
        $user['payed'] = $payed;
		$accounts[] = $user;
		file_put_contents('../db/users', serialize($accounts));
		header('Location: index.php');
		exit();
	}
}
else
	//Antoine front
?>
