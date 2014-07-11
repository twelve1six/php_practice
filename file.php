#copy file

<?php
$file = 'readme.txt';
$newfile = 'example.txt.bak';

if (!copy($file, $newfile)) {
	echo "failed to copy $file...\n";
}

?>

#delete file

<?php
unlink('deleteme.txt');
?>

#get string from the file

<?php
$file = './readme.txt';
echo file_get_contents($file);
?>

#put string to the file

<?php 
$file = './writeme.txt';
file_put_contents($file, 'coding everybody');
?>

#get string from the file on network

<?php 
$homepage = file_get_contents('http://php.net/manual/en/function.file-get-contents.php');
echo $homepage;
?>

#check the file is readable or not

<?php
$filename = 'readme.txt';
if(is_readable($filename)) {
	echo 'The file is readable';
} else {
	echo 'The file is not readable';
}
?>

#check the file is writable or not

<?php 
$filename = 'writeme.txt';
if (is_writable($filename)) {
	echo 'The file is writable';
} else {
	echo 'The file is not writable';
}
?>

#check the file exists or not
$filename = 'readme.txt';
if(file_exists($filename)) {
	echo "The file $filename exists";
} else {
	echo "The file $filename is not exists";
}

?>


