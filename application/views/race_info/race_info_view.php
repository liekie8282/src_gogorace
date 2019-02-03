<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<h1> <?php echo $year ?>년 경주 정보</h1>

<?php foreach ($race_info as $rs): ?>
	<div id="container">		
		<div id="body">
			<p>
                <?php echo $rs['race_seq'] ?>
                <?php echo $rs['race_place'] ?>
                <?php echo $rs['race_year'] ?>
                <?php echo $rs['race_date'] ?>
                <?php echo $rs['race_round'] ?>
                <?php echo $rs['entry_grade'] ?>
                <a href="<?php echo $rs['race_seq'] ?>">경주결과 보기</a>	
			</p>
        </div>
	</div>
<?php endforeach ?>

<p class="footer">
	Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
