#greeting.php

<?php
function welcome(){
    return 'Hello world';
}
?>

#2.php

<?php
include 'greeting.php';
echo welcome();
?>

#greeting_lang.php

<?php
namespace language\en;
function welcome(){
    return 'Hello world';
}
namespace language\ko;
function welcome(){
    return '안녕세계';
}

#3.php

<?php
require_once 'greeting_lang.php';
echo language\ko\welcome();
echo language\en\welcome();
?>