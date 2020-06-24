let cxVal = document.querySelector('input#cxVal')

document.onload = iniciar()   

function iniciar(){
    cxVal.focus()
    cxVal.value = ''
}

function adicionar(){
    if(cxVal.value.length==0){
        alert ('!![ERRO]!! Não foi informado nenhum número!')
    }
}

