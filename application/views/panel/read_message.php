<h2>پنل کاربری -) پیام ها -) مشاهده</h2>
<div id="content_view"></div>

<?php 
	$message_item = $message_item[0];
	if(empty($message_item['full_name']))
	{
		$message_item['full_name'] = 'بدون نام';
	}
	if(empty($message_item['title']))
	{
		$message_item['title'] = 'بدون عنوان';
	}
?>

<table width="100%" class="retrive_once_message">
	<tr>
		<td>نام فرستنده</td>
		<td><strong><?php echo $message_item['full_name']; ?></strong></td>
	</tr>
	<tr>
		<td>عنوان پیام</td>
		<td><strong><?php echo $message_item['title']; ?></strong></td>
	</tr>
	<tr>
		<td>ایمیل فرستنده</td>
		<td><strong dir="ltr"><?php echo $message_item['email']; ?></strong></td>
	</tr>
	<tr>
		<td>زمان ارسال پیام</td>
		<td><strong><?php echo $this->jdf->jdate("j F Y - H:i:s", $message_item['time']); ?></strong></td>
	</tr>
	<tr>
		<td>پیام</td>
		<td style="text-align:justify;"><strong><?php echo $message_item['message']; ?></strong></td>
	</tr>
</table>
<p>&nbsp;</p>
<a class="return_key" href="<?=$url . 'panel/message#table_view'; ?>" title="بازگشت">بازگشت</a>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>راهنمایی:</strong></p>
<p>شما می توانید با پاسخدهی به پیام های خود به کمک ایمیلتان بین بازدیدکنددگان معتبر باشید.</p>