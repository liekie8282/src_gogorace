<!-- Bootstrap Start -->
<div class="span2">
	<ul class="nav nav-tabs nav-stacked">
		<!--Sidebar content-->
        <?php foreach ($arr_result as $row){ ?>
        	<?=$row->race_ymd.' ('.$row->race_round.'R)'?> 
        <?php } ?>
        <br>      
    </ul>
</div> 
<!-- Bootstrap End -->

 