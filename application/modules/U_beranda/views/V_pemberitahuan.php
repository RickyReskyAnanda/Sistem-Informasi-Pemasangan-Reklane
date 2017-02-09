	<div class="container">
		<section class="panel" style="margin-top: 50px;">
			<header class="panel-heading pull-right">
				<div class="row ">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="<?=base_url('user/beranda')?>">Beranda</a></li>
							<li class="active">Pemberitahuan</li>
						</ul>
					</div>
				</div>
			</header>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						<h4><?=ucfirst($data['status_reklame'])." : ".$data['nama_reklame']?></h4>
						<blockquote class="blockquote-primary">
							<p><?=$data['isi']?></p>
						</blockquote>
					</div>
				</div>
			</div>
		</section>
	</div>	