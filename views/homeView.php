<?php if (!isset($produtos)) die("Produtos não encontrados"); ?>

<!-- HERO -->

<section class="hero">

    <div class="hero-overlay">

        <div class="hero-content">

            <span class="hero-tag">
                STREETWEAR • MINIMAL • PREMIUM
            </span>

            <h1>
                USE TRECHOS.
            </h1>

            <p>
                Vista sua identidade.
            </p>

            <a href="produtos.php">

                <button>
                    Explorar Coleção
                </button>

            </a>

        </div>

    </div>

</section>

<!-- DESTAQUE -->

<section class="destaque">

    <div class="destaque-img">

        <img src="assets/img/banner.png" alt="">

    </div>

    <div class="destaque-texto">

        <span class="mini-tag">
            NOVA COLEÇÃO
        </span>

        <h2>
            Feito para quem vive a rua.
        </h2>

        <p>
            Modelagens modernas,
            tecidos premium e estética minimalista
            para elevar seu estilo em qualquer ocasião.
        </p>

        <a href="produtos.php">

            <button>
                Ver Produtos
            </button>

        </a>

    </div>

</section>

<!-- PRODUTOS -->

<section class="mini-produtos">

    <div class="titulo-produtos">

        <span>
            DESTAQUES
        </span>

        <h2>
            Peças em alta
        </h2>

    </div>

    <div class="container">

        <div class="row g-4">

            <?php

            $contador = 0;

            while($produto = $produtos->fetch_assoc()){

                if($contador >= 3) break;

                $contador++;

            ?>

            <div class="col-md-4">

                <div class="card-produto">

                    <img src="assets/img/<?php echo $produto['imagem']; ?>" alt="">

                    <div class="info-produto">

                        <h3>
                            <?php echo $produto['nome']; ?>
                        </h3>

                        <a href="produto.php?id=<?php echo $produto['id']; ?>">

                            <button>
                                Ver Produto
                            </button>

                        </a>

                    </div>

                </div>

            </div>

            <?php } ?>

        </div>

    </div>

</section>

<!-- BANNER FINAL -->

<section class="banner-final">

    <div class="banner-final-overlay">

        <span>
            STREET CULTURE
        </span>

        <h2>
            USE TRECHOS
        </h2>

        <p>
            Minimalismo, autenticidade e atitude.
        </p>

        <a href="produtos.php">

            <button>
                Comprar Agora
            </button>

        </a>

    </div>

</section>