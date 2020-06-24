let cxVal = document.querySelector('input#cxVal')
let selNumadd = document.querySelector('select#selNumadd')

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
    intemOption.value = valor
    intemOption.text = valor
    selNumadd.appendChild(intemOption)
}

