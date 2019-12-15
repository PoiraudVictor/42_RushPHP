<?php
if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] && $_POST['submit'] === "OK")
{
	$content = file_get_contents('../db/users');
	$account = unserialize($content);
	if ($account)
	{
		$flag = 0;
		foreach ($account as $key => $val)
		{
			if ($val['login'] === $_POST['login'] && $val['passwd'] === hash('whirlpool', $_POST['oldpw']))
			{
				$flag = 1;
				$account[$key]['passwd'] =  hash('whirlpool', $_POST['newpw']);
			}
		}
		if ($flag)
		{
			file_put_contents('../db/users', serialize($account));
			header('Location: index.html');
			exit();
		}
		else
			//Antoine error management
	}
	else
		//Antoine error management
}
else
	//Antoine error management
?>
