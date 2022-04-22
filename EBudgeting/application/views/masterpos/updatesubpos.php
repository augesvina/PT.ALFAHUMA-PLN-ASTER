<?php print_r($sub_pos); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Pos</title>
</head>
<body>
    <form action="<?php site_url('C_masterpos_subpos/update_subpos') ?>" method="post">
        <input type="hidden" name="id_subpos" value="<?php echo $sub_pos['id_subpos'];?>">
        <input type="text" name="nama" placeholder="Nama POS" value="<?php echo $sub_pos['nama_subpos'];?>">
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>