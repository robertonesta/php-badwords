<?php

$paragraph = trim($_GET["paragraph"]);
$censoredWord = trim($_GET["censoredWord"]);
$censoredParagraph = str_replace($censoredWord, "***", $paragraph);

?>