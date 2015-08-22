<?php
/**
 * Created by PhpStorm.
 * User: iStam
 * Date: 19/08/15
 * Time: 12:22 AM
 */
session_start();
session_unset('datosLogin');
session_unset('rol');
session_destroy();
header('location: ../../index.php');