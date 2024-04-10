<?php
$globalConfig = [];
 
function loadConfig() {
    global $globalConfig;
    $globalConfig['db'] = 'localhost';
    $globalConfig['user'] = 'aaaa';
    $globalConfig['password'] = 'ssss';
}
 
function connectToDatabase() {
    global $globalConfig; 
}
 
loadConfig();
connectToDatabase();
