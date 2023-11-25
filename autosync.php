#!/usr/bin/env php
<?php

// rpurinton 2023, just a simple script to automate the git submodule foreach commands

function executeCommand($command)
{
    echo "Executing: $command\n";
    passthru($command);
}

$commands = [
    "git submodule foreach --recursive git fetch upstream",
    "git submodule foreach --recursive git merge upstream/main",
    "git submodule foreach --recursive composer update",
    "git submodule foreach --recursive git add -A",
    "git submodule foreach --recursive 'git diff --cached --exit-code || git commit -am AutoSync'",
    "git submodule foreach --recursive git push"
];
$commands2 = [
    "composer upgrade",
    "git add -A",
    "git diff --cached --exit-code || git commit -am AutoSync",
    "git push origin main"
];

chdir(__DIR__);

for ($i = 0; $i < 3; $i++) {
    foreach ($commands as $command) executeCommand($command);
    echo ("Done round $i, sleeping for 5 seconds for packagist to update...\n");
    sleep(5); // wait for composer packagist to update
}

foreach ($commands2 as $command) {
    executeCommand($command);
}

echo ("Done! Have a nice day :)\n");
