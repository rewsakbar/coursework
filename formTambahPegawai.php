<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $tittle ?></h1>
</div>


<div class="card" style="width: 60%; margin-bottom: 100px">
    <div class="card-body">

<form method="POST" action="<?php echo base_url('
admin/dataPegawai/tambahDataAksi') ?>" enctype="multiprt/form-data">

<div class="form-group">
    <label>NIK</label>
    <input type="number" name="nik" class="
    form-control">
    <?php echo form_error('nik','<div class="text-small 
    text-danger"></div>') ?>
</div>

<div class="form-group">
    <label>Nama Pegawai</label>
    <input type="text" name="nama_pegawai" class="
    form-control">
    <?php echo form_error('nama_pegawai','<div class="text-small 
    text-danger"></div>') ?>
</div>

<div class="form-group">
    <label>Jenis Kelamin</label>
    <select name="Jenis_Kelamin" class="
    form-control">
    <option value="">--Pilih Jenis Kelamin--</option>
    <option value="laki-laki">Laki-Laki</
    option>
    <option value="perempuan">perempuan</
    option>
</select>
<?php echo form_error('jenis_kelamin','<div class="text-small 
    text-danger"></div>') ?>
</div>

<div class="form-group">
    <label>Jabatan</label>
    <select name="jabatan" class="form-control">
    <option value="">--Pilih Jabatan--</option>
    <?php foreach($jabatan as $j) : ?>
    <option value="<?php echo $j->nama_jabatan ?>"><?php
         echo $j->nama_jabatan ?></option>
    <?php endforeach; ?>
</select>
<?php echo form_error('jabatan','<div class="text-small 
    text-danger"></div>') ?>
</div>

<div class="form-group">
    <label>Tanggal Masuk</label>
    <input type="date" name="tanggal_masuk" class="
    form-control">
    <?php echo form_error('tanggal_masuk','<div class="text-small 
    text-danger"></div>') ?>
</div>

<div class="form-group">
    <label>Status</label>
    <select name="status" class="form-control">
    <option>--Pilih Status--</option>
    <option value="Pegawai Tetap">Pegawai Tetap</
    option>
    <option value="Pegawai Tidak Tetap">Pegawai Tidak Tetap</
    option>
</select>
<?php echo form_error('status','<div class="text-small 
    text-danger"></div>') ?>
</div>

<div class="form-group">
    <label>Photo</label>
    <input type="file" name="photo" class="form-control">
</div>

<button type="submit" class="btn btn-primary">Simpan</button>



</form>

</div>
    </div>
