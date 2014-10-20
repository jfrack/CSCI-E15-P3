<?php
	$generator = new Badcow\LoremIpsum\Generator();
	// TODO: alias Lorem not working
	//$generator = new Lorem\Generator();
	$paragraphs = $generator->getParagraphs($parCnt);
	echo implode('<p><p>', $paragraphs);
?>