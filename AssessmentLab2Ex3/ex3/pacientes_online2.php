<?php
$xmldata = simplexml_load_file("pacientes2.xml") or die ("Failed to load");
foreach ($xmldata->cd as $item){
    if(2023 -(int) $item->Ano_De_Nascimento < 18){
        echo "Identificação: ";
        echo $item["id"];
        echo "<br>";
        echo "Sexo: ";
        echo $item["sexo"];
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
    
}
?>