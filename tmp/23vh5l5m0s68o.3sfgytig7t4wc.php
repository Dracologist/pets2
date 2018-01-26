<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Pet</title>
</head>
<body>
    <form action="form.html" method="post">
        <label>Pet Name <input type="text" name="name"></label>
        <label> Pet Color <select name="color">
            <option>--Select--</option>
            <option><?= ($test) ?></option>
            <?php foreach (($colors?:[]) as $colorOption): ?>
                <option><?= ($colorOption) ?></option>
            <?php endforeach; ?>
        </select></label>
        <label> Pet Type <input type="text" name="type"></label>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>