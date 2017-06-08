<html>
	<head>
		<?php $this->load->view('common/css_files_include'); ?>
		
		<?php $this->load->view('common/js_files_include'); ?>
	</head>
	<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
	
		<?php
			switch ($curpage) {
				case 'Home':
					echo $content;
					break;
			}
		?>



	</body>
</html>