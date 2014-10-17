<?php
	$generator = new Badcow\LoremIpsum\Generator();
	// TODO: alias Lorem not working
	//$generator = new Lorem\Generator();
	$paragraphs = $generator->getParagraphs(5);
	echo implode('<p>', $paragraphs);
?>