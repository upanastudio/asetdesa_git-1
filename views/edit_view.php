<?php if (isset($model)): ?>

		<div id="edit_tanah" class="modal modal-styled fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form enctype="multipart/form-data" action="'.$aksi_tanah.'edit" method="POST" class="form-horizontal">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title">Edit Data: Tanah</h3>
						</div>
						<div class="modal-body">
							<i>Isi</i>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
							<button type="button" class="btn btn-primary">Update Data</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<div id="edit_peralatan" class="modal modal-styled fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form enctype="multipart/form-data" action="'.$aksi_peralatan.'edit" method="POST" class="form-horizontal">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title">Edit Data: Peralatan dan Mesin</h3>
						</div>
						<div class="modal-body">
							<i>Isi</i>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
							<button type="button" class="btn btn-primary">Update Data</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<div id="edit_gedung" class="modal modal-styled fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form enctype="multipart/form-data" action="'.$aksi_gedung.'edit" method="POST" class="form-horizontal">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title">Edit Data: Gedung dan Bangunan</h3>
						</div>
						<div class="modal-body">
							<i>Isi</i>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
							<button type="button" class="btn btn-primary">Update Data</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<div id="edit_jalan" class="modal modal-styled fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form enctype="multipart/form-data" action="'.$aksi_jalan.'edit" method="POST" class="form-horizontal">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title">Edit Data: Jalan, Irigasi, dan Jaringan</h3>
						</div>
						<div class="modal-body">
							<i>Isi</i>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
							<button type="button" class="btn btn-primary">Update Data</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<div id="edit_asetlain" class="modal modal-styled fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form enctype="multipart/form-data" action="'.$aksi_asetlain.'edit" method="POST" class="form-horizontal">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title">Edit Data: Aset Tetap Lainnya</h3>
						</div>
						<div class="modal-body">
							<i>Isi</i>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
							<button type="button" class="btn btn-primary">Update Data</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<div id="edit_konstruksi" class="modal modal-styled fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form enctype="multipart/form-data" action="'.$aksi_konstruksi.'edit" method="POST" class="form-horizontal">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title">Edit Data: Konstruksi dalam Pengerjaan</h3>
						</div>
						<div class="modal-body">
							<i>Isi</i>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
							<button type="button" class="btn btn-primary">Update Data</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

<?php endif; ?>
