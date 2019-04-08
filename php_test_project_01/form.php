<?php

file_put_contents('./'.$_POST['title'].'.txt',$_POST['description']);

echo 'title : '.$_POST['title'].'<hr>';
echo 'description : '.$_POST['description'].'<hr>';

?>