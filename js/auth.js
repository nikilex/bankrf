$("#reg").click(function(){
	var name = $("#name").val();
	var sec_name = $("#sec_name").val();
	var pass = $("#pass").val();
	var phone = $("#phone").val();
	var nik = $("#nik").val();
	var reg = "yes";
	$.post("controller.php",
			{ name:name, sec_name:sec_name, pass:pass,phone:phone,nik:nik,reg:reg},
			function(res){
				
			});
})

$("#but_login").click(function(){
	var phone = $("#login_phone").val();
	var pass = $("#login_pass").val();
	var login = "yes";
	
	$.post("controller.php",
			{ pass:pass, phone:phone, login:login},
			function(res){
				location.href = 'http://kaz/';
			});
})