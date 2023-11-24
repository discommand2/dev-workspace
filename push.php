#!/usr/bin/env php
<?php

function executeCommand($command) {
    echo "Executing: $command\n";
    passthru($command);
}

$commands = [
    "git submodule foreach --recursive git add -A",
    "git submodule foreach --recursive 'git diff --cached --exit-code || git commit -m AutoSync'",
    "git submodule foreach --recursive git push",
    "git submodule foreach --recursive git pull",
    "git add -A",
    "git diff --cached --exit-code || git commit -m AutoSync",
    "git push origin main"
];

chdir(__DIR__);

foreach ($commands as $command) {
    executeCommand($command);
}