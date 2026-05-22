<?php
$total = 0;
?>
<div class="container carrinho-container">
    <h1>Seu Carrinho</h1>
    <?php if (!empty($carrinho)) { ?>
        <?php foreach ($carrinho as $item) {
            $produto = $item['produto'];
            $quantidade = $item['quantidade'];
            $subtotal = $produto['preco'] * $quantidade;
            $total += $subtotal;
        ?>
            <div class="card-carrinho">
                <img src="assets/img/<?php echo $produto['imagem']; ?>">
                <div class="info-carrinho">
                    <h3>
                        <?php echo $produto['nome']; ?>
                    </h3>
                    <p>
                        R$
                        <?php
                        echo number_format(
                            $produto['preco'],
                            2,
                            ',',
                            '.'
                        );
                        ?>
                    </p>
                    <div class="quantidade-box">
                        <a href="diminuir.php?id=<?php echo $produto['id']; ?>">
                            <button>-</button>
                        </a>
                        <span>
                            <?php echo $quantidade; ?>
                        </span>
                        <a href="aumentar.php?id=<?php echo $produto['id']; ?>">
                            <button>+</button>
                        </a>
                    </div>
                    <p class="subtotal">
                        Subtotal:
                        R$
                        <?php
                        echo number_format($subtotal, 2, ',', '.');
                        ?>
                    </p>
                    <a
                        class="btn-remover"
                        href="remover.php?id=<?php echo $produto['id']; ?>">
                        Remover
                    </a>
                </div>
            </div>
        <?php } ?>
        <div class="total-carrinho">

            <h2>

                Total:
                R$
                <?php echo number_format($total, 2, ',', '.'); ?>

            </h2>

            <a href="checkout.php">

                <button class="btn-finalizar">

                    Finalizar Compra

                </button>

            </a>

        </div>
    <?php } else { ?>

        <div class="carrinho-vazio">

            <h2>
                Seu carrinho está vazio 🛒
            </h2>

            <p>
                Adicione produtos para continuar comprando.
            </p>

            <a href="produtos.php" class="btn-voltar-loja">

                Voltar para loja

            </a>

        </div>

    <?php } ?>
</div>