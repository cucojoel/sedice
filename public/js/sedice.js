(function() {

	$(".close-myModal").click(function (argument) {
		$( ".myModal" ).removeClass( "active" ).addClass("inactive");
		$("body").css({ overflow: 'inherit' })

	});

	$(".login").click(function (argument) {
		$( ".myLogin" ).removeClass( "inactive" ).addClass("active");
		$("body").css({ overflow: 'hidden' })

	});

	$(".register").click(function (argument) {
		$( ".myRegister" ).removeClass( "inactive" ).addClass("active");
		$("body").css({ overflow: 'hidden' })

	});











})();