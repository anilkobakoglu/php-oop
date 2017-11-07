<?php
/**
 * Created by PhpStorm.
 * User: ANIL
 * Date: 25.8.2017
 * Time: 17:55
 */
try {
    $db = new PDO("mysql:host=localhost;dbname=okuldeneme", "root", "");
} catch ( PDOException $e ){
    print $e->getMessage();
}
