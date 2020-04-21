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
        <h2 style="margin-top:0px">Temp Read</h2>
        <table class="table">
	    <tr><td>Tgl Booking</td><td><?php echo $tgl_booking; ?></td></tr>
	    <tr><td>Id User</td><td><?php echo $id_user; ?></td></tr>
	    <tr><td>Email User</td><td><?php echo $email_user; ?></td></tr>
	    <tr><td>Id Buku</td><td><?php echo $id_buku; ?></td></tr>
	    <tr><td>Judul Buku</td><td><?php echo $judul_buku; ?></td></tr>
	    <tr><td>Image</td><td><?php echo $image; ?></td></tr>
	    <tr><td>Penulis</td><td><?php echo $penulis; ?></td></tr>
	    <tr><td>Penerbit</td><td><?php echo $penerbit; ?></td></tr>
	    <tr><td>Tahun Terbit</td><td><?php echo $tahun_terbit; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('detail_buku') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>