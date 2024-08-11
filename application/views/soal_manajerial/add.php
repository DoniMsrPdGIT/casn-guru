<div class="row">
    <div class="col-sm-12">    
        <?=form_open_multipart('soal_manajerial/save', array('id'=>'formsoal'), array('method'=>'add'));?>
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?=$subjudul?></h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="form-group col-sm-12">
                            <label>Pelatihan (Tema Pelatihan)</label>
                            <?php if( $this->ion_auth->is_admin() ) : ?>
                            <select name="dosen_id" required="required" id="dosen_id" class="select2 form-group" style="width:100% !important">
                                <option value="" disabled selected>Pilih Pelatihan</option>
                                <?php foreach ($dosen as $d) : ?>
                                    <option value="<?=$d->id_dosen?>:<?=$d->matkul_id?>"><?=$d->nama_dosen?> (<?=$d->nama_matkul?>)</option>
                                <?php endforeach; ?>
                            </select>
                            <small class="help-block" style="color: #dc3545"><?=form_error('dosen_id')?></small>
                            <?php else : ?>
                            <!--<input type="hidden" name="dosen_id" value="<?=$dosen->id_dosen;?>">-->
							<input type="hidden" name="dosen_id" value="9">
                            <input type="hidden" name="matkul_id" value="<?=$dosen->matkul_id;?>">
                            <input type="text" readonly="readonly" class="form-control" value="<?=$dosen->nama_dosen; ?> (<?=$dosen->nama_matkul; ?>)">
                            <?php endif; ?>
                        </div>
                        
                        <div class="col-sm-12">
                            <label for="soal" class="control-label">Soal</label>
                            <div class="form-group">
                                <input type="file" name="file_soal" class="form-control">
                                <small class="help-block" style="color: #dc3545"><?=form_error('file_soal')?></small>
                            </div>
                            <div class="form-group">
                                <textarea name="soal" id="soal" rows="4" class="form-control ckeditor"><?=set_value('soal')?></textarea>
                                <small class="help-block" style="color: #dc3545"><?=form_error('soal')?></small>
                            </div>
                        </div>
                        
                        <!-- 
                            Membuat perulangan A-E 
                        -->
                        <?php
                        $abjad = ['a', 'b', 'c', 'd']; 
                        foreach ($abjad as $abj) :
                            $ABJ = strtoupper($abj); // Abjad Kapital
                        ?>

                        <div class="col-sm-12">
                            <label for="file">Jawaban <?= $ABJ; ?></label>
                            <div class="form-group">
                                <input type="file" name="file_<?= $abj; ?>" class="form-control">
                                <small class="help-block" style="color: #dc3545"><?=form_error('file_'.$abj)?></small>
                            </div>
                            <div class="form-group">
                                <textarea name="jawaban_<?= $abj; ?>" id="jawaban_<?= $abj; ?>" class="form-control ckeditor"><?=set_value('jawaban_a')?></textarea>
                                <small class="help-block" style="color: #dc3545"><?=form_error('jawaban_'.$abj)?></small>
                            </div>
                        </div>

                        <?php endforeach; ?>

                        <div class="form-group col-sm-12">
                                <label for="jawaban" class="control-label">Opsi Jawaban Bobot Nilai Tertinggi</label>
                                <select required="required" name="jawaban" id="jawaban" class="form-control select2" style="width:100%!important">
                                    <option value="" disabled selected>Pilih Opsi Jawaban Bobot Nilai Tertinggi</option>
                                    <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                </select>                
                                <small class="help-block" style="color: #dc3545"><?=form_error('jawaban')?></small>
                            </div>
                            <div class="form-group col-sm-12">
                            <label for="bobot" class="control-label">Bobot Nilai</label>
                                <div class="row">
    <div class="col-md-3">
        <label for="option_a" class="control-label">A</label>
        <input required="required"  type="number" name="option_a" placeholder="Opsi A" id="option_a" class="form-control form-control-sm">
        <small class="help-block" style="color: #dc3545"><?=form_error('option_a')?></small>
    </div>
    <div class="col-md-3">
        <label for="option_b" class="control-label">B</label>
        <input required="required"  type="number" name="option_b" placeholder="Opsi B" id="option_b" class="form-control form-control-sm">
        <small class="help-block" style="color: #dc3545"><?=form_error('option_b')?></small>
    </div>
    <div class="col-md-3">
        <label for="option_c" class="control-label">C</label>
        <input required="required"  type="number" name="option_c" placeholder="Opsi C" id="option_c" class="form-control form-control-sm">
        <small class="help-block" style="color: #dc3545"><?=form_error('option_c')?></small>
    </div>
    <div class="col-md-3">
        <label for="option_d" class="control-label">D</label>
        <input required="required"  type="number" name="option_d" placeholder="Opsi D" id="option_d" class="form-control form-control-sm">
        <small class="help-block" style="color: #dc3545"><?=form_error('option_d')?></small>
    </div>
</div>
                            </div>
						<div class="form-group col-sm-12">
                            <label for="jawaban" class="control-label" >Pembahasan</label>
                                <textarea name="pembahasan" rows="20" class="form-control ckeditor"></textarea>
                                <small class="help-block" style="color: #dc3545"><?=form_error('jawaban')?></small>
                            </div>
                        <div class="form-group pull-right">
                            <a href="<?=base_url('soal')?>" class="btn btn-flat btn-default"><i class="fa fa-arrow-left"></i> Batal</a>
                            <button type="submit" id="submit" class="btn btn-flat bg-purple"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?=form_close();?>
    </div>
</div>
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<script>
    CKEDITOR.replace('soal'); // Replace 'soal' with the ID of your textarea
    <?php
                        $abjad = ['a', 'b', 'c', 'd']; 
                        foreach ($abjad as $abj) :
                            $ABJ = strtoupper($abj); // Abjad Kapital
                        ?>
    CKEDITOR.replace('jawaban_<?= $abj; ?>');
    <?php endforeach; ?>
    CKEDITOR.replace('pembahasan'); 
</script>