<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu AK1</title>
</head>

<body>


    <?php
                                            $id = 0;
                                            foreach($pegawai as $i)
                                            :
                                            $id++;
                                            $username = $i['username'];
                                            $email = $i['email'];
                                            $id_user = $i['id_user'];
                                            $nik = $i['nik']; 
                                            $no_pendaftaran = $i['no_pendaftaran']; 
                                            $nama_lengkap = $i['nama_lengkap']; 
                                            $tempat_lahir = $i['tempat_lahir']; 
                                            $tanggal_lahir = $i['tanggal_lahir']; 
                                            $jenis_kelamin = $i['jenis_kelamin']; 
                                            $agama = $i['agama']; 
                                            $status_perkawinan = $i['status_perkawinan']; 
                                            $tinggi_badan = $i['tinggi_badan'];
                                            $berat_badan = $i['berat_badan'];
                                            $pendidikan_terakhir = $i['pendidikan_terakhir']; 
                                            $jurusan = $i['jurusan'];
                                            $pengalaman_kerja = $i['pengalaman_kerja'];
                                            $no_hp = $i['no_hp'];
                                            $provinsi = $i['provinsi'];
                                            $kota = $i['kota'];
                                            $kode_pos = $i['kode_pos'];
                                            $alamat = $i['alamat'];
                                            $foto_saya = $i['foto_saya'];
                                            $foto_ktp = $i['foto_ktp'];
                                            $foto_ijazah = $i['foto_ijazah'];
                                            $date_registered = $i['date_registered'];
                                            $id_status_aktif = $i['id_status_aktif'];
                                            $id_status_perpanjangan = $i['id_status_perpanjangan'];
                                            $id_status_verifikasi = $i['id_status_verifikasi'];
                                            $mulai_berlaku = $i['mulai_berlaku'];
                                            $akhir_berlaku = $i['akhir_berlaku'];
                                            

                                            ?>
    <div class="col">
        <div class="row">
            <p style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:150%;">&nbsp;</p>
            <table cellpadding="0" cellspacing="0"
                style="margin-right:100pt; margin-left:9pt; border:0.75pt solid #000000; border-collapse:collapse; float:left;">
                <tbody>
                    <tr style="height:100.2pt;">
                        <td colspan="3"
                            style="width:540pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                            <p style="margin-top:10pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><img
                                    src="https://myfiles.space/user_files/124457_b80c96004754aa79/1659938133_kartu-ak1/1659938133_kartu-ak1-1.png"
                                    width="109" height="82" alt=""
                                    style="float: left; text-align: left; display: inline-block; "><strong>KARTU
                                    AK-1</strong></p>
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                <strong>PEMERINTAH KABUPATEN PATI</strong>
                            </p>
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                <strong>DINAS TENAGA KERJA DAN TRANSMIGRASI KABUPATEN PATI</strong>
                            </p>
                            <p style="margin-top:0pt; margin-bottom:10pt; text-align:center; font-size:11pt;">Jl. Jenderal Sudirman No.70, Kec. Pati, Kabupaten Pati, Jawa Tengah</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"
                            style="width:440pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                <strong>KARTU PENCARI KERJA / AK1</strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="8"
                            style="width:141.05pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                            <p style="margin-top:5pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><img
                                    src="<?=base_url();?>assets/berkas/<?=$foto_saya?>"
                                    width="102" height="153" alt=""></p>
                        </td>
                        <td
                            style="width:140.6pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">Nomor Pendaftaran</p>
                        </td>
                        <td
                            style="width:136.75pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                <strong>&nbsp;<?=$no_pendaftaran?></strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td
                            style="width:140.6pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">Nomor Induk Kependudukan</p>
                        </td>
                        <td
                            style="width:136.75pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                <strong>&nbsp; <?=$nik?></strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td
                            style="width:140.6pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">Nama Lengkap</p>
                        </td>
                        <td
                            style="width:136.75pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                <strong>&nbsp;<?=$nama_lengkap?></strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td
                            style="width:140.6pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">Tempat, Tanggal Lahir</p>
                        </td>
                        <td
                            style="width:136.75pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                <strong>&nbsp;<?=$tempat_lahir?>, <?=$tanggal_lahir?></strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td
                            style="width:140.6pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">Jenis Kelamin</p>
                        </td>
                        <td
                            style="width:136.75pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                <strong>&nbsp;<?=$jenis_kelamin?></strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td
                            style="width:140.6pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">Status</p>
                        </td>
                        <td
                            style="width:136.75pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                <strong>&nbsp;<?=$status_perkawinan?></strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td
                            style="width:140.6pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">Agama</p>
                        </td>
                        <td
                            style="width:136.75pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                <strong>&nbsp;<?=$agama?></strong>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td
                            style="width:140.6pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">Alamat Lengkap</p>
                        </td>
                        <td
                            style="width:136.75pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                <strong>&nbsp;<?=$alamat?></strong>
                            </p>
                        </td>
                    </tr>
                    <tr style="height:34.65pt;">
                        <td colspan="3"
                            style="width:440pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-right:76.75pt; margin-bottom:0pt; font-size:11pt;">
                                <strong>MULAI BERLAKU :<?=$mulai_berlaku?></strong>
                            </p>
                            <p style="margin-top:0pt; margin-right:76.75pt; margin-bottom:0pt; font-size:11pt;">
                                <strong>BATAS BERLAKU :<?=$akhir_berlaku?></strong>
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:150%;">&nbsp;</p>
        </div>
        <div class="row">
            <p style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:150%;">&nbsp;</p>

            <table cellpadding="0" cellspacing="0"
                style="margin-right:9pt; margin-left:9pt; border:0.75pt solid #000000; border-collapse:collapse; float:left;">
                <tbody>
                    <tr style="height:110.9pt;">
                        <td style="width:520pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                            <p
                                style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%; font-size:11pt;">
                                Ketentuan :</p>
                            <ol style="margin:0pt; padding-left:0pt;" type="1">
                                <li
                                    style="margin-left:31.35pt; text-align:justify; line-height:150%; padding-left:4.65pt; font-size:11pt;">
                                    Berlaku Nasional</li>
                                <li
                                    style="margin-left:31.35pt; text-align:justify; line-height:150%; padding-left:4.65pt; font-size:11pt;">
                                    Bila ada perubahan data / keterangan lainnya atau telah mendapat pekerjaan harap
                                    segera melapor</li>
                                <li
                                    style="margin-left:31.35pt; text-align:justify; line-height:150%; padding-left:4.65pt; font-size:11pt;">
                                    Apabila pencari kerja yang bersangkutan telah diterima bekerja maka Instansi /
                                    perusahaan yang mengembalikan AK/1 ini kepada Dinas Tenaga Kerja
                                </li>
                                <li
                                    style="margin-left:31.35pt; text-align:justify; line-height:150%; padding-left:4.65pt; font-size:11pt;">
                                    Kartu ini berlaku selama 2 tahun dengan keharusan melapor setiap 6 bulan sekali bagi
                                    pencari kerja yang belum mendapat pekerjaan.</li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <?php endforeach;?>


</body>

</html>