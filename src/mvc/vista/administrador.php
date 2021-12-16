<?php
session_start();
if (empty($_SESSION['logged_in'])) {
    echo "viva el perico";
    exit;
}
