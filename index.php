<?php
/**
*
* TimeTracker  
*
* @author SmO
* @since 01.06.2013
*
**/
namespace timeTracker;

include 'includes/includes.php';

$timer = new Timer();

TemplateLoader::load('header');
TemplateLoader::load('mainContent', $timer);
TemplateLoader::load('footer');
?>