<?php require_once('inc/header.php');?>
</head>
<body>
	<?php 
		if($lti->is_valid()) {
			echo 'Valid_';
		} else {
			echo 'Invalid_';
		}
		
		echo $_POST['custom_survey_id'];
		
	?>

<h1>TEAMS101x survey test</h1>
<h3>testing ground</h3>









<dl>
	<dt>Status</dt><dd><?php 
		if($lti->is_valid()) {
			echo 'Valid';
		} else {
			echo 'Invalid';
		}
	?></dd>
	<dt>User ID</dt><dd><?php echo $lti->user_id();?></dd>
	<dt>Call Data</dt><dd><pre><?php print_r($lti->calldata());?></pre></dd>
	<dt>Errors</dt><dd><pre><?php print_r($lti->get_errors()); ?></pre></dd>
	
</dl>


</body>
</html>