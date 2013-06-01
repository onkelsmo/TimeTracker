<?php
/**
*
* Timer Class
* 
* 
*
* @author SmO
* @since 01.06.2013
*
**/
namespace timeTracker;

class Timer
{
	// Attributes
	private $startTime = 0;
	private $endTime = 0;
	private $timeDifference = 0;
	
	// Properties
	// TODO: implementing Magicmethods __get and __set
	public function getStartTime()
	{
		return $this->startTime;
	}
	
	private function setStartTime($startTime)
	{
		// TODO: Validation
		$this->startTime = $startTime;
	}
	
	public function getEndTime()
	{
		return $this->endTime;
	}
	
	private function setEndTime($endTime)
	{
		// TODO: Validation
		$this->endTime = $endTime;
	}
	
	public function getTimeDifference()
	{
		return $this->timeDifference;
	}
	
	private function setTimeDifference($timeDifference)
	{
		// TODO: Validation
		$this->timeDifference = $timeDifference;
	}
	
	// Constructor
	public function __construct()
	{
		
	}
	
	// Methods
	/**
	 * start - sets $startTime to the actual time
	 */
	public function start()
	{
		$actualTime = time();
		$this->setStartTime($actualTime);
	}
	
	/**
	 * stop - sets $endTime to the actual time
	 */
	public function stop()
	{
		$actualTime = time();
		$this->setEndTime($actualTime);
	}
	
	/**
	 * calculateDifference - substracts the $startTime from the $endTime and sets the $timeDifference
	 */
	public function calculateDifference()
	{
		$timeDifference = $this->endTime - $this->startTime;
		$this->setTimeDifference($timeDifference);
	}
}
?>