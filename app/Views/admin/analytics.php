<?= $this->extend('templates/admintemplate') ?>


<?= $this->section('content') ?>


	<div class="container is-max-widescreen mt-5">
        <div class="columns">
            <div class="column is-3">
               <?=$this->include('templates/adminSidebar') ?>
            </div>
            <div class="column is-9">
            	<h4 class="title has-text-link"><?= esc($title) ?></h4>
            		<hr class="navbar-divider"/>
                <section class="info-tiles">
                    <div class="tile is-ancestor has-text-centered">
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">439k</p>
                                <p class="subtitle">Users</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">59k</p>
                                <p class="subtitle">Products</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">3.4k</p>
                                <p class="subtitle">Open Orders</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">19</p>
                                <p class="subtitle">Exceptions</p>
                            </article>
                        </div>
                    </div>
                </section>
                
            </div>
        </div>
    </div>


<?= $this->endSection() ?>