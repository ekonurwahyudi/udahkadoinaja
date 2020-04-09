<?php
error_reporting(0); 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<style>
			h2{
				margin-top:20px;
			}
			#view-ongkir{
				max-height:500px;
				overflow-x:hidden;
				overflow-y:auto;
				border:1px;
			}
		</style>
	</head>
	<body>
		<div class="container-fluid">
			<h2 align="center">Cek Resi</h2>
 
			<div class="row">
				
				<div class="col-md-12">
					<form method="post" action="">
						<div class="mb-3">
							<label for="api_basic">API Key RajaOngkir Basic</label>
							<input value="" type="text" id="api_basic" name="api_basic" class="form-control" placeholder="Masukkan API Key RajaOngkir.com Tipe Basic Milik Anda" required />
						</div>
						<div class="mb-3">
							<label for="courier">Kurir</label>
							<select class="custom-select d-block w-100" id="courier" name="courier" required>
<option value="jne">Jalur Nugraha Ekakurir (JNE)</option>
							</select>
						</div>
						
						<div class="mb-3">
							<label for="noresi">No Resi</label>
							<input value="SOCAG00183235715" type="text" id="noresi" name="noresi" class="form-control" placeholder="Masukkan No Resi" required />
						</div>
						
						<hr class="mb-4">
						<button class="btn btn-primary btn-lg btn-block" type="button" onClick="cekresi();">PROCESS</button>
					</form>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<hr class="mb-3">
					<div id="view-resi"></div>
				</div>
			</div>
		</div>
	
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script>
		function cekresi() {
			var courier = $("#courier").val();
			var noresi = $("#noresi").val();
			var api_basic = $("#api_basic").val();
			
			if (courier.length == 0) {
				alert("Silahkan pilih kurir");
			} else if (noresi.length == 0) {
				alert("Anda belum memasukkan no resi pengiriman");
			} else if (api_basic.length == 0) {
				alert("Anda belum memasukkan API Key RajaOngkir Basic");	
			} else {
				$("#view-resi").html('<div align="center"><img src="progress.gif" /></div>');
				$.ajax({
					url:"get_lacak.php",
					data:"noresi="+noresi+"&kurir="+courier+"&api_basic="+api_basic,
					cache:false,
					success:function(msg) {
						$("#view-resi").html(msg);
					}
				});
			}
		}
		</script>
	</body>
</html>