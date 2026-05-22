<section class="pagina-produtos">

    <h1>Nossos Produtos</h1>

    <div class="container">
        <div class="row g-4">
            <?php
            $sql = "SELECT * FROM produtos";
            $resultado = $conn->query($sql);
            if ($resultado->num_rows > 0) {
                while ($produto = $resultado->fetch_assoc()) {
            ?>
                    <div class="col-md-4">
                        <div class="card-produto">
                            <img src="assets/img/<?php echo $produto['imagem']; ?>" alt="">
                            <div class="info-produto">
                                <h3><?php echo $produto['nome']; ?></h3>
                                <p class="preco">
                                    R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?>
                                </p>
                                <a href="adicionar_carrinho.php?id=<?php echo $produto['id']; ?>">
                                    <button>Adicionar ao Carrinho</button>
                                </a>
                            </div>
                        </div>

                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>