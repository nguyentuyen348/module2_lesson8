<?php
include "ArrayList.php";

$listInteger=new ArrayList();
$listInteger->add(4);
$listInteger->add(5);
$listInteger->add(6);

echo $listInteger->get(1);