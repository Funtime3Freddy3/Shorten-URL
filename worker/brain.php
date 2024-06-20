<?php
require_once('config.php');
$url = addslashes($_GET['url']);
$sql = mysqli_query($db, "SELECT * FROM links WHERE name = '$url'");
$row = mysqli_fetch_array($sql);
$link_name = $row['name'];
$link_redirect = $row['url'];
if($url != NULL) {
    if($url == $link_name) {
        header("Location: $link_redirect");
    } elseif($url == 'admin') {
        header("Location: $fallback_admin");
    } elseif($url != $link_name) {
        header("Location: $fallback");
    }
} elseif($url == NULL) {
    header("Location: $fallback");
}