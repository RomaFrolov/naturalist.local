<main class="main container">
  <?php
  require_once VIEWS . "/incs/nav-main.tpl.php"; ?>
  <section class="card">

    <div class="card-item">
      <form action="create_card" class="form" method="POST">

        <label for="">питання</label>
        <input type="text" name="title" >
        <!-- <?php if (isset($errors['title'])) : ?>
          <div class="invalid-feedback">
            Please choose a field.
            <?php $errors['title'] ?>
          </div>
        <?php endif; ?> -->

        <label for="">Відповідь</label>
        <textarea cols="19" rows="5" type="text" name="description" ></textarea>
        <!-- <?php if (isset($errors['description'])) : ?>

          <div class="invalid-feedback">
            Please choose a field.
            <?php $errors['description'] ?>

          </div>
        <?php endif; ?> -->

        <label for="">Категорія</label>

        <select name="categories" id="">
          <?php foreach ($category as $item) : ?>
            <option value="<?php echo ($item['id']); ?>"><?php echo ($item['category']); ?></option>
          <?php endforeach; ?>
        </select>
        <button type="submit">Створити</button>

      </form>
    </div>

  </section>
  <?php require_once VIEWS . "/incs/admin_right_nav.tpl.php";
  ?>
</main>