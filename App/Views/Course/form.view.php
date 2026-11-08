<?php

/** @var \Framework\Support\LinkGenerator $link */
/** @var \App\Models\Course $course */
?>

<div class="main-container container">
    <section class="page-title">
        <?php if ($course->getId()) : ?>
            <h2>Úprava predmetu</h2>
        <?php else : ?>
            <h2>Nový predmet</h2>
        <?php endif; ?>
    </section>

    <form method="post" action="<?= $link->url('course.save') ?>" class="form">
        <input type="hidden" name="id" value="<?= $course->getId() ?>">

        <label for="name">Názov</label>
        <input type="text" id="name" name="name" value="<?= e($course->getName()) ?>" required>

        <label for="code">Kód</label>
        <input type="text" id="code" name="code" value="<?= e($course->getCode()) ?>" required>

        <label for="description">Popis</label>
        <textarea id="description" name="description" rows="4"><?= e($course->getDescription()) ?></textarea>

        <label for="capacity">Kapacita</label>
        <input type="number" id="capacity" name="capacity" value="<?= e($course->getCapacity()) ?>" min="0" required>

        <div class="form-actions">
            <button type="submit" class="btn">Uložiť</button>
            <a href="<?= $link->url('course.index') ?>" class="btn btn-secondary">Späť</a>
        </div>
    </form>
</div>
