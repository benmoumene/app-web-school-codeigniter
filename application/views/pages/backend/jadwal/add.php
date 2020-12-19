<div class="card">
	<div class="card-body">
		<form action="<?= base_url("admin/jadwal/create") ?>" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="">Pilih Kelas</label>
				<select name="kelas_id" id="" class="form-control select2" required>
					<option value="">Pilih</option>
					<?php foreach ($kelas as $value): ?>
						<option value="<?= $value->kelas_id ?>"><?= $value->kode_kelas ?>
							- <?= $value->nama_kelas ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<label for="">Pilih Mapel</label>
				<select name="mapel_id" id="" class="form-control select2" required>
					<option value="">Pilih</option>
					<?php foreach ($mapel as $value): ?>
						<option value="<?= $value->mapel_id ?>"><?= $value->kode_mapel ?>
							- <?= $value->nama_mapel ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<label for="">Pilih guru</label>
				<select name="guru_id" id="" class="form-control select2" required>
					<option value="">Pilih</option>
					<?php foreach ($guru as $value): ?>
						<option value="<?= $value->guru_id ?>"><?= $value->nama_guru ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<label for="">Pilih hari</label>
				<select name="hari" id="" class="form-control select2" required>
					<option value="">Pilih</option>
					<?php $hari = (object)array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"); ?>
					<?php foreach ($hari as $value): ?>
						<option value="<?= $value ?>"><?= $value ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="">Awal Jam Mapel</label>
						<div class="row">
							<div class="col-md-6">
								<select name="awalj" id="" class="form-control select2" required>
									<option value="">Jam</option>
									<?php for ($i = 5; $i < 18; $i++): ?>
										<option value="<?= $i < 10 ? "0" . $i : $i ?>">Jam <?= $i < 10 ? "0" . $i : $i ?></option>
									<?php endfor; ?>
								</select>
							</div>
							<div class="col-md-6">
								<select name="akhirm" id="" class="form-control select2" required>
									<option value="">Menit</option>
									<?php for ($i = 0; $i < 60; $i++): ?>
										<option value="<?= $i < 10 ? "0" . $i : $i ?>">Menit <?= $i < 10 ? "0" . $i : $i ?></option>
									<?php endfor; ?>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<label for="" class="text-danger">Akhir Jam Mapel</label>
						<div class="row">
							<div class="col-md-6">
								<select name="awalj2" id="" class="form-control select2" required>
									<option value="">Jam</option>
									<?php for ($i = 5; $i < 18; $i++): ?>
										<option value="<?= $i < 10 ? "0" . $i : $i ?>">Jam <?= $i < 10 ? "0" . $i : $i ?></option>
									<?php endfor; ?>
								</select>
							</div>
							<div class="col-md-6">
								<select name="akhirm2" id="" class="form-control select2" required>
									<option value="">Menit</option>
									<?php for ($i = 0; $i < 60; $i++): ?>
										<option value="<?= $i < 10 ? "0" . $i : $i ?>">Menit <?= $i < 10 ? "0" . $i : $i ?></option>
									<?php endfor; ?>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<button class="btn btn-danger" type="reset">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</form>
	</div>
</div>
