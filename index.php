<html>
<head>
	<title>Localhost Index</title>
</head>
<body>

	<h1>
		Localhost
	</h1>
<?php

$directories = glob('/Applications/MAMP/htdocs/*', GLOB_ONLYDIR);

// Loop through the directories
foreach($directories as $dir)
{
	$title = explode('/', $dir); $title = $title[count($title) - 1];
	$files = scandir($dir);
?>
	<h3><a href="<?php echo $title;?>"><?php echo $title; ?></a></h3>
<?php
	foreach($files as $f)
	{
		if(is_dir($f))
			echo $f;	
	}
}

?>

</body>
</html>
