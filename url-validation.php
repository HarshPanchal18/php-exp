<?php
$url="https://google.com";
if(filter_var($url,FILTER_VALIDATE_URL))
    echo "Valid";
else
    echo "Not Valid";
?>
