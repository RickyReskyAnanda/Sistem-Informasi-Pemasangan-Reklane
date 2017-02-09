<div id="page-content-wrapper">
    <div id="page-content">
        <div class="container">
                    


<div id="page-title">
    <h2>Detail User</h2>
    
<div class="panel">
    <div class="panel-body">
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" >
                <div class="form-group">
                    <label class="col-sm-3 control-label">Foto : </label>
                    <div class="col-sm-6">
                        <img src="<?=base_url()."gambar/profil".$data['foto']?>" class="img-responsive" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Nama : </label>
                    <div class="col-sm-6">
                        <label class="control-label"><?=$data['nama']?></label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">E-mail : </label>
                    <div class="col-sm-6">
                        <label class="control-label"><?=$data['email']?></label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Gender : </label>
                    <div class="col-sm-6">
                        <label class="control-label"><?=$data['jk']?></label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat : </label>
                    <div class="col-sm-6">
                        <label class="control-label"><?=$data['alamat']?></label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">No. Telpon : </label>
                    <div class="col-sm-6">
                        <label class="control-label"><?=$data['no_hp']?></label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Pekerjaan : </label>
                    <div class="col-sm-6">
                        <label class="control-label"><?=$data['pekerjaan']?></label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Foto KTP : </label>
                    <div class="col-sm-6">
                        <img src="<?=base_url()."gambar/ktp".$data['foto_ktp']?>" class="img-responsive" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Lengkap : </label>
                    <div class="col-sm-6">
                        <label class="control-label"><?=$data['status']?></label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Blokir : </label>
                    <div class="col-sm-6">
                        <label class="control-label"><?=$data['blokir']?></label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
        
