<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Pet</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
</head>
<body>
    <?php if ($success): ?>
        <h2>Thank you for your order of a <?= ($color) ?> <?= ($type) ?>!</h2>
    <?php endif; ?>
    <div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="col-sm-4">
                <?php if (isset($errors['name'])): ?><p><?= ($errors['name']) ?></p><?php endif; ?>
                <label>Pet Name <input type="text" name="name" value="<?= ($name) ?>"></label>
            </div>
            <div class="col-sm-4">
                <?php if (isset($errors['color'])): ?><p><?= ($errors['color']) ?></p><?php endif; ?>
                <label> Pet Color
                    <select name="color">
                    <option>--Select--</option>
                    <?php foreach (($colors?:[]) as $colorOption): ?>
                        <option <?php if ($colorOption == $color): ?>selected<?php endif; ?>>
                            <?= ($colorOption)."
" ?>
                        </option>
                    <?php endforeach; ?>
                </select></label>
            </div>
            <div class="col-sm-4">
                <?php if (isset($errors['type'])): ?><p><?= ($errors['type']) ?></p><?php endif; ?>
                <label> Pet Type <input type="text" name="type" value="<?= ($type) ?>"></label>
            </div>
        </div>
        <div class="row">
        <input type="submit" name="submit" value="Submit">
        </div>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</body>
</html>