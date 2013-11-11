<?php
	$msg = 'Invalid age';
	
	if (isset($_GET['age']) && is_numeric($_GET['age']))
	{
		$age = $_GET['age'];
		
		if ($age > 100)
		{
			$msg = "You are very old ...";
		}
		else if ($age >= 18)
		{
			$msg = "Grown up uhh ";
		}
		else if ($age >= 0)
		{
			$msg = "Just a kid ";
		}
		else if ($age >= -0.75)
		{
			$msg = "Hmm... interesting... ";
		}
		else
		{
			$msg = "Are you calling from previous life?";
		}
	}
?>
<div style="width: 420px; height: 200px; padding: 20px; background-color: #222; color: #fff;">
<h1><?php echo isset($_GET['title']) ? $_GET['title'] : 'Title'?></h1>
<h2><?php echo isset($_GET['name']) ? $_GET['name'] : 'noname'?></h2>
<p><?php echo $msg; ?></p>
$_GET: <pre><?php
	var_export($_GET);
?></pre>
</div>