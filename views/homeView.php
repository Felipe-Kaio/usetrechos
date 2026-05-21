<?php if (!isset($produtos)) die("Produtos não encontrados"); ?>

<section class="banner">
    <div class="banner-content">
        <h1>USE TRECHOS.</h1>
        <p>
            Moda urbana premium.
        </p>
        <button>Comprar Agora</button>
    </div>
</section>
<section class="produtos">
    <div class="container">
        <div class="row g-4">

            <?php while($produto = $produtos->fetch_assoc()){ ?>
                <div class="col-md-4">
                    <div class="card-produto">
                        <img src="assets/img/<?php echo $produto['imagem']; ?>" alt="">
                        <div class="info-produto">
                            <h3>
                                <?php echo $produto['nome']; ?>
                            </h3>
                            <button>Comprar Agora</button>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>