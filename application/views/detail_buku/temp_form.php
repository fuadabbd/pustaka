<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Temp <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="datetime">Tgl Booking <?php echo form_error('tgl_booking') ?></label>
            <input type="text" class="form-control" name="tgl_booking" id="tgl_booking" placeholder="Tgl Booking" value="<?php echo $tgl_booking; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id User <?php echo form_error('id_user') ?></label>
            <input type="text" class="form-control" name="id_user" id="id_user" placeholder="Id User" value="<?php echo $id_user; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Email User <?php echo form_error('email_user') ?></label>
            <input type="text" class="form-control" name="email_user" id="email_user" placeholder="Email User" value="<?php echo $email_user; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Buku <?php echo form_error('id_buku') ?></label>
            <input type="text" class="form-control" name="id_buku" id="id_buku" placeholder="Id Buku" value="<?php echo $id_buku; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Judul Buku <?php echo form_error('judul_buku') ?></label>
            <input type="text" class="form-control" name="judul_buku" id="judul_buku" placeholder="Judul Buku" value="<?php echo $judul_buku; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Image <?php echo form_error('image') ?></label>
            <input type="text" class="form-control" name="image" id="image" placeholder="Image" value="<?php echo $image; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Penulis <?php echo form_error('penulis') ?></label>
            <input type="text" class="form-control" name="penulis" id="penulis" placeholder="Penulis" value="<?php echo $penulis; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Penerbit <?php echo form_error('penerbit') ?></label>
            <input type="text" class="form-control" name="penerbit" id="penerbit" placeholder="Penerbit" value="<?php echo $penerbit; ?>" />
        </div>
	    <div class="form-group">
            <label for="year">Tahun Terbit <?php echo form_error('tahun_terbit') ?></label>
            <input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit" placeholder="Tahun Terbit" value="<?php echo $tahun_terbit; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('detail_buku') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>