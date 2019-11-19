$(document).ready(function(){
	$("#no_telepon").keyup(function(){
		$.ajax({
			type : "POST",
			url : "http://localhost/srie-project/pengelola_c/getDataMember",
			data :{
				keyword : $("#no_telepon").val()
			},
			dataType:"json",
			success: function(data){
				if(data.length > 0){
					$('#DropdownMember').empty();
					$('#no_telepon').attr("data-toggle","dropdown");
					$('#DropdownMember').dropdown('toggle');
				}else if(data.length == 0 ){
					$('#no_telepon').attr("data-toggle","");
				}
				$.each(data,function(key,value){
					if(data.length >= 0)
						$('#DropdownMember').append('
							<li role="displayMember"><a role="menuitem dropdownmemberli" class="dropdownlivalue">'
							+ value['no_telepon'] + '</a></li>');
						});
					}
				});
			});
		$('ul.txtmember').on('click','li a', function(){
		$('#no_telepon').val($(this).text());
	});
});