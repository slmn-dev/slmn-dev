<?php

// Set correct document root
$_SERVER['DOCUMENT_ROOT'] = __DIR__ . '/../public';

// Set script paths
$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/../public/index.php';

// Change to Laravel root directory
chdir(__DIR__ . '/..');

// Include the original Laravel public/index.php
require __DIR__ . '/../public/index.php';