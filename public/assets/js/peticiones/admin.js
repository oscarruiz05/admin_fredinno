function selectTipo(tipo){
    if(tipo == 'general'){
        $('.permisos').removeClass('d-none');
    }else{
        $('.permisos').addClass('d-none');
    }
}