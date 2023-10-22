<?php

$matches = [];
$result = preg_match_all("/danny|hima|wan/i", "Danny Himawan", $matches);
var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|babi/i", "***", "dasar babi, dasar anjing lu!");
var_dump($result);

$result = preg_split("/[\s,-]/", "Danny Himawan,Test Regex-Regular Expression");
var_dump($result);
