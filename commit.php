<?php

$opts = getopt("m:a");

file_put_contents("changes.txt", $opts["m"] . PHP_EOL . PHP_EOL . file_get_contents("changes.txt"));

exec("git add -A :/");
exec("git commit -F changes.txt" . ((isset($opts["m"]) and $opts["m"]) ? " --amend":""), $output);

file_put_contents("changes.txt", "");

echo implode(PHP_EOL, $output);
