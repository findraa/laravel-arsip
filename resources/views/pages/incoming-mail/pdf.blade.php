<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Surat Masuk #{{ $data->file_number}}</title>
  <style>
		body {
      width: 100%;
			font-family: "Arial", sans-serif;
		}
	</style>
</head>
<body>

  <table align="center" border="0" cellpadding="1">
		<tbody>
			<tr>
				<td colspan="3">
          <center>
            <img src="https://3.bp.blogspot.com/-eapWDS9Zgtk/VFb9eOTNYuI/AAAAAAAAEoQ/cG2wcp15zNs/s1600/Logo-Pemerintah-Kota-Makasar.png" width="60" height="60">
							<p style=" font-size: 18px; font-weight: bold;">PEMERINTAH KOTA MAKASSAR <br> DINAS KEARSIPAN KOTA MAKASSAR</p>
							<p style="font-size: 12px; font-weight: bold; ">Jl. Urip Sumoharjo No.8, Kota Makassar, Sulawesi Selatan 90232, Indonesia <br>
								Telephone: (+62)411 438381
                Email: arsipmakassar@gmail.com</p>
                <hr> <br>
						</center>
				</td>
      </tr>

      <tr>
        	<td colspan=4>
					<div align="right">
						<p style="font-size: 12px;">Makassar, {{ \Carbon\Carbon::now()->formatLocalized("%d %B %Y") }}</p>
					</div>
				</td>
      </tr>

			<tr>
				<td colspan="2">
					<table border="0" cellpadding="1">
						<tbody>
							<tr>
								<td width="93"><span style="font-size: 12px;">No</span></td>
								<td width="8"><span style="font-size: 12px;">:</span></td>
								<td width="200"><span style="font-size: 12px;">{{ $data->letter_number }}</span></td>
							</tr>
							<tr>
								<td><span style="font-size: 12px;">Lampiran</span></td>
								<td><span style="font-size: 12px;">:</span></td>
								<td><span style="font-size: 12px;">1 Lembar</span></td>
							</tr>
							<tr>
								<td><span style="font-size: 12px;">Tanggal Edaran</span></td>
								<td><span style="font-size: 12px;">:</span></td>
								<td><span style="font-size: 12px;">{{ $data->letter_date }}</span></td>
							</tr>
							<tr>
								<td><span style="font-size: 12px;">Perihal</span></td>
								<td><span style="font-size: 12px;">:</span></td>
								<td><span style="font-size: 12px;">{{ $data->subject }}</span></td>
							</tr>
						</tbody>
					</table>
				</td>

			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>
					<table border="0" style="width: 300px;">
						<tbody>
							<tr>
								<td width="74"><span style="font-size: 12px;">Kepada yth</span></td>
								<td width="11">
								</td>
								<td width="140"></td>
							</tr>
							<tr>
								<td><span style="font-size: 12px;">Bapak/Ibu/Sdr(i)</span></td>
								<td></td>
								<td>
								</td>
							</tr>
							<tr>
								<td><span style="font-size: 12px;">di</span></td>
								<td></td>
								<td>
								</td>
							</tr>
							<tr>
								<td><span style="font-size: 12px;">Dinas Kearsipan Kota Makassar</span></td>
								<td></td>
								<td>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="3" height="270" valign="top">
					<div align="justify" style="margin-top: 30px; margin-bottom:30px;">
						<span style="font-size: 12px;">Dengan hormat,
							Sehubungan akan diadakannya {{ $data->subject }} lingkup dinas, maka Pemerintah Kota Makassar melalui Dinas Kearsipan Kota Makassar akan melaksanakan agenda kegiatan yang akan dilaksanakan pada:</span>
						<table border="0" style="width: 352px;  margin:20px 0;">
							<tbody>
								<tr>
									<td width="80"><span style="font-size: 12px;">Hari/Jam</span></td>
									<td width="10"><span style="font-size: 12px;">:</span></td>
									<td width="248"><span style="font-size: 12px;">{{ $data->datetime }}</span></td>
								</tr>
								<tr>
									<td><span style="font-size: 12px;">Tempat</span></td>
									<td><span style="font-size: 12px;">:</span></td>
									<td><span style="font-size: 12px;">Kantor Dinas Kearsipan</span></td>
								</tr>
							</tbody>
						</table>
						<div align="justify">
							<span style="font-size: 12px;">

								Demikian surat ini kami sampaikan, kami harap ibu/bapa dapat menghadiri agenda kegiatan ini. sekian dan terima kasih.</span> </div>
					</div>
					{{-- <div align="center">
						<span style="font-size: 12px;">Mengetahui</span></div> --}}
				</td>
			</tr>
			{{-- <tr>
				<td>
					<div align="center">
            <span style="font-size: 12px;">Kepala Bagian <br> Umum dan Kepegawaian</span>
          </div>

					<div align="center" style="height: 80px;"></div>

          <div align="center">
						<span style="font-size: 12px; font-weight: bold;">A. Rahmaniar, S.Sos</span></div>
        </td>


        <td>
					<div align="center">
            <span style="font-size: 12px;">Kepala Dinas <br> Kearsipan Makassar</span>
          </div>
					<div align="center" style="height: 80px;"></div>
					<div align="center">
						<span style="font-size: 12px; font-weight: bold;">Hj. Nadjma Emma, SE.M.Si</span></div>
				</td>
			</tr> --}}
		</tbody>
	</table>

</body>
</html>
