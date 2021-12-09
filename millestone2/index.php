<?php
require __DIR__ . '/layouts/head.php';
require __DIR__ . '/api/dischi.php';
 ?>

<main>
    <section class="main_container">
        <div class="row">
            <?php   foreach($dischi as $disco)  : ?>
                <div class="card_column">
                    <!-- card -->
                    <div class="card">              
                        <!-- immgaine  -->
                        <?php echo "<img src = '".$disco['poster']."'>"; ?>
                        <!-- titolo -->
                        <h2>
                            <?php echo $disco['title']; ?>
                        </h2>
                        <!-- artista -->
                        <h5>
                            <?php echo $disco['author']; ?>
                        </h5>
                        <!-- anno d'uscita  -->
                        <h6>
                            <?php echo $disco['year']; ?>
                        </h6>
                    </div>
                    <!-- /card -->
                </div>
            <?php endforeach ?>
        </div>
    </section>
</main>

<?php require __DIR__ . '/layouts/footer.php'; ?>
