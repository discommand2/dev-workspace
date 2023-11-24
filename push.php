#!/usr/bin/env php
<?php

$dir = __DIR__;
chdir($dir);

function loop()
{
    // Add all changes
    passthru("git submodule foreach --recursive git add -A");

    // Commit all changes
    passthru("git submodule foreach --recursive git commit -m 'AutoSync'");

    // Push all changes
    passthru("git submodule foreach --recursive git push origin master");

    // Pull all changes
    passthru("git submodule foreach --recursive git pull origin master");
}

loop();
loop();
loop();
passthru("git add -A");
passthru("git commit -m 'AutoSync'");
passthru("git push origin master");
