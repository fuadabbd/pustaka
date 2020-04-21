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
        <h2 style="margin-top:0px">Temp List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('detail_buku/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('detail_buku/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('detail_buku'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Tgl Booking</th>
		<th>Id User</th>
		<th>Email User</th>
		<th>Id Buku</th>
		<th>Judul Buku</th>
		<th>Image</th>
		<th>Penulis</th>
		<th>Penerbit</th>
		<th>Tahun Terbit</th>
		<th>Action</th>
            </tr><?php
            foreach ($detail_buku_data as $detail_buku)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $detail_buku->tgl_booking ?></td>
			<td><?php echo $detail_buku->id_user ?></td>
			<td><?php echo $detail_buku->email_user ?></td>
			<td><?php echo $detail_buku->id_buku ?></td>
			<td><?php echo $detail_buku->judul_buku ?></td>
			<td><?php echo $detail_buku->image ?></td>
			<td><?php echo $detail_buku->penulis ?></td>
			<td><?php echo $detail_buku->penerbit ?></td>
			<td><?php echo $detail_buku->tahun_terbit ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('detail_buku/read/'.$detail_buku->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('detail_buku/update/'.$detail_buku->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('detail_buku/delete/'.$detail_buku->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>