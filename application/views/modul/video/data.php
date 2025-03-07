   <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')?>">

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Master <?= $subjudul ?></h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" aria-expanded="false" ><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="box-body">
<?php if( $this->ion_auth->is_admin() || $this->ion_auth->in_group('dosen') ) : ?>       
	   <div class="mt-2 mb-4">
            <a href="<?= base_url('C_Modul/addvideo') ?>" class="btn btn-sm bg-purple btn-flat"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
		<?php endif; ?>
		<?php if($user->activation_code=='1' ){ ?>
				<!-- keterangan modul-->
				 <div class="callout callout-warning">
                        Video Materi Belajar akan diperbaharui setiap waktu, sesuai Tema Materi Ujian sesuai Kisi-kisi MenpanRB. Jadi pantau terus website CASN-Guru.com<br/>
						   <b>Terima kasih telah donasi.</b>
                        </div>
						
								<div class="table-responsive">
    <table id="example1" class="w-100 table table-striped table-bordered table-hover" width="100%">
        <thead>
            <tr>
                <th style="width: 1px;">No.</th>
                <th style="width: 5px;">Video</th>
                <th>Detail</th>
                <?php if( $this->ion_auth->is_admin() || $this->ion_auth->in_group('dosen') ) : ?>
                <th>Aksi</th>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach ($view_video as $vm) {
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td>
                    <div class="box-tools pull-right" style="width: 150px; height: 100px; overflow: hidden; margin: 10px;">
                        <a href="<?php echo $vm->url; ?>" target="_blank" title="Lihat Video">
                            <i class="fa fa-play" aria-hidden="true" style="font-size: 24px; color: #fff; position: absolute; top: 50%; left: 50%; transform: translate(-100%, -50%);"></i>
                            <img src="../uploads/youtube/<?php echo $vm->foto; ?>" style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;"/>
                        </a>
                    </div>
                </td>
                <td>
                    <a href="<?php echo $vm->url; ?>"><i class="fa fa-youtube" aria-hidden="true"></i>&nbsp;<?php echo $vm->tema; ?></a><br/>
                    <small><?php echo $vm->judul_video; ?><br/>
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>&nbsp;<?php echo $vm->channel_youtube; ?></small>
                </td>
                <?php if( $this->ion_auth->is_admin() || $this->ion_auth->in_group('dosen') ) : ?>
                <td style="width: 5px;">
                    <a href="<?= base_url('C_Modul/del_video/'.$vm->id_video) ?>" class="btn btn-danger btn-md"><i class="fa fa-trash"></i></a>
                </td>
                <?php endif; ?>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
                    <?php }elseif($user->activation_code=='2' ){ ?>
				<!-- keterangan modul-->
				 <div class="callout callout-warning">
                        Video Materi Belajar akan diperbaharui setiap waktu, sesuai Tema Materi Ujian sesuai Kisi-kisi MenpanRB. Jadi pantau terus website CASN-Guru.com<br/>
						   <b>Terima kasih telah donasi.</b>
                        </div>
						
								<div class="table-responsive">
    <table id="example1" class="w-100 table table-striped table-bordered table-hover" width="100%">
        <thead>
            <tr>
                <th style="width: 1px;">No.</th>
                <th style="width: 5px;">Video</th>
                <th>Detail</th>
                <?php if( $this->ion_auth->is_admin() || $this->ion_auth->in_group('dosen') ) : ?>
                <th>Aksi</th>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach ($view_video as $vm) {
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td>
                    <div class="box-tools pull-right" style="width: 150px; height: 100px; overflow: hidden; margin: 10px;">
                        <a href="<?php echo $vm->url; ?>" target="_blank" title="Lihat Video">
                            <i class="fa fa-play" aria-hidden="true" style="font-size: 24px; color: #fff; position: absolute; top: 50%; left: 50%; transform: translate(-100%, -50%);"></i>
                            <img src="../uploads/youtube/<?php echo $vm->foto; ?>" style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;"/>
                        </a>
                    </div>
                </td>
                <td>
                    <a href="<?php echo $vm->url; ?>"><i class="fa fa-youtube" aria-hidden="true"></i>&nbsp;<?php echo $vm->tema; ?></a><br/>
                    <small><?php echo $vm->judul_video; ?><br/>
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>&nbsp;<?php echo $vm->channel_youtube; ?></small>
                </td>
                <?php if( $this->ion_auth->is_admin() || $this->ion_auth->in_group('dosen') ) : ?>
                <td style="width: 5px;">
                    <a href="<?= base_url('C_Modul/del_video/'.$vm->id_video) ?>" class="btn btn-danger btn-md"><i class="fa fa-trash"></i></a>
                </td>
                <?php endif; ?>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
                     <?php }elseif($user->activation_code=='3' ){ ?>
				<!-- keterangan modul-->
				 <div class="callout callout-warning">
                        Video Materi Belajar akan diperbaharui setiap waktu, sesuai Tema Materi Ujian sesuai Kisi-kisi MenpanRB. Jadi pantau terus website CASN-Guru.com<br/>
						   <b>Terima kasih telah donasi.</b>
                        </div>
						
								<div class="table-responsive">
    <table id="example1" class="w-100 table table-striped table-bordered table-hover" width="100%">
        <thead>
            <tr>
                <th style="width: 1px;">No.</th>
                <th style="width: 5px;">Video</th>
                <th>Detail</th>
                <?php if( $this->ion_auth->is_admin() || $this->ion_auth->in_group('dosen') ) : ?>
                <th>Aksi</th>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach ($view_video as $vm) {
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td>
                    <div class="box-tools pull-right" style="width: 150px; height: 100px; overflow: hidden; margin: 10px;">
                        <a href="<?php echo $vm->url; ?>" target="_blank" title="Lihat Video">
                            <i class="fa fa-play" aria-hidden="true" style="font-size: 24px; color: #fff; position: absolute; top: 50%; left: 50%; transform: translate(-100%, -50%);"></i>
                            <img src="../uploads/youtube/<?php echo $vm->foto; ?>" style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;"/>
                        </a>
                    </div>
                </td>
                <td>
                    <a href="<?php echo $vm->url; ?>"><i class="fa fa-youtube" aria-hidden="true"></i>&nbsp;<?php echo $vm->tema; ?></a><br/>
                    <small><?php echo $vm->judul_video; ?><br/>
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>&nbsp;<?php echo $vm->channel_youtube; ?></small>
                </td>
                <?php if( $this->ion_auth->is_admin() || $this->ion_auth->in_group('dosen') ) : ?>
                <td style="width: 5px;">
                    <a href="<?= base_url('C_Modul/del_video/'.$vm->id_video) ?>" class="btn btn-danger btn-md"><i class="fa fa-trash"></i></a>
                </td>
                <?php endif; ?>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
					<?php }else{ ?>
					<style>
	.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 20%;
   border: 2px solid;
}
	</style>
	 <div class="callout callout-warning">
                           Video Materi Belajar akan diperbaharui setiap waktu, sesuai Tema Materi Ujian sesuai Kisi-kisi MenpanRB. Jadi pantau terus website CASN-Guru.com<br/>
						   <b>Konsep Penyusunan Bank Soal CASN-Guru bersumber dari :</b><br/>
- FR Ujian CPNS SKB Guru kelas 2021<br/>
- FR Ujian PPPK Teknis Guru kelas 2022 & 2023<br/>
- Kisi-kisi permenpanRB<br/>
- Pengembangan materi/garis besar terkait Kisi-kisi dan FR
                        </div>
						
                        <?php if(($user->activation_selector=='1' && $user->activation_code=='0' && $user->remember_selector!='15' )){ ?>
<div class="callout callout-warning">
                           Silakan Donasi <del>Rp 100.000</del> <b>Rp 50.000</b>&nbsp;<span class="badge badge-danger">Alumni 2023</span>,untuk bisa mengakses Seluruh Sesi Ujian + Akses Modul eBook Materi + Fitur kedepannya.<br/>
						   <b>Donasi diperlukan guna Pengembangan Website CASN Guru lebih baik.</b>
                        </div>
						<img src="../assets/logo/qris_new.PNG" class="center"/>
						 <h4 align="center"><b>Rp 51.<?=substr($mhs->no_peserta,4,3)?></b></h4>
						<br/>
						 <div class="callout callout-danger">
                         Donasi dg Kode Unik [Nomor Peserta] => Rp. 50.000 + Nomor Peserta<br/>
						 == Nomor Peserta Anda adalah <?=$mhs->no_peserta?> ==<br/>
						 <b>Maka Donasi sebesar Rp. 51.<?=substr($mhs->no_peserta,4,3)?></b><br/>
						 Pembayaran via QRIS diatas, Otomatis Teraktivasi. <br/> 🌟🌟 Akun Berlaku Selama CASN 2024
                        </div>
						
  <div class="callout callout-warning">
                           Klik untuk Join di <b><a href="https://t.me/casn_gurusd"><i class="fa fa-telegram" aria-hidden="true"></i>&nbsp;Group Telegram CASN-Guru.com</a></b><br/>
						   Silakan Konfirmasi di grup jika sudah Donasi, namun belum Aktif dengan format :<br/>
						   DCP_NAMA_NOHP_KODEUNIK<br/><br/>
						   Contoh : DCP_Andini_081234567890_51<?=substr($mhs->no_peserta,4,3)?>
						   </br></br>
						   <b>Admin akan melakukan pengecekan terlebih dahulu</b>
                        </div>

						<?php }elseif(($user->activation_selector=='0' && $user->activation_code=='0' && $user->remember_selector!='15')){ ?>
<div class="callout callout-warning">
                           Silakan Donasi <b>Rp 35.000</b>&nbsp;<span class="badge badge-danger">Non-Alumni 2023</span>, untuk bisa mengakses Seluruh Sesi Ujian + Akses Modul eBook Materi + Fitur kedepannya.<br/>
						   <b>Donasi diperlukan guna Pengembangan Website CASN Guru lebih baik.</b>
                        </div>
						<img src="../assets/logo/qris_new.PNG" class="center"/>
						 <h4 align="center"><b>Rp 35.<?=substr($mhs->no_peserta,4,3)?></b></h4>
						<br/>
						 <div class="callout callout-danger">
                         Donasi dg Kode Unik [Nomor Peserta] => Rp. 35.000 + Nomor Peserta<br/>
						 == Nomor Peserta Anda adalah <?=$mhs->no_peserta?> ==<br/>
						 <b>Maka Donasi sebesar Rp. 35.<?=substr($mhs->no_peserta,4,3)?></b><br/>
						 Pembayaran via QRIS diatas, Otomatis Teraktivasi. <br/> 🌟🌟 Akun Berlaku Selama CASN 2024
                        </div>
						
  <div class="callout callout-warning">
                           Klik untuk Join di <b><a href="https://t.me/casn_gurusd"><i class="fa fa-telegram" aria-hidden="true"></i>&nbsp;Group Telegram CASN-Guru.com</a></b><br/>
						   Silakan Konfirmasi di grup jika sudah Donasi, namun belum Aktif dengan format :<br/>
						   DCP_NAMA_NOHP_KODEUNIK<br/><br/>
						   Contoh : DCP_Andini_081234567890_35<?=substr($mhs->no_peserta,4,3)?>
						   </br></br>
						   <b>Admin akan melakukan pengecekan terlebih dahulu</b>
                        </div>
                        <?php }elseif($user->remember_selector=='15' && $user->activation_code=='0'){ ?>
<div class="callout callout-warning">
                           Silakan Donasi <b>Rp 35.000</b>&nbsp;<span class="badge badge-success">Paket Fokus SKD CPNS</span>, untuk bisa mengakses Seluruh Sesi Ujian + Akses Modul eBook Materi + Fitur kedepannya.<br/>
						   <b>Donasi diperlukan guna Pengembangan Website CASN Guru lebih baik.</b>
                        </div>
						<img src="../assets/logo/qris_new.PNG" class="center"/>
						 <h4 align="center"><b>Rp 35.<?=substr($mhs->no_peserta,4,3)?></b></h4>
						<br/>
						 <div class="callout callout-danger">
                         Donasi dg Kode Unik [Nomor Peserta] => Rp. 35.000 + Nomor Peserta<br/>
						 == Nomor Peserta Anda adalah <?=$mhs->no_peserta?> ==<br/>
						 <b>Maka Donasi sebesar Rp. 35.<?=substr($mhs->no_peserta,4,3)?></b><br/>
						 Pembayaran via QRIS diatas, Otomatis Teraktivasi. <br/> 🌟🌟 Akun Berlaku Selama CASN 2024
                        </div>
						
  <div class="callout callout-warning">
                           Klik untuk Join di <b><a href="https://t.me/casn_gurusd"><i class="fa fa-telegram" aria-hidden="true"></i>&nbsp;Group Telegram CASN-Guru.com</a></b><br/>
						   Silakan Konfirmasi di grup jika sudah Donasi, namun belum Aktif dengan format :<br/>
						   DCP_NAMA_NOHP_KODEUNIK<br/><br/>
						   Contoh : DCP_Andini_081234567890_35<?=substr($mhs->no_peserta,4,3)?>
						   </br></br>
						   <b>Admin akan melakukan pengecekan terlebih dahulu</b>
                        </div>
							<?php } ?>	
					<?php } ?>
					
					
			
	
	       
    </div>
</div>

<!-- jQuery 3 -->
<script src="<?= base_url('assets/bower_components/jquery/dist/jquery.min.js')?>"></script>
<script src="<?= base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>