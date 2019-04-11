--TEST--
DOMProcessingInstruction __construct() with invalid name.
--CREDITS--
Gabriel Couto <gabrielrcouto@gmail.com>
User Group: PHPSP
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
try {
    $domProcessingInstruction = new DOMProcessingInstruction('.invalidName');
} catch (DOMException $e) {
    echo $e->getMessage(), "\n";
}
?>
--EXPECT--
Invalid Character Error
