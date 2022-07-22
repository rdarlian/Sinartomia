<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php 
				$grand_total = 0;
				if($keranjang = $this->cart->contents())
				{
					foreach($keranjang as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];
					}
					echo "<h4>Total Belanja Anda : Rp. ".number_format($grand_total,0,',','.');
				 ?>
			</div><br><br>
			<h3>Input Alamat Pengiriman dan Pembayaran </h3>
			
			<form action="<?php echo base_url() .'dashboard/proses_pesanan'?>" method="post">
				<div class="from-group">
					<label for="">Nama Lengkap</label>
					<input type="text" name="nama" placeholder="Nama lengkap anda .." class="form-control" value="<?php echo $this->session->userdata('username') ?>" >
				</div>
				<div class="from-group">
					<label for="">Alamat Lengkap</label>
					<input type="text" name="alamat" placeholder="Alamat .." class="form-control">
				</div>
				<div class="from-group">
					<label for="">Telephon</label>
					<input type="text" name="no_telp" placeholder="Nomor Telephon anda .." class="form-control">
				</div>
				<!-- <div class="from-group">
					<label for="">Jasa Pengiriman</label>
					<select name="" id="" class="form-control">
						<option value="">JNE</option>
						<option value="">JNT</option>
						<option value="">Gojek</option>
						<option value="">Sicepat</option>
					</select>
				</div>
				<div class="from-group">
					<label for="">Pilih Bank</label>
					<select name="" id="" class="form-control">
						<option value="">BCA</option>
						<option value="">BNI</option>
						<option value="">BRI</option>
						<option value="">Mandiri</option>
					</select>
				</div> -->

				<button type="submit" class="btn btn-sm btn-primary mt-3">Pesan</button>
			</form>
			
			<?php  
			} else
			{
				echo "<h4>Keranjang Belanja Anda Masih Kosong !!!";
			}
				?>
		</div>

		

		<div class="col-md-2"></div>
	</div>
</div>
