<center>
<div id="trend_range_menu">Extend trend line 
<?php
$months_ahead = array(3,6,9,12,18,24);

if ( !isset($_REQUEST['trendrange']) )
  $_REQUEST['trendrange'] = 6;

foreach ( $months_ahead as $index => $month ) {

  if (  $_REQUEST['trendrange'] == $month )
    $checked = 'checked="checked"';
  else
    $checked = "";

?>
   <input OnChange='drawTrendGraph("<?php print $_SERVER['QUERY_STRING'] . "&trendrange=" . $month; ?>"); return false;' type="radio" id="range-<?php print $month; ?>" name="r" value="<?php print $month; ?>" <?php print $checked; ?>/>
   <label for="range-<?php print $month; ?>"><?php print $month; ?></label>
<?php
}
?>
months ahead</div>
<br>
</center>
<script type="text/javascript">
  $(function () {
    $("#trend_range_menu").buttonset();
  });
</script>