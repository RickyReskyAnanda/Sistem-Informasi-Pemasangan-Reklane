<div id="page-content-wrapper">
    <div id="page-content">
        <div class="container">
                    


<div id="page-title">
    <h2>Tambah User</h2>
    
<div class="panel">
    <div class="panel-body">
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" method="post" action="<?=base_url('admin/user/insert/data')?>">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">E-mail</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" name="email" placeholder="E-mail">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Gender</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="jk" required>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="laki-laki">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-6">
                        <textarea name="alamat" class="form-control" required placeholder="Alamat"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">No. Telpon</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="no_hp" placeholder="Nomor Telpon">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Pekerjaan</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9 pull-right">
                        <button class="btn btn-info" type="submit">Tambah</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
        
