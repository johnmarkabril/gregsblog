<html>
	<head>
		<?php $this->load->view('common/custom_cs.php'); ?>
	</head>
    
	<body  id="home-section">
		<div style="background-color: #ffffff;">
		<?php
			$this->load->view('topbar.php');

			$this->load->view('home.php');
			$this->load->view('common/custom_js.php');
		?>
		</div>
	</body>
</html>