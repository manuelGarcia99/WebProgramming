function quote(param1)
{
    if(param1 === 'Meliodas')
    {
        return 'sate sate sate'
    }
    if(param1 === 'Naruto')
    {
        return 'datebbayo'
    }
    if(param1 === 'Senku')
    {
        return 'I am one million percent sure'
    }
    if(param1 === 'Tengen')
    {
        return 'In a flashy way!'
    }
    if(param1 === 'Sócrates')
    {
        return 'Só sei que nada sei'
    }
    if(param1 === 'Mark Manson')
    {
        return 'Sempre que alguem diz que é rico ou sucedido significa então que não o é mas sim que o almeja ser'
    }
    if(param1 === 'Sakura Haruno')
    {
        return 'Chaaa\n'
    }
    if(param1 === 'Nuno Alvares Cabral')
    {
        return 'Acudam que matam o mestre!'
    }
    else{
        return 'Não conheço'
    }
}

function poligono(param2)
{
    var gono = 'gono'
    var parte
    switch(param2)
    {
        case 3: return 'triangulo'; break;
        case 4: return 'quadrilátero'; break;
        case 5:   parte= 'penta';  return  parte.concat(gono);  break;
        case 6:   parte = 'hexa';  return parte.concat(gono); break;
        case 7:   parte = 'hepta';  return parte.concat(gono); break;
        case 8:   parte = 'octa';  return parte.concat(gono);break;
        case 9:   parte = 'enea';  return parte.concat(gono);break;
        case 10:  parte = 'deca';  return parte.concat(gono);break;
        default: return 'numero invalido';
    }
}

function calculoArea(raio)
{
    
    resultado = raio * raio * Math.PI;
    resultado *= 100.0;
    resultado = Math.floor (resultado);
    resultado /= 100.0;
    
    return resultado;
}


console.log(quote("Ze"))
console.log(poligono(3))
for(var x = 2 ; x<10; x++)
{
    if(x!=5)
    console.log(calculoArea(x));
}