

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<hr class="tall">
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">

			<div class="row">
				<div class="col-md-4">
					<div class="tabs tabs-vertical tabs-left tabs-navigation">
						<ul class="nav nav-tabs col-sm-3">
							<li class="active">
								<a href="#tabsNavigation1" data-toggle="tab"><i class="fa fa-info"></i> Informasi Pengajuan</a>
							</li>
							<li>
								<a href="#tabsNavigation2" data-toggle="tab"><i class="fa fa-level-up"></i> Registrasi</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-8">
					<div class="tab-pane tab-pane-navigation active" id="tabsNavigation1">
						<h4>Informasi Tahap Pendaftaran</h4>
						<ol>
							
								<li>Foto Copy KTP</li>
								<li>RAB</li>
								<li>Gambar Dena Lokasi</li>
								<li>Gambar Reklame yang Mau di Pasang</li>
							
						</ol>
					</div>
					<div class="tab-pane tab-pane-navigation " id="tabsNavigation2">
						<div class="row">
							<h4>Formulir</h4>
							<div class="form-group">
								<label class="col-md-4 control-label">Nama Pemohon</label>
								<div class="col-md-8">
									<input type="text" class="form-control"  value="<?=$pemohon['nama']?>" disabled required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Pekerjaan Pemohon</label>
								<div class="col-md-8">
									<input type="text" class="form-control" maxlength="100"  value="<?=$pemohon['pekerjaan']?>" disabled  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Alamat Pemohon</label>
								<div class="col-md-8">
									<textarea class="form-control" rows="3" disabled  required><?=$pemohon['alamat']?></textarea>
								</div>
								
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Foto KTP</label>
								<div class="col-md-8">
									<img src="<?=base_url()."gambar/ktp/".$pemohon['foto_ktp']?>" class="img-responsive">
								</div>
							</div>
						</div>
						<div class="row">		
							<h5 class="mb-lg">Mengajukan Permohonan Izin Pemasangan Iklan Reklame Dalam Bentuk :</h5>
							<form class="form-horizontal" method="post" action="<?=base_url('user/beranda/pengajuan/input/data')?>" enctype="multipart/form-data">
								<div class="form-group">
									<label class="col-md-4 control-label">Nama Reklame</label>
									<div class="col-md-8">
										<input type="text" class="form-control" name="nama_reklame" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Jenis Reklame</label>
									<div class="col-md-8">
										<input type="text" class="form-control" name="jenis" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Merk/Isi Reklame</label>
									<div class="col-md-8">
										<textarea class="form-control" rows="3" name="isi" required></textarea>
									</div>													
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Lokasi Reklame</label>
									<div class="col-md-8">
										<textarea class="form-control" rows="3" name="lokasi" required></textarea>
									</div>													
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4">Gambar Lokasi/Denah</label>
									<div class="col-md-8">
										<input type="file" name="denalokasi[]" class="form-control" multiple>
									</div>
								</div>		
								<div class="form-group">
									<label class="col-md-4 control-label">Keterangan</label>
									<div class="col-md-8">
										<textarea class="form-control" rows="3" name="keterangan" required></textarea>
									</div>													
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label"></label>
									<div class="col-md-8">
										<button type="submit" class="btn btn-tertiary mr-xs mb-sm">Kirim</button>
										<button type="reset" class="btn btn-tertiary mr-xs mb-sm">Batal</button>
									</div>		
								</div>
							</form>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>

</div>