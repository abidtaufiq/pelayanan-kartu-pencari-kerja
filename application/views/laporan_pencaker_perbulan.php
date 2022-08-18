<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pencaker</title>
    <style>
    td {
        padding-top: 20px;
        padding-bottom: 20px;
        padding-right: 5px;
    }

    td:first-child {
        padding-left: 5px;
        padding-right: 0;
    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    </style>
</head>

<body>
    <h2 style="text-align: center;">LAPORAN DAFTAR PENCAKER</h2>
    <h2 style="text-align: center;">Bulan <?=$bulan?></h2>
    <table style="height: 197px; width: 1033px;">
        <tbody>
            <tr style="height: 8.95px;">
                <td style="width: 35px; height: 8.95px;"><strong>No</strong></td>
                <td style="width: 111px; height: 8.95px;"><strong>TANGGAL PENDAFTAR</strong></td>
                <td style="width: 82px; height: 8.95px;"><strong>NO KTP</strong></td>
                <td style="width: 85px; height: 8.95px;"><strong>NAMA</strong></td>
                <td style="width: 97.4875px; height: 8.95px;"><strong>UMUR</strong></td>
                <td style="width: 95.5125px; height: 8.95px;"><strong>KELAMIN</strong></td>
                <td style="width: 79px; height: 8.95px;"><strong>STATUS</strong></td>
                <td style="width: 108px; height: 8.95px;"><strong>PENDIDIKAN</strong></td>
                <td style="width: 95px; height: 8.95px;"><strong>JURUSAN</strong></td>
                <td style="width: 156px; height: 8.95px;"><strong>ALAMAT</strong></td>
            </tr>
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
            <tr style="height: 91px;">
                <td style="width: 35px; height: 91px;"><?=$id?></td>
                <td style="width: 111px; height: 91px;"><?=$date_registered?></td>
                <td style="width: 82px; height: 91px;"><?=$nik?></td>
                <td style="width: 85px; height: 91px;"><?=$nama_lengkap?></td>
                <td style="width: 97.4875px; height: 91px;"><?=$jenis_kelamin?></td>
                <td style="width: 95.5125px; height: 91px;"><?=$jenis_kelamin?></td>
                <td style="width: 79px; height: 91px;"><?=$status_perkawinan?></td>
                <td style="width: 108px; height: 91px;"><?=$pendidikan_terakhir?></td>
                <td style="width: 95px; height: 91px;"><?=$jurusan?></td>
                <td style="width: 156px; height: 91px;"><?=$alamat?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>