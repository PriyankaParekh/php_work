<?php


$server = 'localhost';
$user = 'root';
$pwd = '';
$db = 'php-task';

$con = mysqli_connect($server, $user, $pwd, $db);

if ($con) {
?>
    <script>
        alert('connection successfull.');
    </script>
<?php
} else {
?>
    <script>
        alert('connection error.');
    </script>
<?php
}
?>