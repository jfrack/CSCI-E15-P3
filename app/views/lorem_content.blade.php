<?php
	$generator = new Badcow\LoremIpsum\Generator();
	// TODO: alias Lorem not working
	//$generator = new Lorem\Generator();
	$paragraphs = $generator->getParagraphs($parCnt);
	// double <p><p> fixes spacing between first and second paragraphs
	echo implode('<p><p>', $paragraphs);
?>