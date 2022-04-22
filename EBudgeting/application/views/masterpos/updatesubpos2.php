<?php print_r($sub_pos2); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Pos</title>
</head>
<body>
    <form action="<?php site_url('C_masterpos_subpos2/update') ?>" method="post">
        <input type="hidden" name="id_subpos2" value="<?php echo $sub_pos2['id_subpos2'];?>">
        <input type="text" name="nama" placeholder="Nama POS" value="<?php echo $sub_pos2['nama_subpos2'];?>">
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>