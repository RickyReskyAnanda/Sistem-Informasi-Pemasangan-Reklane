
<section class="call-to-action call-to-action-dark">
	<div class="container">
		<div class="featured-box   align-left mt-xlg"  style="margin: 20px auto;">
			<div class="box-content">	
					<div class="row">
						<div class="col-lg-12">
							
								<div class="col-md-12 col-sm-12 center">
										<h2><strong>Silahkan Lengkapi Berkas Anda</strong></h2>
										<hr class="tall">
								</div>
								<div class="panel-body">
									<form class="form-horizontal form-bordered" method="post" action="<?=base_url('user/beranda/profil/edit')?>" enctype="">
										<div class="form-group">
											<label class="col-md-3 control-label">Foto Profil</label>
											<div class="col-md-6">
												<img src="<?=base_url().'gambar/profil/default.png'?>" class="img-responsive">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Masukkan Foto Anda</label>
											<div class="col-md-6">
												<input type="file" class="form-control" name="foto">
												*input untuk mengganti
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Nama</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="nama" value="<?=$data['nama']?>" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Email</label>
											<div class="col-md-6">
												<input type="email" class="form-control" name="email" value="<?=$data['email']?>" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Password</label>
											<div class="col-md-6">
												<input type="password" class="form-control" name="pw">
												*input untuk mengganti
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Jenis Kelamin</label>
											<div class="col-md-6">
												<select  class="form-control" name="jk" required>
													<option value="laki-laki" <?php if($data['jk']=='laki-laki')echo "selected";?>>Laki-Laki</option>
													<option value="perempuan" <?php if($data['jk']=='perempuan')echo "selected";?>>Perempuan</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Alamat</label>
											<div class="col-md-6">
												
											<textarea class="form-control" rows="3" name="alamat" required><?=$data['alamat']?></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">No Telepon</label>
											<div class="col-md-6">
												<input type="tel" class="form-control" name="no_hp" value="<?=$data['no_hp']?>" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" >Pekerjaan</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="pekerjaan" value="<?=$data['pekerjaan']?>" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Foto KTP</label>
											<div class="col-md-6">
												<img src="<?=base_url().'gambar/ktp/default.png'?>" class="img-responsive">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Input Foto KTP</label>
											<div class="col-md-6">
												<input type="file" class="form-control" name="foto_ktp" >
												*input jika ingin mengganti
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label"></label>
											<div class="col-md-6">
												<button type="submit" class="btn btn-tertiary mr-xs mb-sm btn-lg"><i class="fa fa-send"></i> Kirim</button>
												<button type="reset" class="btn btn-tertiary mr-xs mb-sm btn-lg"><i class="fa fa-remove"></i> Batal</button>
											</div>
										</div>
									</form>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
</section>										

			
			