<!-- Bootstrap Start -->
<div class="span10">

	<!--Body content-->
	<h1>������� Add</h1>
<form action="/race_info/add" method="post" class="span10">
  <?php echo validation_errors(); ?>
    <input type="input" name="race_place" placeholder="����" class="span1" value='K' />&nbsp;    					
    <input type="input" name="race_ymd"  placeholder="�Ͻ�" class="span1" value='2019-02-13' />&nbsp;
    <input type="input" name="race_round"  placeholder="ȸ��" class="span1" value='3' />&nbsp;    
    <input type="input" name="entry_grade"  placeholder="��������" class="span4" value='�߳��͵�'/>&nbsp;
    <input class='btn btn-info' type='submit'>
</form>
</div>
<!-- Bootstrap End -->


 