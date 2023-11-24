#!/usr/bin/env php
<?php

function executeCommand($command) {
    echo "Executing: $command\n";
    passthru($command);
}

$commands = [
    "git submodule foreach --recursive git pull origin main",
    "git add .",
    "git commit -m 'Update submodules'",
    "git push origin main"
];

chdir(__DIR__);

foreach ($commands as $command) {
    executeCommand($command);
}