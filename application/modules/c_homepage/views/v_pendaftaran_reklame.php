<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="<?php echo base_url('c_homepage')?>">Home</a></li>
									<li><a href="<?php echo base_url('c_homepage/pelayanan_reklame')?>">Pelayanan Reklame</a></li>
									<li class="active">Pendaftaran Reklame</li>
								</ul>
							</div>
							<div class="row">
							<div class="col-md-12">
								<h1>KANTOR PELAYANAN TERPADU</h1>
							</div>
						</div>
						</div>
						
					</div>
				</section>

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<hr class="tall">
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<h4 class="mb-lg">Navigation</h4>

							<div class="row">
								<div class="col-md-4">
									<div class="tabs tabs-vertical tabs-left tabs-navigation">
										<ul class="nav nav-tabs col-sm-3">
											<li class="active">
												<a href="#tabsNavigation1" data-toggle="tab"><i class="fa fa-info"></i> Page Informasi</a>
											</li>
											<li>
												<a href="#tabsNavigation2" data-toggle="tab"><i class="fa fa-level-up"></i> Page Tahap 1</a>
											</li>
											<li>
												<a href="#tabsNavigation3" data-toggle="tab"><i class="fa fa-level-up"></i> Page Tahap 2</a>
											</li>
											
										</ul>
									</div>
								</div>
								<div class="col-md-8">
									<div class="tab-pane tab-pane-navigation" id="tabsNavigation1">
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
												<form class="form-horizontal form-bordered">
													<div class="form-group">
														<label class="col-md-4 control-label">Nama Pemohon</label>
														<div class="col-md-8">
															<input type="text" class="form-control" name="nama">
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-4 control-label">Pekerjaan</label>
														<div class="col-md-8">
															<input type="text" class="form-control" name="">
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-4 control-label">Alamat</label>
														<div class="col-md-8">
															<textarea class="form-control" rows="3"></textarea>
														</div>
														
													</div>
													<div class="pull-right">
														<button type="submit" class="btn btn-tertiary mr-xs mb-sm">Kirim</button>
														<button type="reset" class="btn btn-tertiary mr-xs mb-sm">Batal</button>
													</div>
												</form>
										</div>
									<div class="row">		
										<h5 class="mb-lg">Mengajukan Permohonan Izin Pemasangan Iklan Reklame Dalam Bentuk :
										</h5>
											<form class="form-horizontal">
												<div class="form-group">
													<label class="col-md-4 control-label">Jenis Reklame</label>
													<div class="col-md-8">
														<input type="text" class="form-control" name="">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-4 control-label">Merk/Isi Reklame</label>
													<div class="col-md-8">
														<textarea class="form-control" rows="3"></textarea>
													</div>													
												</div>
												<div class="form-group">
													<label class="col-md-4 control-label">Lokasi Reklame</label>
													<div class="col-md-8">
														<textarea class="form-control" rows="3"></textarea>
													</div>													
												</div>
												<div class="pull-right">
													<button type="submit" class="btn btn-tertiary mr-xs mb-sm">Kirim</button>
													<button type="reset" class="btn btn-tertiary mr-xs mb-sm">Batal</button>
												</div>
											</form>
										
									</div>
								</div>	
								<div class="tab-pane tab-pane-navigation  active" id="tabsNavigation3">
									<div class="row">	
										<form class="form-horizontal form-bordered">
											<div class="form-group">
												<label class="col-md-4 control-label">Foto KTP</label>
												<div class="col-md-8">
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<div class="input-append">
															<div class="uneditable-input">
																
																<span class="fileupload-preview"></span>
															</div>
																<span class="btn btn-default btn-file">
																	<input type="file" name="">
																</span>
														</div>
													</div>
												</div>
											</div>

											<div class="form-group">
												<label class="control-label col-md-4">Gambar Dena Lokasi</label>
												<div class="col-md-8">
													<div class="fileupload fileupload-new">
														<div class="input-append">
															<div class="uneditable-input">
																<span class="fileupload-preview"></span>
															</div>
																<span class="btn btn-default btn-file">
																	<input type="file" name="">
																</span>
														</div>
													</div>				
												</div>
											</div>		

											<div class="form-group">
												<label class="control-label col-md-4">Gambar Reklame</label>
												<div class="col-md-8">
													<div class="fileupload fileupload-new">
														<div class="input-append">
															<div class="uneditable-input">
																<span class="fileupload-preview"></span>
															</div>
																<span class="btn btn-default btn-file">
																	<input type="file" name="">
																</span>
														</div>
													</div>				
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-4 control-label"></label>
												<div class="col-md-8">
													<button type="submit" class="btn btn-tertiary mr-xs mb-sm">Kirim</button>
													<button type="reset" class="btn btn-tertiary mr-xs mb-sm">Batal</button>
												</div>		
										</form>
									</div>	
									</div>
									
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		
