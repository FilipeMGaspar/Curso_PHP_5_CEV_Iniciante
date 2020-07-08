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
    let nrElementos = 1

    while (nrElementos<=5){
        let itenOption = document.createElement('option')
        itenOption.text = `${num}`
        CxSelNr.appendChild(itenOption)
        nrElementos ++
    }
    

}