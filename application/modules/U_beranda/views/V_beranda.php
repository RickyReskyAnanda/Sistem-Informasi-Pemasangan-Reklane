	<div class="container">
		<br>
		<div class="row">
			<div class="col-md-6">
				<h4>Pemberitahuan</h4>
				<?php for($i=0;$i<count($data);$i++){
					if($data[$i]['status_reklame']!=='menunggu'){?>

				<div class="toggle <?php if($data[$i]['status_reklame']=='diterima')echo'toggle-primary';
										 elseif($data[$i]['status_reklame']=='ditolak')echo'toggle-secondary';
										 elseif($data[$i]['status_reklame']=='belum-lengkap')echo'toggle-quaternary';?>" data-plugin-toggle="">
					<section class="toggle <?php if($i==0)echo 'active';?>">
						<label><?=ucfirst($data[$i]['status_reklame'])." : ".$data[$i]['nama_reklame']?></label>
						<div class="toggle-content" <?php if($i==0)echo 'style="display: block;"';?> >
							<p><?=$data[$i]['isi_pemberitahuan']?><a href="<?=base_url().'user/beranda/pemberitahuan/'.$data[$i]['id_pemberitahuan']?>"> Lebih Lengkapnya</a>.<?php if($data[$i]['is_read']==1){?><small style="color: #ccc"> Dibaca</small><?php } ?></p>
						</div>
					</section>
				</div>
				<?php }} ?>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="featured-box featured-box-tertiary featured-box-effect-1" >
					<div class="box-content">
						<i class="icon-featured fa fa-trophy"></i>
						<h4 class="text-uppercase">01</h4>
						<p>Pengajuan</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="featured-box featured-box-quaternary featured-box-effect-1" >
					<div class="box-content">
						<i class="icon-featured fa fa-user"></i>
						<h4 class="text-uppercase"><?=$this->session->userdata('nama');?></h4>
						<p><?=$this->session->userdata('email')?></p>
					</div>
				</div>
			</div>
		</div>
	</div>					