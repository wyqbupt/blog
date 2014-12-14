<center>
<ul class="Calendar">
<?php
include_once('generate_calendar.php');

echo generate_calendar($year, $month, $days, $len, $url, 0, $pnc);
?>
</ul>
</center>
