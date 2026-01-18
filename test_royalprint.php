<?php
require __DIR__. '/vendor/autoload.php';
use function royalprint\go;
use function royalprint\puts;
use function royalprint\codebabel;

$msgbox = "I am tea pot!";
go($msgbox); # [scm] simple console message
puts("\ndevdalua");
codebabel("codebabel");