<?php
    $commExec=escapeshellcmd('python3 test.py');
    echo shell_exec($commExec);
?>
