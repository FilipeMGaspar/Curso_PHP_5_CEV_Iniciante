let cxVal = document.querySelector('input#cxVal')
let selNumadd = document.querySelector('select#selNumadd')
let vetvalores = []

document.onload = iniciar()   

function iniciar(){
    cxVal.focus()
    cxVal.value = ''
}

function adicionar(){
    if(cxVal.value.length==0){
        alert ('!![ERRO]!! Não foi informado nenhum número!')
        iniciar()
    }else{
       colocaNaLista(Number(cxVal.value))
    }
}

function colocaNaLista(valor){
    let intemOption = document.createElement('option')
    
    if (estaNaLista(valor, vetvalores)){
        intemOption.value = valor
        intemOption.text = valor
        selNumadd.appendChild(intemOption)
        vetvalores.push(valor)
        iniciar()
    }else{
        alert (`!![ERRO]!! O Número ${valor} já se encontara na lista!`)
        iniciar()
    }
}

function estaNaLista(num, listadevalores){
    if(listadevalores.indexOf(num)==-1){
        return true
    }else{
        return false
    }
}
