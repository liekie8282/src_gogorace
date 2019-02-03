<!-- Bootstrap Start -->
<div class="span10">

	<!--Body content-->
	<h1>경기일정 Add</h1>
<form action="/race_info/add" method="post" class="span10">
  <?php echo validation_errors(); ?>
    <input type="input" name="race_place" placeholder="지역" class="span1" value='K' />&nbsp;    					
    <input type="input" name="race_ymd"  placeholder="일시" class="span1" value='2019-02-13' />&nbsp;
    <input type="input" name="race_round"  placeholder="회차" class="span1" value='3' />&nbsp;    
    <input type="input" name="entry_grade"  placeholder="참가조건" class="span4" value='잘난것들'/>&nbsp;
    <input class='btn btn-info' type='submit'>
</form>
</div>
<!-- Bootstrap End -->


 