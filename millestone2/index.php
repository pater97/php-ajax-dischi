<?php
require __DIR__ . '/layouts/head.php';
 ?>


<main id="app">
    <section class="main_container">
        <div class="row">
                <div class="card_column" v-for="disco in dischi" :key="dischi.id">
                    <!-- card -->
                    <div class="card">              
                        <!-- immgaine  -->
                        <img :src="disco.poster" alt="">
                        <!-- titolo -->
                        <h2>
                            {{disco.title}}
                        </h2>
                        <!-- artista -->
                        <h5>
                            {{disco.author}}
                        </h5>
                        <!-- anno d'uscita  -->
                        <h6>
                            {{disco.year}}
                        </h6>
                    </div>
                    <!-- /card -->
                </div>
        </div>
    </section>
</main>


<?php require __DIR__ . '/layouts/footer.php'; ?>
