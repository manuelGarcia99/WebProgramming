<?php
$xmldata = simplexml_load_file("pauta.xml") or die ("Failed to load");
foreach ($xmldata->cd as $item){
    echo "Nº de Aluno: ";
    echo $item->Student_No;
    echo "<br>";
    echo "Nome: ";
    echo $item->Name;
    echo "<br>";
    echo "Nota Frequência 1: ";
    echo $item->Exam_1;
    echo "<br>";
    echo "Nota Frequência 2: ";
    echo $item->Exam_2;
     echo "<br>";
     $notaFinal = ((float) $item->Exam_1 + (float) $item->Exam_2) /2;
    if($notaFinal < 10)
{
    echo "Aluno/a Reprovado/a";
}   
else{
    echo "Aluno/a Aprovado/a";
}
echo "<br>";
    echo "<hr>";
}
?>