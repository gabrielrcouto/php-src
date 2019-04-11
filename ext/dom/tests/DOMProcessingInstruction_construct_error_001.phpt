--TEST--
DOMProcessingInstruction __construct() with no arguments.
--CREDITS--
Gabriel Couto <gabrielrcouto@gmail.com>
User Group: PHPSP
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
try {
    $domProcessingInstruction = new DOMProcessingInstruction();
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
?>
--EXPECT--
DOMProcessingInstruction::__construct() expects at least 1 parameter, 0 given
