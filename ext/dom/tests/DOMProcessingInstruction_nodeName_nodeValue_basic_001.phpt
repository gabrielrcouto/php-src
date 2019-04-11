--TEST--
DOMProcessingInstruction read $nodeName and $nodeValue properties.
--CREDITS--
Gabriel Couto <gabrielrcouto@gmail.com>
User Group: PHPSP
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
$domProcessingInstruction = new DOMProcessingInstruction('textarea', 'text value');
echo $domProcessingInstruction->nodeName . PHP_EOL;
echo $domProcessingInstruction->nodeValue;
?>
--EXPECT--
textarea
text value