<div class="card-deck">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Input Soal</h5>
			<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

			<?php echo form_open('soal/next') ?>
				<div class="form-group row">
					<label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
					
					<div class="col-sm-4">
						<select name="divisi" id="divisi" class="form-control">
							<option selected>Choose...</option>
							<?php foreach ($divisi as $i): ?>
								<option value="<?php echo $i->id_job ?>"><?php echo $i->nm_job ?></option>
							<?php endforeach ?>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label for="tipe_soal" class="col-sm-2 col-form-label">Tipe Ujian</label>
					
					<div class="col-sm-4">
						<select name="tipe_soal" id="tipe_soal" class="form-control">
							<option selected>Choose...</option>
							<option value="Ujian Online">Ujian Online</option>
							<option value="Ujian Tatap Muka">Ujian Tatap Muka</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label for="nama_soal" class="col-sm-2 col-form-label">Nama Soal</label>
					
					<div class="col-sm-4">
						<input type="text" class="form-control" name="nama_soal" id="nama_soal">
						<small id="helpSoal" class="form-text text-muted">[ Akuntansi I, Akuntansi II ]</small>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">&nbsp;</label>
					
					<div class="col-sm-4">
						<button type="submit" name="submit" id="submit" class="btn btn-success" value="lanjut">Lanjut</button>
					</div>
				</div>
			<?php echo form_close() ?>
		</div>
	</div>
</div>