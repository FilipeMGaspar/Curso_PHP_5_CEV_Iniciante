let CxNr = document.querySelector('input#CxNr')
let CxSelNr = document.querySelector('select#CxSelNr')

document.onload = iniciar()

function iniciar(){
    CxNr.focus()
    CxNr.value = ''
}

function adicionar(){
    if(CxNr.value.length == 0){
        alert ('!!ERRO!! Nenhum número foi informado')
        iniciar()
    }else{
        adicionarNaLista(Number(CxNr.value))
    }
}

function adicionarNaLista(num){   
    let btnAdiciona = document.querySelector('input#btnAdiciona') 
    let nrElementos = []
    
    let itenOption = document.createElement('option')
    itenOption.text = `${num}`
    CxSelNr.appendChild(itenOption)
    nrElementos.push(num)
    alert (nrElementos.length)
    
    if (nrElementos.length == 4){
        btnAdiciona.display = 'none'
    }
}