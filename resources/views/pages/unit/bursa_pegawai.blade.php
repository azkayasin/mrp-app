@extends('layouts.master')

@section('title', 'Bursa Pegawai')

@section('leftbar')
	@include('includes.unit.leftbar')
@endsection

@section('content')
	<!-- page title -->
	<header id="page-header">
		<h1>Form Membursakan Pegawai</h1>
	</header>
	<!-- /page title -->

	<div id="content" class="padding-20" >
		<div class="row">
			<!-- formulir -->
			<div class="col-md-6 scrollable">
			
				<form class="validate" action="/mutasi/pengajuan/submit_form" method="post" enctype="multipart/form-data" data-success="Sent! Thank you!" data-toastr-position="top-right">
					<input type="hidden" name="action" value="contact_send" />
					
					<!-- data pegawai -->
					<div class="panel panel-default">
						<div class="panel-heading panel-heading-transparent">
							<strong>DATA PEGAWAI</strong>
						</div>

						<fieldset>
							<!-- required [php action request] -->
							<div class="panel-body">
								<div class="row">
									<div class="form-group">
										<div class="col-md-6 col-sm-6">
											<label>NIP *</label>
											<input type="text" name="nip" id="nip" value="" class="form-control required">
										</div>
										<div class="col-md-6 col-sm-6">
											<label>Nama Pegawai</label>
											<input type="text" id="nama_pegawai" value="" class="form-control required" disabled>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="form-group">
						                <div class="col-md-12 col-sm-12">
						                    <label>Personel Area</label>
											<input type="text" id="personnel_area" value="" class="form-control required" disabled>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12">
											<label>Formasi Jabatan</label>
											<input type="text" id="formasi_jabatan" value="" class="form-control required" disabled>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="form-group">
						                <div class="col-md-12 col-sm-12">
						                    <label>Pada</label>
											<input type="text" id="posisi" value="" class="form-control required" disabled>
										</div>
									</div>
								</div>


								<div class="row">
									<div class="form-group">
										<div class="col-md-6 col-sm-6">
											<label>Masa Kerja <small class="text-muted">(di Jabatan Terakhir)</small></label>
											<input type="text" id="masa_kerja" value="" class="form-control required" disabled>
										</div>
										<div class="col-md-6 col-sm-6">
											<label>Sisa Masa Kerja</label>
											<input type="text" id="sisa_kerja" value="" class="form-control required" disabled>
										</div>
									</div>
								</div>
							</div>
						</fieldset>
					</div>

					<!-- data pengusul -->
					<div class="panel panel-default">
						<div class="panel-heading panel-heading-transparent">
							<strong>DATA PENGUSUL MUTASI</strong>
						</div>

						<fieldset>
							<!-- required [php action request] -->
							<div class="panel-body">
								<div class="row">
									<div class="form-group">
										<div class="col-md-6 col-sm-6">
											<label>NIP Pengusul*</label>
											<input type="text" name="nip_pengusul" id="nip_pengusul" value="" class="form-control required">
										</div>
										<div class="col-md-6 col-sm-6">
											<label>Nama Pengusul</label>
											<input type="text" id="nama_pengusul" value="" class="form-control required" disabled>
										</div>
									</div>
								</div>

								{{-- <div class="row">
									<div class="form-group">
						                <div class="col-md-12 col-sm-12">
						                    <label>Direktorat</label>
											<input type="text" name="contact[last_name]" value="" class="form-control required" list="daftarnama">
											<datalist id="daftarnama">
						                        <option value="AB"></option>
					                        	<option value="AB"></option>
				                        		<option value="AC"></option>
			                        			<option value="AD"></option>
						                    </datalist>
										</div>
									</div>
								</div> --}}

								{{-- <div class="row">
									<div class="form-group">
						                <div class="col-md-12 col-sm-12">
						                    <label>Personel Area</label>
											<input type="text" name="" value="" class="form-control required" list="daftarnama">
											<datalist id="daftarnama">
						                        <option value="AB"></option>
					                        	<option value="AB"></option>
				                        		<option value="AC"></option>
			                        			<option value="AD"></option>
						                    </datalist>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="form-group">
						                <div class="col-md-12 col-sm-12">
						                    <label>Posisi Pada Unit</label>
											<input type="text" name="contact[last_name]" value="" class="form-control required" list="daftarnama">
											<datalist id="daftarnama">
						                        <option value="AB"></option>
					                        	<option value="AB"></option>
				                        		<option value="AC"></option>
			                        			<option value="AD"></option>
						                    </datalist>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12">
											<label>Formasi Jabatan</label>
											<input type="text" name="contact[last_name]" value="" class="form-control required" list="daftarnama">
											<datalist id="daftarnama">
						                        <option value="AB"></option>
					                        	<option value="AB"></option>
				                        		<option value="AC"></option>
			                        			<option value="AD"></option>
						                    </datalist>
										</div>
									</div>
								</div> --}}

								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12">
											<label>Alasan Memutasi *</label>
											<textarea rows="3" class="form-control" placeholder=""></textarea>
										</div>
									</div>
								</div>
							</div>
						</fieldset>
					</div>

					<!-- data mutasi -->
					<div class="panel panel-default">
						<div class="panel-heading panel-heading-transparent">
							<strong>DATA MUTASI</strong>
						</div>

						<fieldset>
							<div class="panel-body">
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12">
											<label>Jenis Mutasi *</label>
											<select name="jenis_mutasi" class="form-control required">
												<option>--- Pilih ---</option>
												<option value="Dinas">Dinas</option>
												<option value="APS">APS</option>
												<option value="Non-dinas">Non-dinas</option>
											</select>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12">
											<label>Rekomendasi Proyeksi Jabatan <small class="text-muted">- opsional</small></label>
											<select name="proyeksi_jabatan" class="form-control required">
												<option>--- Pilih ---</option>
												<option value="SDM">Pohon Profesi SDM</option>
												<option value="Developer">Web Developer</option>
												<option value="php">PHP Programmer</option>
												<option value="Javascript">Javascript Programmer</option>
											</select>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12">
											<label>No. Dokumen Mutasi *</label>
											<input type="text" name="no_dokumen_mutasi" value="" class="form-control required">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12">
											<label>Tanggal Dokumen Mutasi *</label>
											<input type="text" class="form-control datepicker" data-format="yyyy-mm-dd" data-lang="en" data-RTL="false">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>
												Lampiran Dokumen 
												<small class="text-muted">Curriculum Vitae dan Nota Dinas - *</small>
											</label>

											<div class="fancy-file-upload fancy-file-primary">
												<i class="fa fa-upload"></i>
												<input type="file" class="form-control" name="contact[attachment]" onchange="jQuery(this).next('input').val(this.value);" />
												<input type="text" class="form-control" placeholder="no file selected" readonly="" />
												<span class="button">Pilih Dokumen</span>
											</div>
											<small class="text-muted block">File Maksimal 10 MB (zip/rar)</small>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<button type="button" class="btn btn-3d btn-teal btn-xlg btn-block margin-top-30" id="next1">
											NEXT
										</button>
									</div>
								</div>
							</div>
						</fieldset>
					</div>

					<div class="panel panel-default" id="formp1">
						<div class="panel-heading panel-heading-transparent">
							<strong>KEY COMPETENCIES</strong>
						</div>
						<div class="panel-body">
							<fieldset>
								<div class="row">
									<div class="form-group">
										<div class="col-md-5 col-sm-5">
											<label>Enthusuastic For Challenge</label>
										</div>
										<div class="col-md-3 col-sm-3">
											<input type="number" name="kc1" value="" class="form-control required col-md-6" placeholder="Range 0-100">
										</div>
										<div class="col-md-4 col-sm-4">
											<div class="rating rating-0 size-13 width-100 "><!-- rating-0 ... rating-5 --></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-5 col-sm-5">
											<label>Creative and Innovative</label>
										</div>
										<div class="col-md-3 col-sm-3">
											<input type="number" name="kc2" value="" class="form-control required col-md-6" placeholder="Range 0-100">
										</div>
										<div class="col-md-4 col-sm-4">
											<div class="rating rating-0 size-13 width-100 "><!-- rating-0 ... rating-5 --></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-5 col-sm-5">
											<label>Building Business Partnership</label>
										</div>
										<div class="col-md-3 col-sm-3">
											<input type="number" name="kc3" value="" class="form-control required col-md-6" placeholder="Range 0-100">
										</div>
										<div class="col-md-4 col-sm-4">
											<div class="rating rating-0 size-13 width-100 "><!-- rating-0 ... rating-5 --></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-5 col-sm-5">
											<label>Strategic Orientation</label>
										</div>
										<div class="col-md-3 col-sm-3">
											<input type="number" name="kc4" value="" class="form-control required col-md-6" placeholder="Range 0-100">
										</div>
										<div class="col-md-4 col-sm-4">
											<div class="rating rating-0 size-13 width-100 "><!-- rating-0 ... rating-5 --></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-5 col-sm-5">
											<label>Customer Focus Oriented</label>
										</div>
										<div class="col-md-3 col-sm-3">
											<input type="number" name="kc5" value="" class="form-control required col-md-6" placeholder="Range 0-100">
										</div>
										<div class="col-md-4 col-sm-4">
											<div class="rating rating-0 size-13 width-100 "><!-- rating-0 ... rating-5 --></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-5 col-sm-5">
											<label>Driving Execution</label>
										</div>
										<div class="col-md-3 col-sm-3">
											<input type="number" name="kc6" value="" class="form-control required col-md-6" placeholder="Range 0-100">
										</div>
										<div class="col-md-4 col-sm-4">
											<div class="rating rating-0 size-13 width-100 "><!-- rating-0 ... rating-5 --></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-5 col-sm-5">
											<label>Visionary Leadership</label>
										</div>
										<div class="col-md-3 col-sm-3">
											<input type="number" name="kc7" value="" class="form-control required col-md-6" placeholder="Range 0-100">
										</div>
										<div class="col-md-4 col-sm-4">
											<div class="rating rating-0 size-13 width-100 "><!-- rating-0 ... rating-5 --></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-5 col-sm-5">
											<label>Empowering / Developing Others</label>
										</div>
										<div class="col-md-3 col-sm-3">
											<input type="number" name="kc1" value="" class="form-control required col-md-6" placeholder="Range 0-100">
										</div>
										<div class="col-md-4 col-sm-4">
											<div class="rating rating-0 size-13 width-100 "><!-- rating-0 ... rating-5 --></div>
										</div>
									</div>
								</div>
							</fieldset>
						</div>									
					</div>

					<div class="panel panel-default" id="formp2">
						<div class="panel-heading panel-heading-transparent">
							<strong>KOMPETENSI HARIAN</strong>
						</div>
						<div class="panel-body">
							<fieldset>
								<div class="row">
									<div class="form-group">
										<div class="col-md-5 col-sm-5">
											<label>Komunikasi</label>
										</div>
										<div class="col-md-3 col-sm-3">
											<input type="number" name="kh1" value="" class="form-control required col-md-6" placeholder="Range 0-100">
										</div>
										<div class="col-md-4 col-sm-4">
											<div class="rating rating-0 size-13 width-100 "><!-- rating-0 ... rating-5 --></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-5 col-sm-5">
											<label>Team Work</label>
										</div>
										<div class="col-md-3 col-sm-3">
											<input type="number" name="kh2" value="" class="form-control required col-md-6" placeholder="Range 0-100">
										</div>
										<div class="col-md-4 col-sm-4">
											<div class="rating rating-0 size-13 width-100 "><!-- rating-0 ... rating-5 --></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-5 col-sm-5">
											<label>kh_3</label>
										</div>
										<div class="col-md-3 col-sm-3">
											<input type="number" name="kh3" value="" class="form-control required col-md-6" placeholder="Range 0-100">
										</div>
										<div class="col-md-4 col-sm-4">
											<div class="rating rating-0 size-13 width-100 "><!-- rating-0 ... rating-5 --></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-5 col-sm-5">
											<label>kh_4</label>
										</div>
										<div class="col-md-3 col-sm-3">
											<input type="number" name="kh4" value="" class="form-control required col-md-6" placeholder="Range 0-100">
										</div>
										<div class="col-md-4 col-sm-4">
											<div class="rating rating-0 size-13 width-100 "><!-- rating-0 ... rating-5 --></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-5 col-sm-5">
											<label>kh_5</label>
										</div>
										<div class="col-md-3 col-sm-3">
											<input type="number" name="kh5" value="" class="form-control required col-md-6" placeholder="Range 0-100">
										</div>
										<div class="col-md-4 col-sm-4">
											<div class="rating rating-0 size-13 width-100 "><!-- rating-0 ... rating-5 --></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-5 col-sm-5">
											<label>Bahasa Indonesia</label>
										</div>
										<div class="col-md-3 col-sm-3">
											<input type="number" name="kh6" value="" class="form-control required col-md-6" placeholder="Range 0-100">
										</div>
										<div class="col-md-4 col-sm-4">
											<div class="rating rating-0 size-13 width-100 "><!-- rating-0 ... rating-5 --></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-5 col-sm-5">
											<label>Bahasa Inggris</label>
										</div>
										<div class="col-md-3 col-sm-3">
											<input type="number" name="kh7" value="" class="form-control required col-md-6" placeholder="Range 0-100">
										</div>
										<div class="col-md-4 col-sm-4">
											<div class="rating rating-0 size-13 width-100 "><!-- rating-0 ... rating-5 --></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-5 col-sm-5">
											<label>Bahasa Asing Lain</label>
										</div>
										<div class="col-md-3 col-sm-3">
											<input type="number" name="kh1" value="" class="form-control required col-md-6" placeholder="Range 0-100">
										</div>
										<div class="col-md-4 col-sm-4">
											<div class="rating rating-0 size-13 width-100 "><!-- rating-0 ... rating-5 --></div>
										</div>
									</div>
								</div>
							</fieldset>
						</div>									
					</div>

					<div class="panel panel-default" id="formp3">
						<div class="panel-heading panel-heading-transparent">
							<strong>Deskripsi Penilaian</strong>
						</div>
						<div class="panel-body">
							<fieldset>
								<div class="row">
									<div class="form-group">
										<label>Internal Readiness</label>
										<input type="text" name="nilai1a" value="" class="form-control required col-md-6" placeholder="Kesehatan">
										<input type="text" name="nilai1b" value="" class="form-control required col-md-6" placeholder="Career Willingness">
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<label>External Readiness</label>
										<input type="text" name="extready" value="" class="form-control required col-md-6" placeholder="From family, friends, etc">
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<label>Hubungan dengan Sesama</label>
										<label class="radio">
											<input type="radio" name="hds-1" value="1" checked="checked">
											<i></i> Sangat Bagus
										</label>

										<label class="radio">
											<input type="radio" name="hds-2" value="1">
											<i></i> Bermasalah
										</label>
										<input type="text" name="hds-3" value="" class="form-control required col-md-6" placeholder="Deskripsi">
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<label>Alasan Mutasi</label>
										<input type="text" name="almut" value="" class="form-control required col-md-6" placeholder="From family, friends, etc">
									</div>
								</div>
							</fieldset>
						</div>									
					</div>
					<div class="row">
						<div class="col-md-6">
							<button type="submit" class="btn btn-3d btn-teal btn-xlg btn-block margin-top-30" id="back2">BACK</button>
						</div>
						<div class="col-md-6">
							<button type="submit" class="btn btn-3d btn-teal btn-xlg btn-block margin-top-30" id="next3">NEXT</button>
						</div>
					</div>
				</form>
			</div>

			<!-- TATA CARA -->
			<div class="col-md-6">

				<div class="panel panel-default">
					<div class="panel-body">

						<h4>Tata Cara Pengisian Form</h4>
						<!-- <p><em>This is a vrey unique feature because you don't need PHP programming if you want to send the form directly to email.</em></p>
						<hr /> -->
						<p>
							1. Isi kolom bertanda * (maka kolom lain akan otomatis terisi).<br>
							2. Dokumen yang dilampirkan berupa CV, Nota Dinas, dan dokumen lain yang diperlukan, dijadikan satu folder dalam bentuk zip/rar.
						</p>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('includes-scripts')
	@parent

	<script>
	$(document).ready(function(){
	    $("#formdp").show();
		$("#formdm").hide();
		$("#formp1").hide();
		$("#formp2").hide();
		$("#formp3").hide();
		$("#back2").hide();
		$("#next3").hide();
		$("#formdpeng").hide();
		$("#back3").hide();
		$("#btnKirim").hide();

	});
	$(document).ready(function(){
		$("#back1").click(function(){
			$("#formdp").show();
			$("#formdm").hide();
			$("#formp1").hide();
			$("#formp2").hide();
			$("#formp3").hide();
			$("#back2").hide();
			$("#next3").hide();
			$("#formdpeng").hide();
			$("#back3").hide();
			$("#btnKirim").hide();
		});
	});
	$(document).ready(function(){
		$("#next1").click(function(){
			$("#formdp").hide();
			$("#formdm").show();
			$("#formp1").hide();
			$("#formp2").hide();
			$("#formp3").hide();
			$("#back2").hide();
			$("#next3").hide();
			$("#formdpeng").hide();
			$("#back3").hide();
			$("#btnKirim").hide();
		});
	});
	$(document).ready(function(){
		$("#back2").click(function(){
			$("#formdp").hide();
			$("#formdm").show();
			$("#formp1").hide();
			$("#formp2").hide();
			$("#formp3").hide();
			$("#back2").hide();
			$("#next3").hide();
			$("#formdpeng").hide();
			$("#back3").hide();
			$("#btnKirim").hide();
		});
	});
	$(document).ready(function(){
		$("#next2").click(function(){
			$("#formdp").hide();
			$("#formdm").hide();
			$("#formp1").show();
			$("#formp2").show();
			$("#formp3").show();
			$("#back2").show();
			$("#next3").show();
			$("#formdpeng").hide();
			$("#back3").hide();
			$("#btnKirim").hide();
		});
	});
	$(document).ready(function(){
		$("#back3").click(function(){
			$("#formdp").hide();
			$("#formdm").hide();
			$("#formp1").show();
			$("#formp2").show();
			$("#formp3").show();
			$("#back2").show();
			$("#next3").show();
			$("#formdpeng").hide();
			$("#back3").hide();
			$("#btnKirim").hide();
		});
	});
	$(document).ready(function(){
		$("#next3").click(function(){
			$("#formdp").hide();
			$("#formdm").hide();
			$("#formp1").hide();
			$("#formp2").hide();
			$("#formp3").hide();
			$("#back2").hide();
			$("#next3").hide();
			$("#formdpeng").show();
			$("#back3").show();
			$("#btnKirim").show();
		});
	});
		
	</script>

	<script>
		$("#nip_pengusul").keyup(function(){
			var nip = $(this).val();

			if(nip.length >= 6)
			{
				$.ajax({
					'url': '/mutasi/pengajuan/get_pegawai_info',
					'type': 'POST',
					'data': {
						'_token': '{{ csrf_token() }}',
						'nip': nip
					},
					'dataType': 'json',
					error: function(){

					},
					success: function(data){
						if(data)
						{
							$("#nama_pengusul").val(data.nama_pegawai);
						}
					}
				});
			}
			else
			{
				$("#nama_pengusul").val('');
			}
		});

		$("#nip").keyup(function(){
			var nip = $(this).val();

			if(nip.length >= 6)
			{
				$.ajax({
					'url': '/mutasi/pengajuan/get_pegawai_info',
					'type': 'POST',
					'data': {
						'_token': '{{ csrf_token() }}',
						'nip': nip
					},
					'dataType': 'json',
					error: function(){

					},
					success: function(data){
						if(data)
						{
							$("#nama_pegawai").val(data.nama_pegawai);
							$("#personnel_area").val(data.personnel_area);
							$("#formasi_jabatan").val(data.forja);
							$("#posisi").val(data.posisi);
							$("#masa_kerja").val(data.masa_kerja);
							$("#sisa_kerja").val(data.sisa_masa_kerja);
						}
						else
						{
							$("#nama_pegawai").val('');
							$("#personnel_area").val('');
							$("#formasi_jabatan").val('');
							$("#posisi").val('');
							$("#masa_kerja").val('');
							$("#sisa_kerja").val('');
						}
					}
				});
			}
			else
			{
				$("#nama_pegawai").val('');
				$("#personnel_area").val('');
				$("#formasi_jabatan").val('');
				$("#posisi").val('');
				$("#masa_kerja").val('');
				$("#sisa_kerja").val('');
			}
		});
	</script>
@endsection