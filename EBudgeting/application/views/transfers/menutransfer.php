<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master POS </title>
</head>
<body>
    <a href="<?php echo site_url('C_menutransfer/add');?>">Tambah POS</a>
    <table>
        <tr>
            <th>No</th>
            <th>id_anggota</th>
            <th>nama_pengirim</th>
            <th>email</th>
            <th>no_telp</th>
            <th>no_rekening</th>
            <th>nama_bank</th>
            <th>tgl_kirim</th>
            <th>kategori</th>
            <th>PPN</th>
            <th>PPH_21</th>
            <th>PPH_22</th>
            <th>PPH_23</th>
            <th>denda</th>
            <th>administrasi_bank</th>
            <th>total_dibayar</th>
            <th>berita</th>
            <th>honor_asesmen</th>
            <th>honor_evaluator</th>
            <th>nilai_kontrak</th>
            <th>honor_tester</th>
            <th>honor_feedback</th>
            <th>pekerjaan</th>
            <th>honor_pewawancara</th>
            <th>honor_korektor_pauli</th>
            <th>lumpsum_transport_bandara</th>
            <th>lumpsum_komsumsi</th>
            <th>lumpsum_transpoet_lok</th>
            <th>waktu_kerja</th>
            <th>lumpsum_uang_cod</th> 
            <th>Aksi</th>
        </tr>
        <?php 
        $id = 0;
        foreach ($transfer as $id_anggota) :
            $id++;
            
        
         ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $id_anggota['id_anggota'] ?></td>
            <td><?php echo $id_anggota['nama_pengirim'] ?></td>
            <td><?php echo $id_anggota['email'] ?></td>
            <td><?php echo $id_anggota['no_telp'] ?></td>
            <td><?php echo $id_anggota['no_rekening'] ?></td>
            <td><?php echo $id_anggota['nama_bank'] ?></td>
            <td><?php echo $id_anggota['tgl_kirim'] ?></td>
            <td><?php echo $id_anggota['kategori'] ?></td>
            <td><?php echo $id_anggota['PPN'] ?></td>
            <td><?php echo $id_anggota['PPH_21'] ?></td>
            <td><?php echo $id_anggota['PPH_22'] ?></td>
            <td><?php echo $id_anggota['PPH_23'] ?></td>
            <td><?php echo $id_anggota['denda'] ?></td>
            <td><?php echo $id_anggota['administrasi_bank'] ?></td>
            <td><?php echo $id_anggota['total_dibayar'] ?></td>
            <td><?php echo $id_anggota['berita'] ?></td>
            <td><?php echo $id_anggota['honor_asesmen'] ?></td>
            <td><?php echo $id_anggota['honor_evaluator'] ?></td>
            <td><?php echo $id_anggota['nilai_kontrak'] ?></td>
            <td><?php echo $id_anggota['honor_tester'] ?></td>
            <td><?php echo $id_anggota['honor_feedback'] ?></td>
            <td><?php echo $id_anggota['pekerjaan'] ?></td>
            <td><?php echo $id_anggota['honor_pewawancara'] ?></td>
            <td><?php echo $id_anggota['honor_korektor_pauli'] ?></td>
            <td><?php echo $id_anggota['lumpsum_transport_bandara'] ?></td>
            <td><?php echo $id_anggota['lumpsum_komsumsi'] ?></td>
            <td><?php echo $id_anggota['lumpsum_transpoet_lok'] ?></td>
            <td><?php echo $id_anggota['waktu_kerja'] ?></td>
            <td><?php echo $id_anggota['lumpsum_uang_cod'] ?></td>
            <td>
            
                <a href="<?php echo site_url('C_menutransfer/edit/'). $id_anggota['id_transfer']; ?>">Edit</a>
                <a href="<?php echo site_url('C_menutransfer/delete/'). $id_anggota['id_transfer']; ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>