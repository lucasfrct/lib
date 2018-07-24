<?php
Class XLS
{
    public function update()
    {
        $dir = "app/monitor/Nucleo/";
        $file = $dir."MODELO.xls";
        $limitCollum = "Z";
        $limitLine = "24";
        $dirClass = "XLS/PHPExcel/";
        
        $objPHPexcel = PHPExcel_IOFactory::load($file);
        $objWorksheet = $objPHPexcel->setActiveSheetIndex(0);
        $objWorksheet = $objPHPexcel->getActiveSheet(); 
        
        while(list($field, $value) = each($_POST)){
           $objWorksheet->getCell($field)->setValue($value); 
        }
        
        print '
        <table>
        <form method="post">
            <tr>
                <th> </th>
                ';
                
                for($a = "A"; $a < $limitCollum; $a++){
                    print'
                    <td>'.$a.'</td>
                    ';
                }
                print '
            </tr>
            ';
            
            for($n = 1; $n <= $limitLine; $n++){
                print '
                <tr>
                    <th>'.$n.'</th>
                    ';
                    for($a = "A"; $a < $limitCollum; $a++){
                        $valueXls = $objWorksheet->getCell($a.$n)->getValue();
                        if("A" == $a || "1" == $n || !empty($valueXls)){
                            $readonly = 'readonly="readonly"';
                        } else {
                            $readonly = "";
                        }
                        print'
                        <td><input name="'.$a.$n.'" type="text" value="'.$valueXls.'" '.$readonly.' /></td>
                        ';
                    }
                print '
                </tr>
                ';
            }
            print '
            <fieldset>
                <button type="submit"> Atualizar </button>
            </fieldset>
        </form>
        </table>
        ';
          
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPexcel,'Excel5'); 
        $objWriter->save($file);
    }
}


