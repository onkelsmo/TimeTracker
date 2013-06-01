<?php
/**
*
* TemplateLoader
*
* @author SmO
* @since 01.06.2013
*
**/
namespace timeTracker;

final class TemplateLoader
{
	// Methods
	public static function load($tpl)
	{
		// TODO: Does the File exists?
		$filename = "templates/".$tpl.".phtml";
		
		$content = file_get_contents($filename);
		echo $content;
	}
}
?>