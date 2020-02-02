$(function() {
	alert('hola');
	$('#select-tipoproducto').on('change', onSelectTipoChange);
});

function onSelectTipoChange(){
	var tipoproducto_id = $(this).val();
	alert(tipoproducto_id);
	$.get('/api/tipo/'+tipoproducto_id+'/productos', function(data){
		var html_select = '<option value ="">Seleccionar producto</option>'
		for (var i=0; i<data.length; ++1)
			html_select += '<option value ="'+data[i].id+'">'+data[i].name+'</option>'
		
		$('#select-producto').html(html_select);
	});
}

