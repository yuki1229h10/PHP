<?php
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename = "ghost.gif');
print file_get_contents('./ghost.gif');
