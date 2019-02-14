	<body>
		<div class="logo">
			<img src="<?=$url; ?>assets/image/logo.png" title="iranExpert Logo" alt="iranExpert Logo" />
		</div>
		<div class="box">
			<?php echo form_open('user/register','method="post"'); ?>
				<div class="box_right">
					<?php
						$email_input = array(
							'name'=>'email',
							'placeholder'=>'ایمیل'
						);
						$password_input = array(
							'name'=>'password',
							'placeholder'=>'رمز عبور'
						);
						$repassword_input = array(
							'name'=>'repassword',
							'placeholder'=>'تکرار رمز عبور'
						);
						$captcha_input = array(
							'name'=>'captcha',
							'placeholder'=>'گد امنیتی'
						);
						$submit_input = array(
							'name'=>'submit',
							'value'=>'ثبت نام'
						);
						echo form_input($email_input);
						echo form_password($password_input);
						echo form_password($repassword_input);
						echo $captcha['image'];
						echo form_input($captcha_input);
					?>
					<p><a href="<?=$url; ?>web/index" title="Back To HomePage">بازگشت به صفحه اصلی</a></p>
					<p><a href="<?=$url; ?>web/login" title="Login iranExpert">ورود به سامانه</a></p>
				</div>
				<div class="box_left">
					<?php
						echo form_submit($submit_input);
					?>
				</div>
				<div class="clear"></div>
			<?php echo form_close(); ?>
		</div>
	</body>

</html>