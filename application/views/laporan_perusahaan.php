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
    <h2 style="text-align: center;">LAPORAN DAFTAR PERUSAHAAN</h2>
    <table style="height: 197px; width: 800px;">
        <tbody>
            <tr style="height: 8.95px;">
                <td style="width: 35px; height: 8.95px;"><strong>No</strong></td>
                <td style="width: 80px; height: 8.95px;"><strong>Nama Perusahaan</strong></td>
                <td style="width: 82px; height: 8.95px;"><strong>Jenis Perusahaan</strong></td>
                <td style="width: 85px; height: 8.95px;"><strong>NPWP Perusahaan</strong></td>
                <td style="width: 97.4875px; height: 8.95px;"><strong>Provinsi</strong></td>
                <td style="width: 95.5125px; height: 8.95px;"><strong>Kota</strong></td>
                <td style="width: 79px; height: 8.95px;"><strong>Alamat</strong></td>
                <td style="width: 100px; height: 8.95px;"><strong>Kode Pos</strong></td>
                <td style="width: 95px; height: 8.95px;"><strong>Deskripsi</strong></td>
                <td style="height: 8.95px;"><strong>Nomor Telepon</strong></td>
                <td style="width: 90px; height: 8.95px;"><strong>Tanggal Daftar</strong></td>
            </tr>
            <?php
                                            $id = 0;
                                            foreach($perusahaan as $i)
                                            :
                                            $id++;
                                            $id_user = $i['id_perusahaan_detail'];
                                            $username = $i['username'];
                                            $email = $i['email'];
                                            $nama_perusahaan = $i['nama_perusahaan'];
                                            $jenis_perusahaan = $i['jenis_perusahaan'];
                                            $npwp_perusahaan = $i['npwp_perusahaan'];
                                            $provinsi = $i['provinsi'];
                                            $kota = $i['kota'];
                                            $alamat = $i['alamat'];
                                            $kode_pos = $i['kode_pos'];
                                            $deskripsi = $i['deskripsi'];
                                            $nomor_telepon = $i['nomor_telepon'];
                                            $date_registered = $i['date_registered'];
                                            $logo = $i['logo'];
                                            $id_status_verifikasi = $i['id_status_verifikasi'];
                                            $id_status_aktif = $i['id_status_aktif'];
                                            

                                            ?>
            <tr style="height: 91px;">
                <td style="width: 35px; height: 91px;"><?=$id?></td>
                <td style="width: 80px; height: 91px;"><?=$nama_perusahaan?></td>
                <td style="width: 82px; height: 91px;"><?=$jenis_perusahaan?></td>
                <td style="width: 85px; height: 91px;"><?=$npwp_perusahaan?></td>
                <td style="width: 97.4875px; height: 91px;"><?=$provinsi?></td>
                <td style="width: 95.5125px; height: 91px;"><?=$kota?></td>
                <td style="width: 79px; height: 91px;"><?=$alamat?></td>
                <td style="width: 108px; height: 91px;"><?=$kode_pos?></td>
                <td style="width: 95px; height: 91px;"><?=$deskripsi?></td>
                <td style=" height: 91px;"><?=$nomor_telepon?></td>
                <td style="width: 90px; height: 91px;"><?=$date_registered?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>