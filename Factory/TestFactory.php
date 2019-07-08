<?php

require "AutomobileFactory.php";

$bmw = AutomobileFactory::create('BMW','2019');

echo $bmw->getMakeAndModel();

		

