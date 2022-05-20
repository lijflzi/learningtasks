<?php
$php = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
?>
<?DOCTYPE html>
<html>
    <ul class ="navigation">
        <li><a href = "index.php"> Home </a></li>
        <li><a href = "profile.php"> Creator Profile </a></li>
        <li><a href = "projects.php"> Projects </a></li>
        <li><a href = "mygallery.php"> Gallery </a></li>
    </ul>
    