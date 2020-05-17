<?php
require_once 'app/HTML/Doctype.php';
use HTML\Doctype;

$doctype = new Doctype();
echo $doctype->get('XHTML 1.1');