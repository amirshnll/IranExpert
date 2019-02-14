<h2>پنل کاربری -) اطلاعات تماس</h2>
<?php
	echo form_open('user/update_contact', 'method="post" class="panel_form"');

	$mobile_number_input = array(
		'name'			=>	'contact_mobile_number',
		'placeholder'	=>	'همراه',
		'maxlength'		=>	'20',
		'required'		=>	'required',
		'value'			=>	$mobile_number_value
	);
	$phone_number_input = array(
		'name'			=>	'contact_phone_number',
		'placeholder'	=>	'تلفن',
		'maxlength'		=>	'20',
		'value'			=>	$phone_number_value
	);
	$postal_code_input = array(
		'name'			=>	'contact_postal_code',
		'placeholder'	=>	'کد پستی',
		'maxlength'		=>	'20',
		'value'			=>	$postal_code_value
	);

	$province_item = array(
		'0'		=>	'نامشخص',
		'1'		=>	'اردبیل',
		'2'		=>	'اصفهان',
		'3'		=>	'البرز',
		'4'		=>	'ایلام',
		'5'		=>	'آذربایجان شرقی',
		'6'		=>	'آذربایجان غربی',
		'7'		=>	'بوشهر',
		'8'		=>	'تهران',
		'9'		=>	'چهارمحال و بختیاری',
		'10'	=>	'خراسان جنوبی',
		'11'	=>	'خراسان رضوی',
		'12'	=>	'خراسان شمالی',
		'13'	=>	'خوزستان',
		'14'	=>	'زنجان',
		'15'	=>	'سمنان',
		'16'	=>	'سیستان و بلوچستان',
		'17'	=>	'فارس',
		'18'	=>	'قزوین',
		'19'	=>	'قم',
		'20'	=>	'کردستان',
		'21'	=>	'کرمان',
		'22'	=>	'کرمانشاه',
		'23'	=>	'کهگیلویه و بویراحمد',
		'24'	=>	'گلستان',
		'25'	=>	'گیلان',
		'26'	=>	'لرستان',
		'27'	=>	'مازندران',
		'28'	=>	'مرکزی',
		'29'	=>	'هرمزگان',
		'30'	=>	'همدان',
		'31'	=>	'یزد'
	);
	$address_input = array(
		'name'			=>	'contact_address',
		'maxlength'		=>	'500',
		'value'			=>	$address_value
	);
	$submit_input = array(
		'name'			=>	'contact_submit',
		'value'			=>	'بروز رسانی'
	);
?>

<table>
	<tr>
		<td><strong>شماره همراه</strong></td>
		<td><?php echo form_input($mobile_number_input); ?></td>
	</tr>
	<tr>
		<td><strong>شماره تماس</strong></td>
		<td><?php echo form_input($phone_number_input); ?></td>
	</tr>
	<tr>
		<td><strong>کد پستی</strong></td>
		<td><?php echo form_input($postal_code_input); ?></td>
	</tr>
	<tr>
		<td><strong>استان</strong></td>
		<td><?php echo form_dropdown('contact_province', $province_item, $province_value); ?></td>
	</tr>
	<tr>
		<td><strong>آدرس</strong></td>
		<td><?php echo form_textarea($address_input); ?></td>
	</tr>
	<tr>
		<td></td>
		<td><?php echo form_submit($submit_input); ?></td>
	</tr>
</table>

<?php
	if($notice == 1)
	{
		echo '<p style="color:#f00;">اطلاعات وارد شده نامعتبر می باشند.</p>';
	}
	elseif ($notice == 2)
	{
		echo '<p style="color:#3acc17;">اطلاعات با موفقیت ذخیره شد.</p>';
	}
?>

<p>&nbsp;</p>
<p><strong>راهنمایی:</strong></p>
<p>برای کمک به مبارزه و جلوگیری از هرزنامه از اطلاعات حقیقی خود استفاده نمایید.</p>
<p>در این صفحه شما میتوانید اطلاعات تماس خود را وارد کنید تا افراد بازدید کننده به راحتی بتوانند با شما ارتباط برقرار کنند.</p>
<p>از توزیع اطلاعات شخصی و محرمانه سایر افراد و یا استفاده از حساب شخص دیگری یا باز کردن حساب به نام فرد دیگر خودداری فرمایید.</p>

<?php
	echo form_close();
?>