<?php

if(isset($_POST["submit"]))
    {
//        print_r($_POST['teddy']);
//        print_r('<br>');
//        print_r($_POST['quantidade']);
//        print_r('<br>');
//        print_r($_POST['preco']);

        include_once("config.php");

        $brinquedo = $_POST['brinquedo'];
        $quantidade = $_POST['quantidade'];
        $preco = $_POST['preco'];

        $result = mysqli_query( $conexao, "INSERT INTO pedidos(nome_brinquedo,quantidade,valor) 
        VALUES ('$brinquedo','$quantidade','$preco')");
    }
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
                    <li class="atual"><a href="loja.html">Loja</a></li>
                    <li><a href="contato.html">Contato</a></li>
                </ul>
            </nav>
          </div>
          <span class="cart">
            <ul>
                <li><a href="carrinho.php">Carrinho</a></li>
                <a href="carrinho.php"><img src="https://cdn.prod.website-files.com/5badda2935e11303a89a461e/5baf75c3bf02346640399fec_cart-icon.svg"></a>
            </ul>
          </span>
        </header>
        <section id="principal">
            <div class="container">
                <nav id="loja-cab">
                    <ul>
                        <li><a href="loja.html">Todos os Brinquedos</a></li>
                        <li   class="compra"><a href="madeira.html">Brinquedos de Madeira</a></li>
                        <li><a href="pelucia.html">Brinquedos de Pelúcia</a></li>
                        </div>
                    </ul>
                    <br>
                    <section>
                        <div class="toy-checkout">
                            <img src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5baf522457091399591a83fe_33631-9-wooden-toy-photo-min-p-500.png"width="500"height="500" >
                            <br>
                        </div>
                        <div>
                            <article class="toy-lastcheck">
                                <h2>Câmara de Madeira</h2>
                                <p>Brincar de fotógrafo estimula a criatividade, a imaginação e o desenvolvimento da coordenação motora das crianças. Nossa câmera de madeira é ideal para incentivar a exploração visual e a narrativa. Com ela, as crianças poderão criar suas próprias histórias e registrar o mundo ao seu redor de forma divertida e educativa.</p>
                                <p style="margin-top: -5px; margin-bottom: -5px;">Idade recomendada: A partir de 3 anos</p>
                                <p>Material: Madeira de alta qualidade, acabamento, tintas atóxicas.</p>
                                <h2>R$ 20.00</h2>
                                <form action="camara.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id;?>">
                                    <input type="hidden" name="brinquedo" id="brinquedo" value="Câmara de Madeira">
                                    <input type="hidden" name="preco" id="preco" value="20.00">
                                    <input type="number" name="quantidade" id="quantidade" value="1" min="1" class="quantos">
                                    <input type="submit" name="submit" class="enviar" id="adicionar-ao-carrinho">
                                </form>
                            </article>
                        </div>
                    </section>
                </nav>
            </div>
        </section>
        <footer style="margin-top: 52%;">
            <p>TOY PLANET, Copyright &copy; 2024</p>
        </footer>
    </body>
</html>