<html>
<head>
	<title>This is Admin Page</title>
</head>
<body>

<h1> <?php echo $title ?> </h1>
<ol>
<?php foreach($todo as $item): ?>

<li><?=$item?></li>
<?php endforeach; ?>
</ol>
</body>
</html>