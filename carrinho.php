<?php
include_once("config.php");

$sql = "SELECT * FROM pedidos ORDER BY idpedidos DESC";

$result = $conexao->query( $sql );

//print_r( $result );

?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="Loja de Brinquedos acessível a crianças de todas as idades.">
        <meta name="keywords" content="Loja, Brinquedos, Crianças, Adolescentes">
        <meta name="author" content="Pedro Rodrigues">
        <title>Toy Planet</title>
        <link rel="stylesheet" href="E-Commerce.css" type="text/css">
        <style>
            .m-5{
                background-color: white;
                border-radius: 5px;
                margin-top: -7cm;
                margin-right: 10.2cm;
                margin-left: 15px;
                padding-bottom: 2.98cm;
            }
            .table{
                font-family: Arial, Helvetica, sans-serif;
                text-align: center;
            }
            .table th{
                padding-right: 20px;
                padding-left: 20px;
            }
        </style>
    </head>
    <body>
        <div id="top">
            Numero: 31 9999-9999 Email: toyplanet@yahoo.com
        </div>
        <header>
            <div id="title">
                <h1><span class="contorno">TOY</span> PLANET</h1>
            </div>
            <div class="container">
            <nav>
                <ul> 
                    <li><a href="index.html">Home</a></li>
                    <li><a href="loja.html">Loja</a></li>
                    <li><a href="contato.html">Contato</a></li>
                </ul>
            </nav>
          </div>
          <span class="cart">
            <ul>
                <li class="atual"><a href="carrinho.php">Carrinho</a></li>
                <a href="carrinho.php"><img src="https://cdn.prod.website-files.com/5badda2935e11303a89a461e/5baf75c3bf02346640399fec_cart-icon.svg"></a>
            </ul>
          </span>
        </header>
       <section>
        <article id="checkout">
            <h1>Resumo da Compra</h1>
            <div style="background-color: #a5c926; height: 1px; margin: -15px -5px 0 -5px;"></div>
            <p>Produto: </p>
            <p>Frete: </p>
            <p>Cupons: </p>
            <h1>Total: </h1>
            <form method="post">
                <input type="submit" value="Continuar a Compra">
            </form>
        </article>
            <div class="m-5">
                <table class="table">
                <h1>Seus Produtos:</h1>
                    <thead>
                        <tr>
                            <th scope="col">ID do Pedido:</th>
                            <th scope="col">Produto:</th>
                            <th scope="col">Quantidade:</th>
                            <th scope="col">Valor:</th>
                            <th scope="col">...</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         while( $pedidos = mysqli_fetch_assoc( $result ) ) 
                            {
                                echo "<tr>";
                                echo "<td>".$pedidos['idpedidos']."</td>";
                                echo "<td>".$pedidos['nome_brinquedo']."</td>";
                                echo "<td>".$pedidos['quantidade']."</td>";
                                echo "<td>R$" . number_format($pedidos['valor'], 2, ',', '.') . "</td>";
                                echo "<td>
                                <a class='btn btn-sm btn-danger' href='delete.php?id=$pedidos[idpedidos]'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                        <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                    </svg>
                                </a>
                                </td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                    </table>
            </div>
       </section>
        <footer style="margin-top: 33.05%;">
            <p>TOY PLANET, Copyright &copy; 2024</p>
        </footer>
    </body>
</html>