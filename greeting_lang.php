<?php
namespace language\en;
function welcome(){
    return 'Hello world';
}
namespace language\ko;
function welcome(){
    return '안녕세계';
}

require_once 'greeting_lang.php';
echo language\ko\welcome();
echo language\en\welcome();

#add comment
?>