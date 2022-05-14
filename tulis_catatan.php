<div class="card">
    <div class="card-header">
        <a href="user.php" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
    </div>
    <div class="card-body">
        <form action="simpan_catatan.php" method="post">
            <div class="form-group">
                <label>Tanggal</label>
                <input name="tanggal" type="date" required class=form-control placeholder="Pilih Tanggal">
            </div>
            <div class="form-group">
                <label>Waktu</label>
                <input name="jam" type="time" required class=form-control placeholder="Masukkan Waktu">
            </div>
            <div class="form-group">
                <label>Barang</label>
                <input name="Barang" type="text" required class=form-control placeholder="Masukkan Nama Barang">
            </div>
            <div class="form-group">
                <label>Jumlah</label>
                <input name="Jumlah" type="text" required class=form-control placeholder="Masukkan Jumlah">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input name="Harga" type="text" required class=form-control placeholder="Masukkan Harga Barang">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> SIMPAN</button>
            <button type="reset" class="btn btn-warning"><i class="fa fa-paint-brush"></i> CLEAR</button>
        </form>
    </div>
</div>