<?php
$word = "Hello There";

$word = preg_replace('/(\b[a-z])/i', '<span style="color:blue;">\1</span>', $word);
echo $word;
