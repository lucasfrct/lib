<?php

$file = "nucleos.xls";

require_once ("../XLS/PHPExcel/Classes/PHPExcel.php");
require_once ("../XLS/PHPExcel/Classes/PHPExcel/IOFactory.php");

$objPHPexcel = PHPExcel_IOFactory::load($file);
$objWorksheet = $objPHPexcel->setActiveSheetIndex(0);
$objWorksheet = $objPHPexcel->getActiveSheet();


for($a = "A"; $a < "B"; $a++){
    
    for($n = 1; $n <= 10; $n++){
        $value = $objWorksheet->getCell($a.$n)->getValue();
        $line = $a.$n;
        mkdir('../Nucleo/'.$value.'/', 0777, true);
        print $line."=".$value."<br>";
    }
}

