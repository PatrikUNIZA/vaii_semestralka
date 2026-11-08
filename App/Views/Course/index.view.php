<?php

/** @var \Framework\Support\LinkGenerator $link */
/** @var \App\Models\Course[] $courses */
?>

<div class="main-container container">
    <section class="page-title">
        <h2>Predmety</h2>
        <p>Zoznam predmetov uložených v databáze.</p>
    </section>

    <p>
        <a href="<?= $link->url('course.add') ?>" class="btn">+ Pridať predmet</a>
    </p>

    <div class="table-wrapper">
        <table class="data-table">
            <thead>
                <tr>
                    <th>Kód</th>
                    <th>Názov</th>
                    <th>Popis</th>
                    <th>Kapacita</th>
                    <th>Akcie</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($courses as $course) : ?>
                    <tr>
                        <td><?= e($course->getCode()) ?></td>
                        <td><?= e($course->getName()) ?></td>
                        <td><?= e($course->getDescription()) ?></td>
                        <td><?= e($course->getCapacity()) ?></td>
                        <td class="actions">
                            <a href="<?= $link->url('course.edit', ['id' => $course->getId()]) ?>" class="btn btn-sm">Upraviť</a>
                            <form method="post" action="<?= $link->url('course.delete') ?>">
                                <input type="hidden" name="id" value="<?= $course->getId() ?>">
                                <button type="submit" class="btn btn-secondary btn-sm">Vymazať</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
