<?php

ini_set('display_errors', 1);

require "OutputInterface.php";
require "SerializedArrayOutput.php";
require "JsonStringOutput.php";
require "SomeClient.php";

$client = new SomeClient();

$client->setOutput(new SerializedArrayOutput());

$data = $client->loadOutput(["name" => "mg mg","age" => 21]);

var_dump($data);

$client->setOutput(new JsonStringOutput());

$data = $client->loadOutput(["name" => "mg mg","age" => 21]);

var_dump($data);
