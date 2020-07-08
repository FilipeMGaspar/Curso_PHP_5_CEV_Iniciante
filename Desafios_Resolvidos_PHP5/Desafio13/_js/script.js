let CxNr = document.querySelector('input#CxNr')
let CxSelNr = document.querySelector('select#CxSelNr')
let nrElementos = []

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
    
    let itenOption = document.createElement('option')
    itenOption.text = `${num}`
    CxSelNr.appendChild(itenOption)
    nrElementos.push(num)

    if (nrElementos.length == 4){
        alert('Estou no IF   ////')
        btnAdiciona.display = 'none'
    }
    alert(nrElementos.length)
}