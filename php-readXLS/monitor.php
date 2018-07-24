<?php
class Monitor
{
    public function downloadMaterial()
    {
        print '
        <aside id="downloads">
            <h3><strong> Downloads de todo o material do curso </strong></h3>
            <ul>
                <li class="transition">
                    <a href="downloads/aulas-medio.rar"> <img src="images/thumbnails/tablete1.png" /> </a>
                </li>
                <li class="transition">
                    <a href="#"> <img src="images/thumbnails/tablete2.png" /> </a>
                </li>
                <li class="transition">
                    <a href="#"> <img src="images/thumbnails/tablete3.png" /> </a>
                </li>
                <li class="transition">
                    <a href="#"> <img src="images/thumbnails/tablete4.png" /> </a>
                </li>
            </ul>
        </aside>
        ';
    }
    
    public function materialMedio()
    {
        print '       
        <section id="cursos">
        
            <h4> <strong> Material do Curso Médio de Teologia </strong> </h4>
            <table id="medio">
                <tr id="head">
                    <th> Disciplina </th>
                    <th> Aulas </th>
                    <th> Gabarito do Exercício</th>
                    <th> Prova </th>
                    <th> Gabarito da Prova </th>
                </tr>
                ';
                $path = "galery/capas_medio/";
                $dir = dir($path);
                while($file=$dir->read()){
                    if($file != "." && $file != ".."){
                        if($file !== "." && $file !== ".."){
                            $extention = strchr($file,".");
                            $nameFile = substr($file, 0, -4);
                            $name = str_replace("-", " ", $nameFile);
                            if($extention == ".jpg"){
                                print '
                                <tr>
                                    <th> 
                                        <figure> <img src="'.$path.$file.'" /> </figure>
                                        <span> <a>'.$name.'</a> </span>
                                    </th>
                                    <td> 
                                        <a href="#" > 
                                            <figure> <img src="images/icons/power.png" /> </figure>
                                        </a>
                                        <ul>';
                                        $pathFile = "downloads/aulas/".$nameFile."/";                                        
                                        print '
                                            <li> <a href="'.$pathFile.'Unidade-I-'.$nameFile.'.ppsx"> Aula 1</a> </li>
                                            <li> <a href="'.$pathFile.'Unidade-II-'.$nameFile.'.ppsx"> Aula 2 </a> </li>
                                            <li> <a href="'.$pathFile.'Unidade-III-'.$nameFile.'.ppsx"> Aula 3 </a> </li>
                                            <li> <a href="'.$pathFile.'Unidade-IV-'.$nameFile.'.ppsx"> Aula 4 </a> </li>
                                        </ul>
                                    </td>
                                    <td> 
                                        <a href="#">
                                            <figure> <img src="images/icons/pdf.png" /> </figure>
                                        </a>
                                        <ul>';
                                            $linkFile = "downloads/aulas/".$nameFile."/Gabarito-Exercicio-".$nameFile.".pdf";                                        
                                            print '
                                            <li> <a href="'.$linkFile.'"> Exercício-'.$name.'</a> </li>
                                        </ul>
                                    </td>
                                    <td> 
                                        <a href="#">
                                            <figure> <img src="images/icons/pdf.png" /></figure>
                                        </a>
                                        <ul>';
                                            $linkFile = "downloads/aulas/".$nameFile."/Prova-".$nameFile.".pdf";                                        
                                            print '
                                            <li> <a href="'.$linkFile.'"> Prova '.$name.'</a> </li>
                                        </ul>
                                    </td>
                                    <td> 
                                        <a href="#">
                                            <figure> <img src="images/icons/pdf.png" /></figure>
                                        </a>
                                        <ul>';
                                            $linkFile = "downloads/aulas/".$nameFile."/Gabarito-Prova-".$nameFile.".pdf";                                        
                                            print '
                                            <li> <a href="'.$linkFile.'"> Gabarito '.$name.'</a> </li>
                                        </ul>
                                    </td>
                                </tr>
                                ';
                            }
                        }
                    }
                }
                    
            print '   
            </table>
        </section>
        ';
    }
    
    public function materialAvancado()
    {
        print '
        <section id="cursos">            
            <h4> <strong> Matrerial do Curso Avançado de Teologia </strong> </h4>
            <table id="avancado">
                <tr>
                    <th> Disciplina </th>
                    <th> Prova </th>
                    <th> Gabarito </th>
                </tr>
                <tr>
                    <th> Disciplina </th>
                    <td> Prova </td>
                    <td> Gabarito </td>
                </tr>
            </table>
        </section>
        ';
    }
    
    public function pedido()
    {
        print '
        <section id="material">
            <h3> <strong> Pedidos e Material de Divulgação </strong> </h3> 
            <aside id="pedidos">
            ';
            pedidos();
            print '                
            </aside>
            
            <aside id="divulgacao">
                <table>
                    <tr>
                        <th> Título </th>
                        <th> Cartaz / Banner / Flyer / Folder </th>
                    </tr>
                    <tr>
                        <th> Cartaz Curso Médio </th>
                        <td><a href="downloads/divulgacao/cartaz_curso_medio_impressao.pdf"> Download </a> </th>
                    </tr>
                    <tr>
                        <th> Cartaz Curso Avançado </th>
                        <td><a href="downloads/divulgacao/cartaz_curso_avancado_impressao.pdf"> Download </a> </th>
                    </tr>
                </table>
            </aside>
            
        </section>
            
        ';
    }
    
    public function alert()
    {
        print '
        <article id="alerta">
            <h2> 
            A tabela abaixo ainda está em Construção, caso não consiga utilizá-la ou ocorra erros, acesse o seguinte link 
            <a href="http://ibadsimposios.com.br/novosite/distanciaap/monitor.html" > <span> Clicando aqui </span> </a>
            </h2>
        </article>
        ';
    }
}

