let cxVal = document.querySelector('input#cxVal')

document.onload{
    cxVal.focus()

}

function adicionar(){
    if(cxVal.value.length==0){
        alert ('!![ERRO]!! Não foi informado nenhum número!')
    }
}

