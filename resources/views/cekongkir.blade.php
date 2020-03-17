<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	crossorigin="anonymous"></script>

	<title>Cek Ongkir - Rajaongkir</title>
</head>
<body>
	<script type="text/javascript">
		$(document).ready(function(){	
			$.ajax({
				url : "/getprovince",
				type : "GET",
				dataType : "JSON",
				success : function(data){
					var provopt;
					$.each(data.rajaongkir.results, function(i,el){
						console.log(el.province_id)
						provopt += `<option name="`+el.province+`"value="`+el.province_id+`">`+el.province+`</option>`;
					});
					$('.prov-asal').html(provopt);
				}
			})
		});
		$(document).ready(function(){	
			$('.prov-asal').on('change',function(){
				// alert($(this).val());
				var prov_id = $(this).val();
				$.ajax({
					url : "/getcity/"+prov_id,
					type : "get",
					dataType: "json",
					success : function(data){
						var cityopt;
						$.each(data.rajaongkir.results,function(i,el){
							cityopt += `<option value="`+el.city_id+`" name="`+el.city_name+`">`+el.type+` `+el.city_name+`</option>`;
						});
						$(".kota-asal").html(cityopt);
					}
				})
			})
		});
	</script>
	<div class="wrapper" style="background-color: 255, 255, 255;">
		<div class="container">
			<h1 style="text-align: center; margin-bottom: 50px;" class="h1">Cek Ongkir - Rajaongkir</h1>
			<div class="row">
				<div class="col-md-6">						
					<div class="form-area shadow-lg p-3 mb-5" style="background-color: #48d97f; width: 550px;height: 530px; border-radius:10px; ">
						<h5 style="text-align: center;">Masukan Data</h5>
						<form style="margin-top: 20px;">	
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label ">Provinsi Asal</label>
								<div class="col-sm-9">
									<select class="form-control prov-asal" name="prov-asal">
										<option>--- Pilih Provinsi Asal ---</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Kota Asal</label>
								<div class="col-sm-9">
									<select class="form-control kota-asal" name="kota-asal">
										<option>--- Pilih Kota Asal ---</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Provinsi Tujuan</label>
								<div class="col-sm-9">
									<select class="form-control">
										<option>--- Pilih Provinsi Tujuan ---</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Kota Tujuan</label>
								<div class="col-sm-9">
									<select class="form-control">
										<option>--- Pilih Kota Tujuan ---</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Berat barang</label>
								<div class="col-sm-9">
									<input class="form-control form-label" type="" name="" placeholder="gram">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Ekspedisi</label>
								<div class="col-sm-9">
									<select class="form-control">
										<option>--- Pilih Ekspedisi ---</option>
										<option>Default select</option>
										<option>Default select</option>
									</select>
								</div>
							</div>
							<button type="submit" class="btn btn-light col-md-12">Cek Ongkir</button>
							<div class="form-group row">
							</div>

						</form>
					</div>
				</div>
				<div class="col-md-6">
					<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm" style="margin-bottom: 20px;">
						<h5 style="text-align: center;">Hasil Pengecekan</h5>
					</nav>
					<table class="table table-hover table-light shadow-sm">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Dari</th>
								<th scope="col">Ke</th>
								<th scope="col">Berat</th>
								<th scope="col">Ekspedisi</th>
								<th scope="col">Biaya</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>mdo</td>
								<td>mdo</td>
								<td>mdo</td>
								<td>mdo</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

		</div>	
	</div>



<!-- 
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>