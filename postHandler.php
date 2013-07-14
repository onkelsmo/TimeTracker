<?php
/**
*
* postHandler.php
*
* @author SmO
* @since 14.07.2013
*
**/
namespace timeTracker;

use timeTracker\Timer;

include 'includes/includes.php';

if (isset($_POST['btn01']) && $_POST['btn01'] == 'start')
{
	$timer->start();
	dump($timer);
}
else if (isset($_POST['btn01']) && $_POST['btn01'] == 'stop')
{
	$timer->stop();
	dump($timer);
}
?>