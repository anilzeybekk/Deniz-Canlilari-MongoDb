<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İsim, Email ve Yorum Formu</title>
</head>
<body>
    <h1>Görüşlerinizi Paylaşın</h1>
    <?= validation_list_errors() ?>
    <form action ="<?=base_url('mongo')?>" method="post">
        <?=csrf_field()?>
        <label for="name">İsim:</label><br>
        <input type="text" id="name" name="name" placeholder="İsminizi girin" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" placeholder="Email adresinizi girin" required><br><br>

        <label for="comment">Yorum:</label><br>
        <textarea id="comment" name="comment" placeholder="Yorumunuzu buraya yazın" rows="5" required></textarea><br><br>

        <button type="submit">Gönder</button>
    </form>
</body>
</html>
