$(document).ready(function(){

	setInterval(ambilPakan, 1000);	

	function ambilPakan(){
		$.ajax({
			url: 'api/getDataPakan.php',
			success: function(response){
				var test = $.parseJSON(response);

		//		console.log(test);
				var stock = test['stok'];
				var berat = test['berat'];


				var lampu = test['lampu'];
				var kipas = test['kipas'];


				$('#txtLampu').html(lampu);
				$('#txtKipas').html(kipas);

				$('#txtStock').html(stock);
				$('#txtBerat').html(berat);

				if(stock == 0 && berat == 0){
					$('#alert').html("<b><font color='red'>STOCK PAKAN HABIS, HARAP ISI</font></b>");
				}

			    var image = document.getElementById('myImage');
			    if (lampu == 1) {
			        image.src = "images/nyala.png";
			    } else {
			        image.src = "images/mati.png";
			    }

			    var image = document.getElementById('myFan');
			    if (kipas == 1) {
			        image.src = "images/fan-onn.gif";
			    } else {
			        image.src = "images/fann.png";
			    }


			},
		})	
	}

});