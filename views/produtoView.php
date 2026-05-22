<?php if (!isset($produto)) die("Produto não encontrado"); ?>

<section class="pagina-produto">
    <div class="container">
        <div class="produto-container">
            <div class="produto-imagem">
                <img src="assets/img/<?php echo $produto['imagem']; ?>" alt="">
            </div>
            <div class="produto-info">
                <h1>
                    <?php echo $produto['nome']; ?>
                </h1>
                <p>
                    R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?>
                </p>
                <p>
                    <?php echo $produto['descricao']; ?>
                </p>
                <a href="adicionar_carrinho.php?id=<?php echo $produto['id']; ?>">
                    <button>Adicionar ao Carrinho</button>
                </a>
            </div>
        </div>
    </div>
</section>