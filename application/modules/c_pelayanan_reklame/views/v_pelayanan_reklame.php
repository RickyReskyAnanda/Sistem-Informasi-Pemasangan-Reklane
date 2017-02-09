<!-- <div role="main" class="main">
				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="<?php echo base_url('c_homepage')?>">Home</a></li>
									<li class="active">Pelayanan Reklame</li>
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
				<hr class="tall">

			<div class="container">
				<div class="row">
				<section class="call-to-action call-to-action-quaternary mb-xl">
				<div class="col-md-12">
								
								<div class="col-md-6" style="margin: 40px auto;">
								<div class="alert alert-danger alert-dismisible">
									<i class="fa fa-warning"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								</div>
								</div>
							

					
							<form id="contactForm" action="php/contact-form.php" method="POST" class="pull-right" style="margin: 20px auto;">
								<div class="row">
									<div class="form-group ">
										<div class="col-md-5 ">
											<label>Your name *</label>
											<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
										</div>
										<div class="col-md-5">
											<label>Your email address *</label>
											<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
										</div>
										<div class="col-md-2" style="margin: 25px auto;">
											<button class="btn btn-primary mr-xs mb-sm">Masuk</button>
										</div>
									</div>
								</div>
							</form>		
				</div>
				</section>
				</div>
			</div>	

	
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							
							<aside class="sidebar">

								<h4 class="heading-primary">Reklame </h4>
								<ul class="nav nav-list narrow">
									<li><a href="<?= base_url('c_pelayanan_reklame/pendaftaran_reklame')?>">Pendftaran Reklame</a></li>
									<li><a href="">Apa Lagi</a></li>		
									
								</ul>
								
							</aside>
						</div>	


									
								
						
						<div class="col-lg-8">
							<section class="section section-default" style="background-image: url('template/img/parallax-transparent.jpg')" >
								
									<div class="col-md-12 center">
										<h2><strong>Daftar Sebagai User</strong></h2>
									</div>
								
								<div class="panel-body">
									<form class="form-horizontal form-bordered" method="get">
										<div class="form-group">
											<label class="col-md-3 control-label" for="inputDefault">Nama Lengkap</label>
											<div class="col-md-9">
											<div class="input-group input-group-icon">
													<span class="input-group-addon">
														<span class="icon"><i class="fa fa-user"></i></span>
													</span>
													<input type="text" class="form-control">
												</div>
												
											</div>
										</div>
					
										
										<div class="form-group">
											<label class="col-md-3 control-label" for="inputHelpText">Username</label>
											<div class="col-md-9">
												<div class="input-group input-group-icon">
													<span class="input-group-addon">
														<span class="icon"><i class="fa fa-key"></i></span>
													</span>
													<input type="text" class="form-control">
												</div>
												<span class="help-block">Masukkan Username Untuk Login</span>
											</div>
										</div>
					
										<div class="form-group">
											<label class="col-md-3 control-label" for="inputRounded">Password</label>
											<div class="col-md-9">
												<div class="input-group input-group-icon">
													<span class="input-group-addon">
														<span class="icon"><i class="fa fa-user"></i></span>
													</span>
												<input type="text" class="form-control input-rounded">
												</div>
												<span class="help-block">Masukkan Password Untuk Login</span>
											</div>
										</div>
			
										<div class="form-group">
											<label class="col-md-3 control-label" for="inputRounded">Email</label>
											<div class="col-md-9">
												<div class="input-group input-group-icon">
													<span class="input-group-addon">
														<span class="icon"><i class="fa fa-envelope"></i></span>
													</span>
													<input type="Email" class="form-control">
												</div>
											</div>
										</div>
					
										<div class="form-group">
											<label class="col-md-3 control-label" for="inputRounded">Alamat</label>
											<div class="col-md-9">
												<textarea class="form-control" rows="3" cols="62px;"></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="inputRounded">Tanggal Lahir</label>
											<div class="col-md-9">
												<div class="input-group input-group-icon">
													<span class="input-group-addon">
														<span class="icon"><i class="fa fa-calendar"></i></span>
													</span>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="inputRounded">Asal Daerah</label>
											<div class="col-md-9">
												<div class="input-group input-group-icon">
													<span class="input-group-addon">
														<span class="icon"><i class="fa fa-location-arrow"></i></span>
													</span>
													<input type="text" class="form-control">
												</div>	
											</div>
										</div>	

										<div class="form-group">
											<label class="col-md-3 control-label">Jenis Kelamin</label>
											<div class="col-md-9">
												<div class="radio-custom radio-primary">
													<input type="radio" name="jk"> Laki-laki
													<input type="radio" name="jk"> Perempuan
												</div>
											</div>	
											
										</div>
					
										
										<div class="form-group">
											<label class="col-md-3 control-label">Masukkan Foto Anda</label>
											<div class="col-md-9">
												<div class="fileupload fileupload-new" data-provides="fileupload">
													<div class="input-append">
														<div class="uneditable-input">
															<i class="fa fa-file fileupload-exists"></i>
															<span class="fileupload-preview"></span>
														</div>
														<span class="btn btn-default btn-file">
															<!-- <span class="fileupload-exists">Change</span>
															<span class="fileupload-new">Select file</span> -->
															<!-- <input type="file" />
														</span>
														
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label"></label>
											<div class="col-md-9 col-xs-11">
												<button type="submit" class="btn btn-tertiary mr-xs mb-sm">Kirim</button>
												<button type="reset" class="btn btn-tertiary mr-xs mb-sm">Batal</button>
											</div>
										</div>

									</form>
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>

 -->

						 -->