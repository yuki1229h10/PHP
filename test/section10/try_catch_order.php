<?php
require_once '../section9/DbManager.php';

try {
    $db = new PDO($dsn, $usr, $password);
} catch (Exception $e) {
    print "Exception:{$e->getMessage()}";
} catch (RuntimeException $e) {
    print "RuntimeException:{$e->getMessage()}";
} catch (PDOException $e) {
    print "PDOException:{$e->getMessage()}";
}
