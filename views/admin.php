<form method="post" action="index.php?action=administrer"> 

    <?php foreach ($signe as $k => $v): ?>
    <option value="<?= $k ?>"><?= $k ?></option>
    <input type="text" value="<?= $v ?>"></option>
    <?php endforeach ?>
    
    </br>
    </br>

    <input type="submit" value="OK">
<form>