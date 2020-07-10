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
    let btnMaiorMenor = document.querySelector('input#btnMaiorMenor')
    let formPHP = document.getElementById('formPHP')
 
    if (estaNaLista(num, nrElementos)){
        let itenOption = document.createElement('option')
        itenOption.text = `${num}`
        CxSelNr.appendChild(itenOption)
        nrElementos.push(num)
    
        let inptForm = document.createElement('input')
        inptForm.type = 'number'
        inptForm.name = `val${nrElementos.length}`
        inptForm.value = `${num}`
        inptForm.className = 'escondido'
        formPHP.appendChild(inptForm)
    }else{
        alert(`!![ERRO]!! O Número ${num} já se encontra na lista!`)
        iniciar()
    }

    if (nrElementos.length == 5){
        btnAdiciona.style.display = 'none'
        btnMaiorMenor.style.display ='block' 
    }
}

function estaNaLista(nr, lstElementos){
    nrElementos.indexOf
    if(lstElementos.indexOf(nr)==-1){
        return true
    }

}