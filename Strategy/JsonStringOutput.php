<?php

class JsonStringOutput implements OutputInterface
{
	
	public function load($arrayOfData)
	{
		return json_encode($arrayOfData);
	}
}