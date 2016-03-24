</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript">
    	$("#jenis").change(function(){
			var jenis = $("#jenis").val();
			if (jenis === 'Mobil'){
				var harga = 140000000;
				var pajak = (10/100) * harga;
				var total = harga + pajak;
				$("#harga").val(harga);
				$("#pajak").val(pajak);
				$("#total").val(total);
			}else if (jenis === 'Motor'){
				var harga = 12000000;
				var pajak = (10/100) * harga;
				var total = harga + pajak;
				$("#harga").val(harga);
				$("#pajak").val(pajak);
				$("#total").val(total);
			}else{
				$("#harga").val('0');
				$("#pajak").val('0');
				$("#total").val('0');
			}

		});
</script>
  </body>
</html>
