<?php
function esc($string) {
    echo htmlspecialchars($string);
}
function logMessage($level, $message) {
    $file = fopen(ROOT.'logs'.DIRECTORY_SEPARATOR.'application.log', "a");
    fwrite($file, "[$level] $message". PHP_EOL);
    fclose($file);
}