<?php

// Function to recursively stage all unstaged files in a given directory
function stageUnstagedFiles($directory)
{
    $output = shell_exec("git -C $directory status --porcelain");
    $files = explode("\n", trim($output));

    foreach ($files as $file) {
        if (strpos($file, '??') === 0) {
            $filePath = trim(substr($file, 2));
            shell_exec("git -C $directory add $filePath");
        }
    }
}

// Function to commit and push changes in a given directory
function commitAndPush($directory, $message)
{
    shell_exec("git -C $directory commit -m \"$message\"");
    shell_exec("git -C $directory push");
}

// Function to recursively sync all submodules in a given directory
function syncSubmodules($directory)
{
    $output = shell_exec("git -C $directory submodule foreach --recursive git submodule sync");
    echo $output;
}

// Main script
$rootDirectory = __DIR__;

// Stage and commit changes in submodules
$output = shell_exec("git -C $rootDirectory submodule foreach --recursive git status");
$submodules = explode("\n", trim($output));

foreach ($submodules as $submodule) {
    $submodulePath = trim(substr($submodule, 15));
    stageUnstagedFiles($submodulePath);
    commitAndPush($submodulePath, "AutoHandler");
}

// Sync submodules
syncSubmodules($rootDirectory);

// Stage and commit changes in the root workspace
stageUnstagedFiles($rootDirectory);
commitAndPush($rootDirectory, "AutoHandler");

echo "Script executed successfully.";
