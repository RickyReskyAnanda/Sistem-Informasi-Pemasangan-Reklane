
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
							<div class="col-md-12 col-sm-12">
								<h1>KANTOR PELAYANAN TERPADU</h1>
							</div>
						</div>
						</div>
						
					</div>
				</section>
			
				<section class="call-to-action call-to-action-quaternary mb-xl" style="margin-top: -40px;">
				<div class="container">
				<div class="row">

				<div class="col-md-12">
								
							<div class="col-md-4" style="margin: 40px auto;">
									</i><?php if($this->session->flashdata('pesanlog')!=''){ ?>
								<div class="alert alert-danger alert-dismisible">
										
												<?php echo $this->session->flashdata('pesanlog');?>
								</div>
										<?php }?>
							</div>
							

					
							<form action="<?=base_url('user/login/masuk')?>" method="POST" class="pull-right"  style="margin: 20px auto;">
								<div class="row">
									<div class="form-group ">
										<div class="col-md-5 ">
											<label>Email</label>
											<input type="email" placeholder="Email" maxlength="100" class="form-control input-lg" name="email"  required>
										</div>
										<div class="col-md-5">
											<label>Password</label>
											<input type="password" placeholder="Password" maxlength="100" class="form-control input-lg" name="katakunci" required>
										</div>
										<div class="col-md-2" style="margin: 25px auto;">
											<button type="submit" class="btn btn-primary mr-xs mb-sm btn-lg">Masuk</button>
										</div>
									</div>
								</div>
							</form>	

					</div>			
				</div>
				</div>
				</section>
			
					<div class="row">
						
						
						<section class="call-to-action call-to-action-quaternary mb-xl">
						<div class="col-lg-12">
						<div class="row"> 
							<div class="col-md-7">
								
							<div class="home-concept">
	
							<span class="sun"></span>
							<span class="cloud"></span>
							<div class="col-md-2 col-md-offset-1">
								<div class="process-image appear-animation" data-appear-animation="bounceIn">
									<img src="<?php echo base_url('assets/img/5.jpg')?>" alt="" />
									<strong>Strategy</strong>
								</div>
							</div>
							<div class="col-md-2">
								<div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="200">
									<img src="<?php echo base_url('assets/img/5.jpg')?>" alt="" />
									<strong>Planning</strong>
								</div>
							</div>
							<div class="col-md-2">
								<div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="400">
									<img src="<?php echo base_url('assets/img/5.jpg')?>" alt="" />
									<strong>Build</strong>
								</div>
							</div>
							
							<div class="col-md-4 col-md-offset-1">
								<div class="project-image">
									<div id="fcSlideshow" class="fc-slideshow">
										<ul class="fc-slides">
											<li><img class="img-responsive" src="<?php echo base_url('assets/img/4.jpg')?>" alt="" /></a></li>
											<li><img class="img-responsive" src="<?php echo base_url('assets/img/3.jpg')?>" alt="" /></a></li>
											<li><img class="img-responsive" src="<?php echo base_url('assets/img/2.jpg')?>" alt="" /></a></li>
										</ul>
									</div>
									<strong class="our-work">Our Work</strong>
								</div>
							</div>
							
					</div>	
				</div>
						
							<div class="col-md-5 " >		
							<div class="featured-box  align-left mt-xlg"  style="margin: 20px auto;">
							<div class="box-content">
							
									<div class="col-md-12 col-sm-12 center">
										<h2><strong>Daftar Sebagai User</strong></h2>
									</div>
								<div class="panel-body">
									<form class="form-horizontal form-bordered" method="post" action="<?=base_url('registrasi/tahap1')?>" name="mendaftar" >
										<div class="form-group">
											<label class="col-md-3 control-label" for="inputHelpText">Nama Lengkap</label>
											<div class="col-md-9">
												<div class="input-group input-group-icon">
													<span class="input-group-addon">
														<span class="icon"><i class="fa fa-key"></i></span>
													</span>
													<input type="text" class="form-control" name="nama">
												</div>
												
												
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="inputRounded">Email</label>
											<div class="col-md-9">
												<div class="input-group input-group-icon">
													<span class="input-group-addon">
														<span class="icon"><i class="fa fa-envelope"></i></span>
													</span>
													<input type="Email" class="form-control" name="email">
												</div>
												<?php if($this->session->flashdata('emailconf')<>''){ ?>
									            <span class="help-block"><?=$this->session->flashdata('emailconf');?></span>
									            <?php } ?>
											</div>
										</div>
					
										<div class="form-group">
											<label class="col-md-3 control-label" for="inputRounded">Password</label>
											<div class="col-md-9">
												<div class="input-group input-group-icon">
													<span class="input-group-addon">
														<span class="icon"><i class="fa fa-user"></i></span>
													</span>
													<input type="password" class="form-control input-rounded" name="password">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="inputRounded">Confirm Password</label>
											<div class="col-md-9">
												<div class="input-group input-group-icon">
													<span class="input-group-addon">
														<span class="icon"><i class="fa fa-user"></i></span>
													</span>
													<input type="password" class="form-control input-rounded" name="confirm">
												</div>
												<?php if($this->session->flashdata('passconf')<>''){ ?>
									            <span class="help-block"><?=$this->session->flashdata('passconf');?></span>
									            <?php } ?>
											</div>
										</div>
			
					
										

										
										<div class="form-group">
											<label class="col-md-3 control-label"></label>
											<div class="col-md-9 col-xs-12">
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
							</section>
						</div>
					</div>




						