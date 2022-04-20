<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pos</title>
</head>
<body>
    <form action="<?php site_url('C_masterpos_subpos/add') ?>" method="post">
        <input type="text" name="id_anggota" placeholder="id_anggota">
        <input type="text" name="nama_pengirim" placeholder="nama_pengirim">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="no_telp" placeholder="no_telp">
        <input type="text" name="no_rekening" placeholder="no_rekening">
        <input type="text" name="nama_bank" placeholder="nama_bank">
        <input type="text" name="tgl_kirim" placeholder="tgl_kirim">
        <input type="text" name="kategori" placeholder="kategori">
        <input type="text" name="PPN" placeholder="PPN">
        <input type="text" name="PPH_21" placeholder="PPH_21">
        <input type="text" name="PPH_22" placeholder="PPH_22">
        <input type="text" name="PPH_23" placeholder="PPH_23">
        <input type="text" name="denda" placeholder="denda">
        <input type="text" name="administrasi_bank" placeholder="administrasi_bank">
        <input type="text" name="total_dibayar" placeholder="total_dibayar">
        <input type="text" name="berita" placeholder="berita">
        <input type="text" name="honor_asesmen" placeholder="honor_asesmen">
        <input type="text" name="honor_evaluator" placeholder="honor_evaluator">
        <input type="text" name="nilai_kontrak" placeholder="nilai_kontrak">
        <input type="text" name="honor_tester" placeholder="honor_tester">
        <input type="text" name="honor_feedback" placeholder="honor_feedback">
        <input type="text" name="pekerjaan" placeholder="pekerjaan">
        <input type="text" name="honor_pewawancara" placeholder="honor_pewawancara">
        <input type="text" name="honor_korektor_pauli" placeholder="honor_korektor_pauli">
        <input type="text" name="lumpsum_transport_bandara" placeholder="lumpsum_transport_bandara">
        <input type="text" name="lumpsum_komsumsi" placeholder="lumpsum_komsumsi">
        <input type="text" name="lumpsum_transpoet_lok" placeholder="lumpsum_transpoet_lok">
        <input type="text" name="waktu_kerja" placeholder="waktu_kerja">
        <input type="text" name="lumpsum_uang_cod" placeholder="lumpsum_uang_cod">
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>