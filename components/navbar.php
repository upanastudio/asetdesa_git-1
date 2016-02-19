<?php if (isset($model)): ?>

		<div class="mainbar">
			<div class="container">
				<button type="button" class="btn mainbar-toggle" data-toggle="collapse" data-target=".mainbar-collapse">
					<i class="fa fa-bars"></i>
				</button>
				<div class="mainbar-collapse collapse">
					<ul class="nav navbar-nav mainbar-nav">
						<li class="<?php echo $model==''? 'active':''; ?>">
							<a href="<?php echo ROOT; ?>">
								<i class="fa fa-dashboard"></i>
								Rekapitulasi
							</a>
						</li>
						<li class="dropdown <?php echo $model=='input'? 'active':''; ?>">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
								<i class="fa fa-desktop"></i>
								Pengadaan dan Pendataan
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">   
								<li>
									<a href="<?php echo ROOT; ?>input?tab=tanah">
										<i class="fa fa-user nav-icon"></i>
										Tanah
									</a>
								</li>
								<li>
									<a href="<?php echo ROOT; ?>input?tab=peralatan">
										<i class="fa fa-bars nav-icon"></i>
										Peralatan dan Mesin
									</a>
								</li>
								<li>
									<a href="<?php echo ROOT; ?>input?tab=gedung">
										<i class="fa fa-asterisk nav-icon"></i>
										Gedung dan Bangunan
									</a>
								</li>
								<li>
									<a href="<?php echo ROOT; ?>input?tab=jalan">
										<i class="fa fa-tasks nav-icon"></i>
										Jalan, Irigasi, dan Jaringan
									</a>
								</li>
								<li>
									<a href="<?php echo ROOT; ?>input?tab=asetlain">
										<i class="fa fa-font nav-icon"></i>
										Aset Tetap Lainnya
									</a>
								</li>
								<li>
									<a href="<?php echo ROOT; ?>input?tab=konstruksi">
										<i class="fa fa-list-alt nav-icon"></i>
										Konstruksi dalam Pengerjaan
									</a>
								</li>
							</ul>
						</li>
						<li class="dropdown <?php echo $model=='inventaris' OR $model=='penyusutan' OR $model=='mutasi' OR $model=='neraca'? 'active':''; ?>">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
								<i class="fa fa-align-left"></i> 
								Laporan
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-header">Laporan</li>
								<li>
									<a href="<?php echo ROOT; ?>inventaris">
										<i class="fa fa-location-arrow nav-icon"></i> 
										Laporan Inventaris Barang
									</a>
								</li>
								<li>
									<a href="<?php echo ROOT; ?>penyusutan">
										<i class="fa fa-location-arrow nav-icon"></i> 
										Laporan Penyusutan Nilai
									</a>
								</li>
								<li>
									<a href="<?php echo ROOT; ?>mutasi">
										<i class="fa fa-location-arrow nav-icon"></i> 
										Mutasi Aset Desa
									</a>
								</li>
								<li class="divider"></li>
								<li class="dropdown-header">Neraca </li>
								<li>
									<a href="<?php echo ROOT; ?>neraca">
										<i class="fa fa-table"></i>
										&nbsp;&nbsp;Pertanggungjawaban
									</a>
								</li>
							</ul>
						</li>
						<li class="dropdown <?php echo $model=='kirim'? 'active':''; ?>">
							<a href="<?php echo ROOT; ?>kirim">
								<i class="fa fa-files-o"></i>
								Kirim Data
							</a>
						</li>
					</ul>
				</div> <!-- /.navbar-collapse -->
			</div> <!-- /.container -->
		</div> <!-- /.mainbar -->

<?php endif; ?>
