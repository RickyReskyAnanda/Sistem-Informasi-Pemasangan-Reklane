<div id="page-content-wrapper">
    <div id="page-content">
        <div class="container">
                        <h4>Tabel <?=$this->uri->segment(3)?></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="content-box">
                        <div class="content-box-wrapper">
                        <?php if($this->uri->segment(3)=='admin'){?>
                        <a href="<?=base_url()?>admin/user/tambah/data"><button class="btn btn-danger">Tambah</button></a>
                        <?php } ?>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>E-mail</th>
                                        <th>Gender</th>
                                        <th>No Telpon</th>
                                        <th>Pekerjaan</th>
                                        <th>Status Data</th>
                                        <th>Blokir</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i=0; $i <count($data) ; $i++) { ?>
                                    <tr>
                                        <td><?=$i+1?></td>
                                        <td><img src="<?=base_url()."gambar/profil/".$data[$i]['foto']?>"></td>
                                        <td><?=$data[$i]['nama']?></td>
                                        <td><?=$data[$i]['email']?></td>
                                        <td><?=$data[$i]['jk']?></td>
                                        <td><?=$data[$i]['no_hp']?></td>
                                        <td><?=$data[$i]['pekerjaan']?></td>
                                        <td><?=$data[$i]['status']?></td>
                                        <td><?=$data[$i]['blokir']?></td>
                                        <td>
                                            <?php if($this->uri->segment(3)=='admin'){?>
                                            <a href="<?=base_url()?>admin/user/edit/<?=$data[$i]['id']?>"><button class="btn btn-primary">Edit</button></a>
                                            <?php }else{ ?>
                                            <a href="<?=base_url()?>admin/user/detail/<?=$data[$i]['id']?>"><button class="btn btn-info">Detail</button></a>
                                            <?php } ?>
                                            <a href="<?=base_url()?>admin/user/hapus/<?=$data[$i]['id']?>"><button class="btn btn-danger">Hapus</button></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        
