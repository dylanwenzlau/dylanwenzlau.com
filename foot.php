<?php
$t1 = microtime(true);
$time = ((($t1-$t0)*10000)>>0)/10000;
?>

<div id="footer">
	<div style="margin:20px;font-size:10px;color:#555;"><?php echo $time;?></div>
</div>

</body>
</html>