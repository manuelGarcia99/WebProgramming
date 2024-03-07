function revelaIdades(){
    let participantesStr = prompt("Quantos Participantes vão haver?");
    let participantes = parseInt(participantesStr);
    let arrIdades = new Array(participantes);
    for(var x = 0 ;x< participantes;x++)
    {
        arrIdades[x] = parseInt(prompt("Qual a idade do "+ (x +1) +" º participante?"));
    }
    let strIdades = "";
    for(var x = 0 ; x<participantes;x++)
    {
        strIdades = strIdades + arrIdades[x].toString() + "\n";
    }
    if(confirm("Participantes: " +participantesStr +"\nIdades: " + strIdades))
    {
    let participantesDoc = "Nº de Participantes: ";
    participantesDoc += participantesStr;
    document.getElementById("participantes").textContent = participantesDoc;
    let media = 0.;
    let minima = arrIdades[0];
    let maxima = arrIdades[0];
    for(var x of arrIdades)
    {
        media += x;
        if(minima > x){
            minima = x ;
        }
        if(maxima < x){
            maxima = x;
        }
    }
    media /= participantes;
    media *= 100;
    media = Math.round(media);
    media/= 100;
    let mediaDoc = "Média de Idades: ";
    mediaDoc += media;
    document.getElementById("media").textContent = mediaDoc;
    let minimaDoc = "Idade Mínima: ";
    let maximaDoc = "Idade Máxima: ";
    minimaDoc += minima;
    maximaDoc += maxima;
    document.getElementById("minima").textContent = minimaDoc;
    document.getElementById("maxima").textContent = maximaDoc;
}
    
}

