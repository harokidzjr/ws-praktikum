<div class="row">
	<div class="col-4">
		<a href="<?= site_url(array("produk", "register")) ?>" class="btn btn-primary">
			Buat Baru
		</a>
	</div>
</div>
<p></p>
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header separator">
				<h4>Data Produk</h4>
			</div>
			<div class="card-body">
				<table class="table">
					<thead>
					<tr>
						<th>#</th>
						<th>Nama Produk</th>
						<th>Harga Produk</th>
						<th>Stock Produk</th>
						<th>Gambar Produk</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					foreach ($products as $product) {
						?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $product->nama_produk ?></td>
							<td><?= $product->harga_produk ?></td>
							<td><?= $product->stock_produk ?></td>
							<td>
								<img width="70"
									 src="<?= $product->image_url ?>"
									 onerror="this.onerror=null;this.src='<?= base_url()."images/no-image.png" ?>';"
									 alt="<?= $product->nama_produk ?>">
							</td>
							<td>
								<a href="<?= site_url(array("produk","update", $product->id_produk)) ?>"
								   class="btn btn-xs btn-warning">
									<i class="fa fa-edit"></i>
								</a>
								<a href="<?= site_url(array("produk","delete", $product->id_produk)) ?>"
								   class="btn btn-xs btn-danger">
									<i class="fa fa-trash"></i>
								</a>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
			<div class="card-footer">

			</div>
		</div>
	</div>
</div>
