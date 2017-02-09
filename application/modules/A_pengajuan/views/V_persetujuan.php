<div id="page-content-wrapper">
    <div id="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-box">
                        <div class="content-box-wrapper">
                             <h4>Tabel Persetujuan - <?=$this->uri->segment(3)?></h4>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>No. Telepon</th>
                                        <th>Jenis</th>
                                        <th>Lokasi</th>
                                        <th>Isi</th>
                                        <th>Status</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php for($i=0;$i<count($data);$i++){ ?>
                                    <tr>
                                        <td><?=$i+1?></td>
                                        <td><?=$data[$i]['nama']?></td>
                                        <td><?=$data[$i]['no_hp']?></td>
                                        <td><?=$data[$i]['jenis']?></td>
                                        <td><?=$data[$i]['lokasi']?></td>
                                        <td><?=$data[$i]['isi']?></td>
                                        <td><?=$data[$i]['status_reklame']?></td>
                                        <td>
                                            <a href="<?=base_url().'admin/pengajuan/detail/'.$data[$i]['id_reklame']?>"><button class="btn btn-info">Detail</button></a>
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
        
