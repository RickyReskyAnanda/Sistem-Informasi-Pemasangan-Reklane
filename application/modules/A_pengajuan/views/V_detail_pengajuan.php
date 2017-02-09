<div id="page-content-wrapper">
    <div id="page-content">
        <div class="container">
                    


<div id="page-title">
    <h2>Detail Reklame</h2>
    
<div class="panel">
    <div class="panel-body">
    <h3 class="title-hero">
            Data Pemohon
        </h3>
        <div class="example-box-wrapper">
            <div class="form-horizontal bordered-row" >
                <div class="form-group">
                    <label class="col-sm-3 control-label">Foto : </label>
                    <div class="col-sm-3">
                        <img src="<?=base_url()?>gambar/profil/<?=$data['foto']?>" class="img-responsive" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Nama : </label>
                    <div class="col-sm-6">
                        <label class="control-label"><?=$data['nama']?></label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Pekerjaan : </label>
                    <div class="col-sm-6">
                        <label class="control-label"><?=$data['pekerjaan']?></label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat : </label>
                    <div class="col-sm-6">
                        <label class="control-label"><?=$data['alamat']?></label>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label">Foto KTP : </label>
                    <div class="col-sm-6">
                        <img src="<?=base_url()?>gambar/ktp/<?=$data['foto_ktp']?>" class="img-responsive" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            Gambar Reklame
        </h3>
        <div class="example-box-wrapper">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="thumbnail-box">
                        <a class="thumb-link" href="#" title=""></a>
                        <div class="thumb-content">
                            <div class="center-vertical">
                                <div class="center-content">
                                    <h3 class="thumb-heading animated bounceIn">
                                        GAMBAR REKLAME
                                        <small>12 March 2015</small>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-overlay bg-primary"></div>
                        <img src="<?=base_url()?>gambar/reklame/<?=$data['gambar_reklame']?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            Gambar Lokasi
        </h3>
        <div class="example-box-wrapper">
            <div class="row">
                <?php for($i=0;$i<count($dena);$i++){ ?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="thumbnail-box">
                        <a class="thumb-link" href="#" title=""></a>
                        <div class="thumb-content">
                            <div class="center-vertical">
                                <div class="center-content">
                                    <i class="icon-helper icon-center animated swing font-white glyph-icon icon-linecons-location"></i>
                                </div>
                            </div>
                            <i class="icon-helper icon-bl animated zoomIn bg-black glyph-icon icon-plus"></i>
                        </div>
                        <div class="thumb-overlay bg-azure"></div>
                        <img src="<?=base_url()?>gambar/lokasi/<?=$dena[$i]['nama_gambar']?>" alt="">
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="panel">
    <div class="panel-body">
    <h3 class="title-hero">
        Form Konfirmasi
        </h3>
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" method="post" action="<?=base_url('admin/pengajuan/update/data')?>">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Informasi : </label>
                    <div class="col-sm-6">
                        <textarea class="form-control" name="informasi" required></textarea>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?=$data['id_reklame']?>">
                <div class="form-group">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <button class="btn btn-info" type="submit" value="belum-lengkap" name="btn" >Belum Lengkap</button>
                        <button class="btn btn-primary" type="submit" value="diterima" name="btn">Terima</button>
                        <button class="btn btn-danger" type="submit" value="ditolak" name="btn">Tolak</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



        </div>
    </div>
</div>
        
