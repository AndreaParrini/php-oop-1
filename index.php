<?php

// inludo il file php che contine la classe movie
require_once __DIR__ . '/models/classMovie.php';

// inludo il file php che contine il db
require_once __DIR__ . '/db.php';

// ciclo all'interno dell'array per stampare tutti i generi di quel film.
foreach ($movies as $movie) {
    $movie->setDuration($movie->length);
}
?>

<?php include_once __DIR__ . '/components/head.php' ?>

<main>
    <section class="container">
        <div class="row">
            <?php foreach ($movies as $movie) : ?>
                <div class="col-3 mb-3">
                    <div class="card bg-dark-subtle">
                        <img src="<?php echo $movie->poster; ?>" class="card-img-top" alt="...">
                        <div class="card-body ">
                            <h5 class="card-title">
                                <?php echo $movie->title; ?>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted ">
                                <!-- Richiamo la funzione per la visualizzazione di tutti i generi e con trim cancello l'ultima virgola -->
                                <?php echo rtrim($movie->getAllGenre(), ', '); ?>
                            </h6>
                            <p class="card-text mb-1">
                                Lingua:
                                <?php echo ' ' . Movie::$language;  ?>
                            </p>
                            <p class="card-text mb-1">
                                Durata:
                                <?php echo ' ' . $movie->length . 'min';  ?>
                            </p>
                            <p class="card-text mb-1">
                                Lunghezza:
                                <?php echo ' ' . $movie->duration;  ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php include_once __DIR__ . '/components/footer.php' ?>