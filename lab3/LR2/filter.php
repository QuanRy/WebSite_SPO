<?php require_once "db.php" ?>
<section>
  </form>
  <!-- -->
  <div class="container text-center">
    <form action="index_filter.php" method="get">
      <h2>Поиск</h2>
      <div class="mb-3">
        <label>Поиск по номеру бригады:</label>
        <select name="id_brigade" class="form-control">
          <option value="">Выберите номер бригады</option>
          <option value="1" <?php if ($id_brigade == '1') : ?> selected="selected" <?php endif; ?>>1</option>
          <option value="2" <?php if ($id_brigade == '2') : ?> selected="selected" <?php endif; ?>>2</option>
          <option value="3" <?php if ($id_brigade == '3') : ?> selected="selected" <?php endif; ?>>3</option>
          <option value="4" <?php if ($id_brigade == '4') : ?> selected="selected" <?php endif; ?>>4</option>
        </select>
      </div>
      <div class="mb-3">
        <label>Поиск по ФИО сборщика:</label>
        <input type="text" name="fio" placeholder="Введите ФИО сборщика" value="<?php if ($fio != "0") echo $fio ?>" class="form-control">
      </div>
      <div class="mb-3">
        <label>Поиск по характеристике:</label>
        <textarea class="form-control" name="characteristic" placeholder="Введите характеристику сборщика"><?php if ($characteristic != "0") echo $characteristic ?></textarea>
      </div>
      <div class="mb-3">
        <label>Поиск по году рождения сборщика:</label>
        <input type="text" name="date_birth" placeholder="Введите год рождения сборщика" value="<?php if ($date_birth != "0") echo $date_birth ?>" class="form-control">
      </div>
      <input type="submit" value="Применить фильтр" class="btn btn-primary">
      <input type="submit" name="clearFilter" value="Очистить фильтр" class="btn btn-danger">
    </form>
  </div>
  <!-- -->
  <div class="container text-center mt-3">
    <?php if (count($result) > 0) : ?>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Фото</th>
            <th scope="col">ФИО</th>
            <th scope="col">Номер бригады</th>
            <th scope="col">Характеристика</th>
            <th scope="col">Год рождения сборщика</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($result as $item) : ?>
            <tr>
              <th scope="row"><img src="img/fermers/<?= $item['photo'] ?>" style="max-width: 150px;"></th>
              <td><?= $item['fio'] ?></td>
              <td><?= $item['id_brigade'] ?></td>
              <td><?= $item['characteristic'] ?></td>
              <td><?= $item['date_birth'] ?></td>
            </tr>
          <?php endforeach; ?>

        </tbody>
      </table>
    <?php endif; ?>
  </div>
</section>