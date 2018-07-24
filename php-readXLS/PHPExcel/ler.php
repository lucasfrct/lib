<?php

$file = "example.xls";
require_once ("Classes/PHPExcel.php");
require_once ("Classes/PHPExcel/IOFactory.php");

$objPHPexcel = PHPExcel_IOFactory::load($file);
$objWorksheet = $objPHPexcel->setActiveSheetIndex(0);
$objWorksheet = $objPHPexcel->getActiveSheet(); 
for($i = 1; $i <=30; $i++){
    $objWorksheet->getCell('A'.$i.'')->setValue('nome'); 
    $objWorksheet->getCell('B'.$i.'')->setValue('cidade'); 
}
  
$objWriter = PHPExcel_IOFactory::createWriter($objPHPexcel,'Excel5'); 
$objWriter->save($file);



$objPHPexcel = PHPExcel_IOFactory::load($file);
$objWorksheet = $objPHPexcel->setActiveSheetIndex(0);
$objWorksheet = $objPHPexcel->getActiveSheet();

echo 'A1 = '.$objWorksheet->getCell('A1')->getValue()."<br>";
for($a = "A"; $a < "Z"; $a++){
    
    for($n = 1; $n <= 30; $n++){
        print $a.$n."=".$objWorksheet->getCell('A1')->getValue()."<br>";
    }
}

