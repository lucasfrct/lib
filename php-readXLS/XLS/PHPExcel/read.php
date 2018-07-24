<?php

$file = "example.xls";


require_once ("Classes/PHPExcel.php");
require_once ("Classes/PHPExcel/IOFactory.php");

$objPHPexcel = PHPExcel_IOFactory::load($file);
$objWorksheet = $objPHPexcel->setActiveSheetIndex(0);
$objWorksheet = $objPHPexcel->getActiveSheet(); 
while( list( $field, $value ) = each( $_POST )) {
   $objWorksheet->getCell($field)->setValue($value); 
}
for($a = "A"; $a < "Z"; $a++){
    for($i = 1; $i <=30; $i++){
        $objWorksheet->getCell($a.$i)->setValue('nome'); 
    }
}
$objWriter = PHPExcel_IOFactory::createWriter($objPHPexcel,'Excel5'); 
$objWriter->save($file);


$objPHPexcel = PHPExcel_IOFactory::load($file);
$objWorksheet = $objPHPexcel->setActiveSheetIndex(0);
$objWorksheet = $objPHPexcel->getActiveSheet();
for($a = "A"; $a < "Z"; $a++){
    for($n = 1; $n <= 30; $n++){
        print $a.$n."=".$objWorksheet->getCell($a.$n)->getValue()."<br>";
    }
}

