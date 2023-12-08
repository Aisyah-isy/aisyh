<div id="done">
	<?= $this->session->flashdata('alert'); ?>
</div>

<div class="card">
	<div class="card-header">
		<div class="card-head-row card-tools-still-right">
			<h2 class="card-title fw-b">Saran-</h4>
		</div>
	</div>

	<div class="card-body">
		<div class="row">
			<div class="card-body table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nama</th>
							<th scope="col">Email</th>
							<th scope="col">Saran</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<form action="<?= base_url('admin/saran/hapus_all/') ?>" method="post">
							<?php $no = 1;
							foreach ($saranN as $aa) { ?>
								<tr>
									<td><?= $no; ?></td>
									<td><?= $aa['nama'] ?></td>
									<td><?= $aa['email'] ?></td>
									<td><?= $aa['isi_saran'] ?></td>
									<td>
										<a class="btn btn-sm btn-dark" onClick="return confirm('Yakin pengen hapus?')" href="<?= base_url('admin/saran/hapus/' . $aa['id_saran']) ?>">
											<i class="fas fa-trash-alt"></i>
										</a>
										<input type="checkbox" name="ids[]" value="<?= $aa['id_saran'] ?>">
									</td>
								</tr>
							<?php $no++;
							} ?>
							<button class="btn btn-primary" type="submit">Hapus Saran</button>
						</form>
					</tbody>

				</table>
			</div>
		</div>
	</div>
</div>