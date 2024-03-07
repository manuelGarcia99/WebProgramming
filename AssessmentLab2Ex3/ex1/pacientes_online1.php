<?php
$xmldata = simplexml_load_file("pacientes1.xml") or die ("Failed to load");
foreach ($xmldata->cd as $item){
    echo "Identificação: ";
    echo $item->Identification;
    echo "<br>";
    echo "Sexo: ";
    echo $item->Sexo;
    echo "<br>";
    echo "Nome: ";
    echo $item->Nome;
    echo "<br>";
    echo "Ano de Nascimento: ";
    echo $item->Ano_De_Nascimento;
    echo "<br>";
    echo "BI: ";
    echo $item->BI;
    echo "<br>";
    echo "Contribuinte: ";
    echo $item->Contribuinte;
    echo "<br>";
    echo "Sistema de Saúde: ";
    echo $item->Sistema;
    echo "<br>";
    echo "<hr>";
}
?>