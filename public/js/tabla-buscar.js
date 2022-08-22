$('.btn-mas').click(function(){
    $('.buscar-mas').toggle(200);
});

$('.btn-buscar').click(function(){
    let fecha_inicio = $('#inicio').val();
    let fecha_fin = $('#fin').val();
    let buscar_tabla = true;
    if(fecha_fin == ''){
        fecha_fin = fecha_inicio;
    }

    if (fecha_inicio != ''){
        if(fecha_inicio <= fecha_fin){         
            location.href = 'tabla.php?inicio='+fecha_inicio+'&fin='+fecha_fin+'&buscar_tabla='+buscar_tabla;
            
        }      
    }

    
});

$('.btn-cancel').click(function(){
    location.href = 'tabla.php';
    this.hide();
});