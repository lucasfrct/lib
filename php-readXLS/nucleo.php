<?php
class Nucleo
{
    public function login()
    {
        $file = "app/monitor/Nucleo/nucleo.xls";
        if("POST" == $_SERVER['REQUEST_METHOD']){
            $nucleo = $_POST["nucleo"];
            $password = $_POST["password"];
            $objPHPexcel = PHPExcel_IOFactory::load($file);
            $objWorksheet = $objPHPexcel->setActiveSheetIndex(0);
            $objWorksheet = $objPHPexcel->getActiveSheet();
            for($n = 1; $n <=500; $n++){
                $A = $objWorksheet->getCell('A'.$n)->getValue();
                $B = $objWorksheet->getCell('B'.$n)->getValue();
                if(empty($A) && empty($B)){ break;}
                $line = 'A'.$n.': '.$A.' - B'.$n.': '.$B;
                print $line."<br>";
                if("N001" == $A && "0" == $B){
                    require_once("XLS/PHPExcel/Classes/PHPExcel.php");
                    require_once("XLS/PHPExcel/Classes/PHPExcel/IOFactory.php");
                    $xls = new XLS;
                    $xls->update();
                    break;
                }
            }
        }
        print '
        <section id="boletim" >
            <form method="post">
                <input name="nucleo" type="text" />
                <input name="password" type="password" />
                <button type="submit" > Entrar </button>
            </form>
        </section>
        ';
    }
}