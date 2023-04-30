<html>
  <head>
  <link rel="stylesheet" href="styles.css">
  </head>
  <body>

<?php
if (!empty($messages)) {
  print('<div id="messages">');
  foreach ($messages as $message) {
    print($message);
  }
  print('</div>');
}
?>

<div id="forms">
<form action="" method="POST">

  <label>
    Имя:<br />
    <input name="fio" class="formContent" <?php if ($errors['fio']) {print 'class="error"';} ?> value="<?php print $values['fio']; ?>" placeholder="Ваше имя (по русски)" />
  </label><br /><br />

  <label>
    Еmail:<br />
    <input name="email"  type="email" <?php if ($errors['email']) {print 'class="error"';}else{print 'class="formContent"';} ?> value="<?php print $values['email']; ?>" placeholder="Введите вашу почту" />
  </label><br /><br />

  <label>
    Год рождения:<br />
  <select name="year" <?php if ($errors['year']) {print 'class="error"';} ?> value="<?php print $values['year']; ?>">
    <?php 
    for ($i = 1922; $i <= 2022; $i++) {
      printf('<option value="%d">%d год</option>', $i, $i);
    }
    ?>
  </select>
  </label><br /><br />

  <label>
    Пол:<br/>
    <label><input type="radio" name="gender" class="formContent" <?php if ($errors['gender']) {print 'class="error"';} ?>  value="Мужской" />Мужской</label><br />
    <label><input type="radio" name="gender" class="formContent" <?php if ($errors['gender']) {print 'class="error"';} ?>  value="Женский" />Женский</label><br />
  </label>
          
  <label>
            Количество конечностей:<br />
            <label><input type="radio" name="limbs" class="formContent" value="4" <?php if ($errors['limbs']) {print 'class="error"';} ?> />4 конечности</label><br />
            <label><input type="radio" name="limbs" class="formContent" value="3" <?php if ($errors['limbs']) {print 'class="error"';} ?> />3 конечности</label><br />
            <label><input type="radio" name="limbs" class="formContent" value="2" <?php if ($errors['limbs']) {print 'class="error"';} ?> />2 конечности</label><br />
            <label><input type="radio" name="limbs" class="formContent" value="1" <?php if ($errors['limbs']) {print 'class="error"';} ?> />1 конечность</label><br />
            <label><input type="radio" name="limbs" class="formContent" value="0" <?php if ($errors['limbs']) {print 'class="error"';} ?> />Нет конечностей</label><br />
            <br />
  </label>

            <label>
                Сверхспособности:<br />
                <select name="abilities[]" class="formContent" <?php if ($errors['abilities']) {print 'class="error"';} ?> multiple="multiple">
                  <option value="Бессмертие">Бессмертие</option>
                  <option value="Прохождение сквозь стены">Прохождение сквозь стены</option>
                  <option value="Левитация">Левитация</option>
                </select>
            </label><br /><br />

            <label>
              Биография:<br />
              <textarea name="biography" class="formContent" <?php if ($errors['biography']) {print 'class="error"';} ?> value="<?php print $values['biography']; ?>" cols="100" rows="20" placeholder="Напишите вашу биографию (по русски)"></textarea>
            </label><br /><br />

            <label><input type="checkbox" checked="checked" <?php if ($errors['check']) {print 'class="error"';} ?> value="<?php print $values['check']; ?>" name="check" />
              С контрактом ознакомлен(а)</label><br /><br />

              <input type="submit" value="Отправить" />
</form>
  </div>
  </body>
</html>
