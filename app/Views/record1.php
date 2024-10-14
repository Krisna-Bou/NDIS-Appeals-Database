<title>Record</title>
<body>
<div class="case-head">
	<h1>New Record</h1>
</div>
<div class="case-container">
	<?php echo form_open(base_url() . 'record/check_record'); ?>
	<?php echo $error; ?>
	<div class="case-split">
		<div class="case-row"> 
			<h3 class="input-split-1">Citation</h3>
			<input type="text" class="input-box case-split-2" placeholder="Citation" required="required" name="citation">
		</div>
	</div>
	<?php echo form_close(); ?>
</div>
</body>