#!/usr/bin/env php
<?php

$dir = __DIR__;
chdir($dir);
passthru("git submodule foreach --recursive git add -A");
passthru("git submodule foreach --recursive 'git diff --cached --exit-code || git commit -m AutoSync'");
passthru("git submodule foreach --recursive git push");
passthru("git submodule foreach --recursive git pull");
passthru("git add -A");
passthru("git diff --cached --exit-code || git commit -m AutoSync");
passthru("git push");
