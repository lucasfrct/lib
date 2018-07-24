<?php

$arquivo_xml = simplexml_load_file('config.xml');
//print count($arquivo_xml)."<br>";
$n =count($arquivo_xml);
$n = $n - 3;

for ( $j = $n; $j < count($arquivo_xml); $j++ ) {
    
	echo $arquivo_xml->obra[$j]->id.'<br>';
	echo $arquivo_xml->obra[$j]->data.'<br>';
	echo $arquivo_xml->obra[$j]->titulo.'<br>';
	echo $arquivo_xml->obra[$j]->descricao.'<br>';
    echo $arquivo_xml->obra[$j]->link.'<br>';
    echo $arquivo_xml->obra[$j]->imagem.'<br>';
	obrasAndamento($id,$data,$titulo,$descricao,$link,$imagem);
}
?>