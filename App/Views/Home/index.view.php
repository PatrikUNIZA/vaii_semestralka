<?php

/** @var \Framework\Support\LinkGenerator $link */
?>

<div class="main-container container">
    <section class="page-title">
        <h2>Prehľad rozvrhu</h2>
        <p>Vitajte v systéme pre správu rozvrhov.</p>
    </section>

    <section class="cards-grid">
        <div class="card">
            <div>
                <h3>Môj aktuálny rozvrh</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque odio lorem, laoreet at cursus sed, congue et eros.</p>
            </div>
            <a href="<?= $link->url('schedule.index') ?>" class="btn">Prejsť na úpravu rozvrhu</a>
        </div>
        <div class="card">
            <div>
                <h3>Získať prehľad predmetov</h3>
                <p>Prezrite si dostupné predmety pre tento semester a ich časové termíny a miestnosti.</p>
            </div>
            <a href="#" class="btn btn-secondary">Katalóg predmetov</a>
        </div>
        <div class="card">
            <div>
                <h3>Oznámenia a zmeny</h3>
                <p>Žiadne nové zmeny v rozvrhu pre tento týždeň.</p>
            </div>
        </div>
    </section>
</div>
