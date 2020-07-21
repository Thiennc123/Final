jQuery.validator.setDefaults({
  debug: false,
  success: "valid"
});
$(function(){
	var $regitration = $('#form_signup');
	if($regitration.length){
		$regitration.validate({
			rules:{
				firstName:{
					required: true,
					maxlength: 25,
					noSpace: true,
				},
				lastName:{
					required: true,
					maxlength: 25,
					noSpace: true,
				},
				email:{
					required: true,
					email: true,
				},
				exampleInputPassword1:{
					required: true,
					maxlength: 64,
					noSpace: true,
				},
				exampleInputPassword2:{
					required: true,
					maxlength: 64,
					noSpace: true,
					equalTo: '#exampleInputPassword1',
				}

			},

			messages:{
				firstName:{
					required: 'Vui long nhap ten!!',
				}
			}
		})
	}

	$('#exampleInputFirstName').focus();

	// check space
	$.validator.addMethod("noSpace", function(value, element){
		return value == '' || value.trim().length !=0;
	}, "khong chap nhan khoang trang");
})