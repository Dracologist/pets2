<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Pet</title>
</head>
<body>
    <?php if ($success): ?>
        <h2>Thank you for your order of a <?= ($type) ?>!</h2>
    <?php endif; ?>
    <form action="" method="post">
        <label>Pet Name <?php if (isset($errors['name'])): ?><p><?= ($errors['name']) ?></p><?php endif; ?><input type="text" name="name" value="<?= ($name) ?>"></label>
        <label> Pet Color
            <?php if (isset($errors['color'])): ?><p><?= ($errors['color']) ?></p><?php endif; ?>
            <select name="color">
            <option>--Select--</option>
            <?php foreach (($colors?:[]) as $colorOption): ?>
                <option>
                    <?php if ($colorOption == $color): ?>selected<?php endif; ?>
                    <?= ($colorOption)."
" ?>
                </option>
            <?php endforeach; ?>
        </select></label>
        <label> Pet Type <?php if (isset($errors['type'])): ?><p><?= ($errors['type']) ?></p><?php endif; ?> <input type="text" name="type" value="<?= ($type) ?>"></label>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>