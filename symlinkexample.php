<?php

$targetFolder = $_SERVER['DOCUMENT_ROOT'].'/storage/app/public';

$linkFolder = $_SERVER['DOCUMENT_ROOT'].'/public/app/public';
symlink($targetFolder, $linkFolder);
?>
