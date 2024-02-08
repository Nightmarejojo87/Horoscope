<form method="post" action="index.php?action=response"> 

<select name="liste">
    <?php foreach ($signe as $k => $v): ?>
    <option value="<?= $k ?>"><?= $k ?></option>
    <?php endforeach ?>
</select>
<input type="submit" value="valider">
</form>