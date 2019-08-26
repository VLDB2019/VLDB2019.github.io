<?
$time = new DateTime('now, +3 hours', new DateTimeZone('America/Los_Angeles'));
//echo $time->format('Y-m-d H:i').'<br />';
$day = 1;
if ($time->format('Y-m') == '2019-08') {
    $day = $time->format('d') - 25;
    if ($day < 1 || $day > 5) $day = 1;
}
include(Root.'/pages/schedule-day-'.$day.'.php');