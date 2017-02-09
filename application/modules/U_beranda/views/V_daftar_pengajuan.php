	<div class="container">
		<section class="panel" style="margin-top: 50px;">
			<header class="panel-heading pull-right">
				<div class="row ">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="#">Beranda</a></li>
						<li class="active">Shortcodes</li>
					</ul>
				</div>
			</div>
				
			</header>
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-6">
						<div class="mb-md">
							<a href="<?=base_url('user/beranda/pengajuan/')?>">
								<button id="addToTable" class="btn btn-primary">Pengajuan <i class="fa fa-plus"></i></button>
							</a>
						</div>
					</div>
				</div>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama Pemohon</th>
							<th>Pekerjaan Pemohon</th>
							<th>Jenis</th>
							<th>Isi/Merk</th>
							<th>Lokasi</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php for($i=0;$i<count($data);$i++){?>
						<tr >
							<td><?=$i+1?></td>
							<td><?=$data[$i]['nama']?></td>
							<td><?=$data[$i]['pekerjaan']?></td>
							<td><?=$data[$i]['jenis']?></td>
							<td><?=$data[$i]['isi']?></td>
							<td><?=$data[$i]['lokasi']?></td>
							<td><?=$data[$i]['status_reklame']?></td>
							<td class="actions">
								<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
								<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</section>
	</div>					