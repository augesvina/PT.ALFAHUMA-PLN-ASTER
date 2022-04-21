<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Transfer</title>
</head>

<body>

    
    <form action="<?php site_url('C_masterpos_subpos/update') ?>" method="post">
        <?php foreach ($transfers as $key) : ?>
         
            <input type="hidden" name="id_transfer" value="<?php echo $key['id_transfer']; ?>">
            <input type="hidden" name="id_anggota" placeholder="id_anggota" value="<?php echo $key['id_anggota']; ?>">
            <input type="text" name="nama_pengirim" placeholder="nama_pengirim" value="<?php echo $key['nama_pengirim']; ?>">
            <input type="email" name="email" placeholder="email" value="<?php echo $key['email']; ?>">
            <input type="number" name="no_telp" placeholder="no_telp" value="<?php echo $key['no_telp']; ?>">
            <input type="number" name="no_rekening" placeholder="no_rekening" value="<?php echo $key['no_rekening']; ?>">
            <input type="text" name="nama_bank" placeholder="nama_bank" value="<?php echo $key['nama_bank']; ?>">
            <input type="datetime-local" name="tgl_kirim" placeholder="tgl_kirim" value="<?php echo date('Y-m-d\TH:i', strtotime($key['tgl_kirim']));?>">
           
           
            <input type="text" name="kategori" placeholder="kategori" value="<?php echo $key['kategori']; ?>">
            <input type="number" name="PPN" placeholder="PPN" value="<?php echo $key['PPN']; ?>">
            <input type="number" name="PPH_21" placeholder="PPH_21" value="<?php echo $key['PPH_21']; ?>">
            <input type="number" name="PPH_22" placeholder="PPH_22" value="<?php echo $key['PPH_22']; ?>">
            <input type="number" name="PPH_23" placeholder="PPH_23" value="<?php echo $key['PPH_23']; ?>">
            <input type="number" name="denda" placeholder="denda" value="<?php echo $key['denda']; ?>">
            <input type="number" name="administrasi_bank" placeholder="administrasi_bank" value="<?php echo $key['administrasi_bank']; ?>">
            <input type="text" name="total_dibayar" placeholder="total_dibayar" value="<?php echo $key['total_dibayar']; ?>">
            <input type="text" name="berita" placeholder="berita" value="<?php echo $key['berita']; ?>">
            <input type="number" name="honor_asesmen" placeholder="honor_asesmen" value="<?php echo $key['honor_asesmen']; ?>">
            <input type="number" name="honor_evaluator" placeholder="honor_evaluator" value="<?php echo $key['honor_evaluator']; ?>">
            <input type="text" name="nilai_kontrak" placeholder="nilai_kontrak" value="<?php echo $key['nilai_kontrak']; ?>">
            <input type="number" name="honor_tester" placeholder="honor_tester" value="<?php echo $key['honor_tester']; ?>">
            <input type="number" name="honor_feedback" placeholder="honor_feedback" value="<?php echo $key['honor_feedback']; ?>">
            <input type="text" name="pekerjaan" placeholder="pekerjaan" value="<?php echo $key['pekerjaan']; ?>">
            <input type="number" name="honor_pewawancara" placeholder="honor_pewawancara" value="<?php echo $key['honor_pewawancara']; ?>">
            <input type="number" name="honor_korektor_pauli" placeholder="honor_korektor_pauli" value="<?php echo $key['honor_korektor_pauli']; ?>">
            <input type="text" name="lumpsum_transport_bandara" placeholder="lumpsum_transport_bandara" value="<?php echo $key['lumpsum_transport_bandara']; ?>">
            <input type="text" name="lumpsum_komsumsi" placeholder="lumpsum_komsumsi" value="<?php echo $key['lumpsum_komsumsi']; ?>">
            <input type="text" name="lumpsum_transpoet_lok" placeholder="lumpsum_transpoet_lok" value="<?php echo $key['lumpsum_transpoet_lok']; ?>">
            <input type="text" name="waktu_kerja" placeholder="waktu_kerja" value="<?php echo $key['waktu_kerja']; ?>">
            <input type="text" name="lumpsum_uang_cod" placeholder="lumpsum_uang_cod" value="<?php echo $key['lumpsum_uang_cod']; ?>">
            <button type="submit">Submit</button>
        <?php endforeach; ?>
    </form>

</body>

</html>