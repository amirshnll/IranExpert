<!DOCTYPE html>
<html>
	<head>
		<!--Meta-->
		<meta charset="utf-8">
		<title><?=$title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Meta-->
		<!--Assets-->
		<?php
			if($page!='index')
			{
				echo '<style type="text/css"> body{background:#fafafa no-repeat;} .header{padding-bottom:0px !important;} </style>';
			}
			else
			{
				echo '<style type="text/css"> body{background:url(' . $url . 'assets/image/bg.png) #fafafa no-repeat; background-position:center 150px;} .header{padding-bottom:400px;} </style>';
			}
		?>
		<link rel="stylesheet" href="<?=$url; ?>assets/css/web.css" />
		<link rel="stylesheet" href="<?=$url; ?>assets/css/font-awesome.css">
		<link rel="stylesheet" href="<?=$url; ?>assets/css/font-awesome.min.css">
		<link rel="shortcut icon" type="image/ico" href="<?=$url; ?>assets/image/favicon.png" >
		<!--Assets-->
		<!--Js-->
		<script type="text/javascript" src="<?=$url; ?>assets/js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="<?=$url; ?>assets/js/doc.js"></script>
		<!--Js-->
	</head>
	<body>
		<div class="header">
			<div class="right_header">
				<img src="<?=$url; ?>assets/image/logo.png" title="سامانه پروفایل آنلاین ایرانیان" alt="سامانه پروفایل آنلاین ایرانیان" />
			</div>
			<div class="left_header">
				<ul>
					<li><a href="<?=$url; ?>index" title="صفحه اصلی">صفحه اصلی</a></li>
					<li id="pipe">|</li>
					<li><a href="<?=$url; ?>register" title="ثبت نام">ثبت نام</a></li>
					<li id="pipe">|</li>
					<li><a href="<?=$url; ?>login" title="ورود">ورود</a></li>
					<li id="pipe">|</li>
					<li><a href="<?=$url; ?>rules" title="قوانین">قوانین</a></li>
					<li id="pipe">|</li>
					<li><a href="<?=$url; ?>about" title="درباره ما">درباره ما</a></li>
					<li id="pipe">|</li>
					<li><a href="<?=$url; ?>contact" title="تماس با ما">تماس با ما</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>

		<?php
			if($page=='index')
			{
				echo '<div class="searchbox">';
				echo form_open($url . 'search', 'method="get" class="search_form"');
				$search_input = array(
					'name'			=>	'key',
					'placeholder'	=>	'جستجوی کاربران + اینتر',
					'maxlength'		=>	'100'
				);
				echo form_input($search_input);
				echo form_close();
				echo '</div>';

				?>
				<div class="slideshow">
					<ul>
						<?php
							foreach ($slideshow as $my_slideshow) {
								echo '<li><img src="' . $url . 'upload/' . $my_slideshow['file_name'] . '" title="' . $my_slideshow['title'] . '" alt="' . $my_slideshow['title'] . '" /></li>';
							}
						?>
					</ul>
				</div>
				<?php
			}
			else
			{
				echo '<div class="center_line">&nbsp;</div>';
			}
		?>
		<div class="clear"></div>