<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim Paneli Giriş</title>
</head>
<body>
    <?php 
    if(isset($uyari))
    {
        echo $uyari;
    }
    
    
    ?>
<?= validation_list_errors() ?>
    <form action ="<?=base_url('login')?>" method="post">
        <?=csrf_field()?>
        <b>Kullanıcı Adı:</b><br>
        <input type="text" name="kullanici" required><br>
        <b>Parola:</b><br>
        <input type="password" name="sifre" required><br><br>
        <input type="submit" value="Giriş Yap">
        <a href="<?= base_url('mongo') ?>">Yorum Yap</a>
</form>
</body>
</html>