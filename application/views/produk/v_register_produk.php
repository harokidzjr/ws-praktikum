<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header separator">
				<h4>Register Produk</h4>
			</div>
			<div class="card-body">
				<form id="register-produk" action="">
					<div class="form-group">
						<label for="nama-produk">Nama Produk</label>
						<input type="text" class="form-control" id="nama-produk" name="nama-produk"/>
					</div>
					<div class="form-group">
						<label for="harga-produk">Harga Produk</label>
						<input type="number" class="form-control" id="harga-produk" name="harga-produk"/>
					</div>
					<div class="form-group">
						<label for="stock-produk">Stock Produk</label>
						<input type="text" class="form-control" id="stock-produk" name="stock-produk"/>
					</div>
					<div class="form-group">
						<label for="gambar-produk">Gambar Produk</label>
						<input type="file" class="form-control" id="gambar-produk" name="gambar-produk"/>
					</div>
				</form>
			</div>
			<div class="card-footer">
				<button type="button" id="btn-save" class="btn btn-primary">Simpan</button>
			</div>
		</div>
	</div>
</div>
<script>
    $(function () {
        $("#btn-save").click(function () {
            prosesUpload();
        });

        function prosesUpload() {
            var reader = new FileReader();
            var f = document.getElementById("gambar-produk").files;
            reader.onloadend = function () {
                var gambar = reader.result.toString().replace(/^data:(.*,)?/, '');
                swal.fire({
                    title: "Processing Data..",
                    text: "Data sedang berkelana",
                    imageUrl: '<?= base_url() ?>' + "images/loading.gif",
                    showConfirmButton: false,
                    allowOutsideClick: false
                });
                $.ajax({
                    type: "POST",
                    url: '<?= base_url() ?>' + 'produk/proses_simpan',
                    data: {
                        nama_produk: $("#nama-produk").val(),
                        harga_produk: $("#harga-produk").val(),
                        stock_produk: $("#stock-produk").val(),
                        gambar_produk: gambar
                    }, // serializes the form's elements.
                    success: function (data) {
                        if (data === "201") {
                            window.location.replace("<?=site_url("produk")?>");
                        } else {
                            Swal.fire("Input Data Salah", data, "error");
                        }// show response from the php script.
                    }
                });
            }
            reader.readAsDataURL(f[0]);
        }
    });
</script>
