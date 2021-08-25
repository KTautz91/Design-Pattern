<?php
include 'Researcher.php';
include 'Penguin.php';

$penguin = new Penguin();

$peter = (new Researcher())->initResearcher($penguin, 'Peter');
$anton = (new Researcher())->initResearcher($penguin, 'Anton');

$penguin->setAction('sleeping');
$penguin->setAction('eating');
$penguin->setAction('looking angry at the researcher');