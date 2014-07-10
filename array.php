<?php
	$member = array('egoing', 'k8805', 'sorialgi');
	echo $member[0].'<br />';
	echo $member[1].'<br />';
	echo $member[2].'<br />';
?>

#count(array), array_push, array_pop, array_shift, 
#array_unshift, array_splice, array_merge

<?php
$grades = array('egoing'=>10, 'k8805'=>6, 'sorialgi'=>80);
foreach($grades as $key => $value){
    echo "key: {$key} value:{$value}<br />";
}
?>