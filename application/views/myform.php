<html>
<head>
<title>My Form</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('form'); ?>

<h5>Username</h5>
<!-- <php echo form_error('username');> -->
<input type="text" name="username" value="" size="50" />

<!-- ������ ���� euckr�� ���� �ȵȴٰ� ����. 
<input type="text" name="username" value="<php echo set_value('username'); >" size="50" /> 
�ʵ��� �̸��� �迭�� ����ߴٸ�, �Լ����� �迭���� �״�θ� �Ѱ��ݴϴ�. 
����:
<input type="text" name="colors[]" value="<php echo set_value('colors[]'); >" size="50" />
-->

<h5>Password</h5>
<input type="text" name="password" value="" size="50" />

<h5>Password Confirm</h5>
<input type="text" name="passconf" value="" size="50" />

<h5>Email Address</h5>
<input type="text" name="email" value="" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>



</body>
</html>