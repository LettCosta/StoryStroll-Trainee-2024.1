<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Lista de Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/admin-lista-de-posts.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <main>
        <div class="cabecalho">
            <button type="button" class="botoes-fora-tabela" id="botao-criar-post"
                onclick="abrirModal('adiciona-post')"><i class="bi bi-plus-lg"></i> Criar post</button>
            <p id="titulo-pg">Lista de posts</p>
        </div>

        <div class="container-tabela">
            <table class="tabela-posts">
                <thead>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Data</th>
                    <th class="acoes"></th>
                    <th class="acoes"></th>
                    <th class="acoes"></th>
                </thead>
                <tbody>
                    <tr class="linha-normal">
                        <td class="espaco-id">01</td>
                        <td class="espaco-titulo">Capitu realmente traiu?</td>
                        <td class="espaco-autor">João Victor Nicácio Silva</td>
                        <td class="espaco-data">02/05/2024</td>
                        <td class="espaco-visualizar"><button type="button" class="botao-visualizar"
                                onclick="abrirModal('visualizar')"><i class="bi bi-eye-fill"></i><br>Visualizar</button>
                        </td>
                        <td class="espaco-editar"><button type="button" class="botao-editar"
                                onclick="abrirModal('editar')"><i class="bi bi-pencil-square"></i><br>Editar</button>
                        </td>
                        <td class="espaco-excluir"><button type="button" class="botao-excluir"
                                onclick="abrirModal('rm-post')"><i class="bi bi-trash3-fill"></i><br>Deletar</button>
                        </td>
                    </tr>
                    <tr class="linha-mobile">
                        <td class="espaco-id" rowspan="2">01</td>
                        <td class="espaco-titulo">Capitu realmente traiu?</td>
                        <td class="espaco-autor">João Victor Nicácio Silva</td>
                        <td class="espaco-data" rowspan="2">02/05/2024</td>
                        <td class="espaco-visualizar"><button type="button" class="botao-visualizar"
                                onclick="abrirModal('visualizar')"><i class="bi bi-eye-fill"></i><br>Visualizar</button>
                        </td>
                        <td class="espaco-editar"><button type="button" class="botao-editar"
                                onclick="abrirModal('editar')"><i class="bi bi-pencil-square"></i><br>Editar</button>
                        </td>
                        <td class="espaco-excluir"><button type="button" class="botao-excluir"
                                onclick="abrirModal('rm-post')"><i class="bi bi-trash3-fill"></i><br>Deletar</button>
                        </td>
                    </tr>
                    <tr class="botoes-mobile">
                        <td class="linha-botoes" colspan="2">
                            <div class="container-botoes">
                                <button type="button" class="botao-visualizar" onclick="abrirModal('visualizar')"><i
                                        class="bi bi-eye-fill"></i><br>Visualizar</button>
                                <button type="button" class="botao-editar" onclick="abrirModal('editar')"><i
                                        class="bi bi-pencil-square"></i><br>Editar</button>
                                <button type="button" class="botao-excluir" onclick="abrirModal('rm-post')"><i
                                        class="bi bi-trash3-fill"></i><br>Deletar</button>
                            </div>
                        </td>
                    </tr>
                    <tr class="linha-normal">
                        <td class="espaco-id">02</td>
                        <td class="espaco-titulo">Resenha sobre Memórias Póstumas de Brás Cubas</td>
                        <td class="espaco-autor">Luiz Eduardo de Souza</td>
                        <td class="espaco-data">01/05/2024</td>
                        <td class="espaco-visualizar"><button type="button" class="botao-visualizar"
                                onclick="abrirModal('visualizar')"><i class="bi bi-eye-fill"></i><br>Visualizar</button>
                        </td>
                        <td class="espaco-editar"><button type="button" class="botao-editar"
                                onclick="abrirModal('editar')"><i class="bi bi-pencil-square"></i><br>Editar</button>
                        </td>
                        <td class="espaco-excluir"><button type="button" class="botao-excluir"
                                onclick="abrirModal('rm-post')"><i class="bi bi-trash3-fill"></i><br>Deletar</button>
                        </td>
                    </tr>
                    <tr class="linha-mobile">
                        <td class="espaco-id" rowspan="2">02</td>
                        <td class="espaco-titulo">Resenha sobre Memórias Póstumas de Brás Cubas</td>
                        <td class="espaco-autor">Luiz Eduardo de Souza</td>
                        <td class="espaco-data" rowspan="2">01/05/2024</td>
                        <td class="espaco-visualizar"><button type="button" class="botao-visualizar"
                                onclick="abrirModal('visualizar')"><i class="bi bi-eye-fill"></i><br>Visualizar</button>
                        </td>
                        <td class="espaco-editar"><button type="button" class="botao-editar"
                                onclick="abrirModal('editar')"><i class="bi bi-pencil-square"></i><br>Editar</button>
                        </td>
                        <td class="espaco-excluir"><button type="button" class="botao-excluir"
                                onclick="abrirModal('rm-post')"><i class="bi bi-trash3-fill"></i><br>Deletar</button>
                        </td>
                    </tr>
                    <tr class="botoes-mobile">
                        <td class="linha-botoes" colspan="2">
                            <div class="container-botoes">
                                <button type="button" class="botao-visualizar" onclick="abrirModal('visualizar')"><i
                                        class="bi bi-eye-fill"></i><br>Visualizar</button>
                                <button type="button" class="botao-editar" onclick="abrirModal('editar')"><i
                                        class="bi bi-pencil-square"></i><br>Editar</button>
                                <button type="button" class="botao-excluir" onclick="abrirModal('rm-post')"><i
                                        class="bi bi-trash3-fill"></i><br>Deletar</button>
                            </div>
                        </td>
                    </tr>
                    <tr class="linha-normal">
                        <td class="espaco-id">03</td>
                        <td class="espaco-titulo">O melhor livro que já li</td>
                        <td class="espaco-autor">Luiza Gomes Aguiar</td>
                        <td class="espaco-data">07/05/2024</td>
                        <td class="espaco-visualizar"><button type="button" class="botao-visualizar"
                                onclick="abrirModal('visualizar')"><i class="bi bi-eye-fill"></i><br>Visualizar</button>
                        </td>
                        <td class="espaco-editar"><button type="button" class="botao-editar"
                                onclick="abrirModal('editar')"><i class="bi bi-pencil-square"></i><br>Editar</button>
                        </td>
                        <td class="espaco-excluir"><button type="button" class="botao-excluir"
                                onclick="abrirModal('rm-post')"><i class="bi bi-trash3-fill"></i><br>Deletar</button>
                        </td>
                    </tr>
                    <tr class="linha-mobile">
                        <td class="espaco-id" rowspan="2">03</td>
                        <td class="espaco-titulo">O melhor livro que já li</td>
                        <td class="espaco-autor">Luiza Gomes Aguiar</td>
                        <td class="espaco-data" rowspan="2">07/05/2024</td>
                        <td class="espaco-visualizar"><button type="button" class="botao-visualizar"
                                onclick="abrirModal('visualizar')"><i class="bi bi-eye-fill"></i><br>Visualizar</button>
                        </td>
                        <td class="espaco-editar"><button type="button" class="botao-editar"
                                onclick="abrirModal('editar')"><i class="bi bi-pencil-square"></i><br>Editar</button>
                        </td>
                        <td class="espaco-excluir"><button type="button" class="botao-excluir"
                                onclick="abrirModal('rm-post')"><i class="bi bi-trash3-fill"></i><br>Deletar</button>
                        </td>
                    </tr>
                    <tr class="botoes-mobile">
                        <td class="linha-botoes" colspan="2">
                            <div class="container-botoes">
                                <button type="button" class="botao-visualizar" onclick="abrirModal('visualizar')"><i
                                        class="bi bi-eye-fill"></i><br>Visualizar</button>
                                <button type="button" class="botao-editar" onclick="abrirModal('editar')"><i
                                        class="bi bi-pencil-square"></i><br>Editar</button>
                                <button type="button" class="botao-excluir" onclick="abrirModal('rm-post')"><i
                                        class="bi bi-trash3-fill"></i><br>Deletar</button>
                            </div>
                        </td>
                    </tr>
                    <tr class="linha-normal">
                        <td class="espaco-id">04</td>
                        <td class="espaco-titulo">Incrível!</td>
                        <td class="espaco-autor">Marcelo Juan</td>
                        <td class="espaco-data">01/05/2024</td>
                        <td class="espaco-visualizar"><button type="button" class="botao-visualizar"
                                onclick="abrirModal('visualizar')"><i class="bi bi-eye-fill"></i><br>Visualizar</button>
                        </td>
                        <td class="espaco-editar"><button type="button" class="botao-editar"
                                onclick="abrirModal('editar')"><i class="bi bi-pencil-square"></i><br>Editar</button>
                        </td>
                        <td class="espaco-excluir"><button type="button" class="botao-excluir"
                                onclick="abrirModal('rm-post')"><i class="bi bi-trash3-fill"></i><br>Deletar</button>
                        </td>
                    </tr>
                    <tr class="linha-mobile">
                        <td class="espaco-id" rowspan="2">04</td>
                        <td class="espaco-titulo">Incrível!</td>
                        <td class="espaco-autor">Marcelo Juan</td>
                        <td class="espaco-data" rowspan="2">01/05/2024</td>
                        <td class="espaco-visualizar"><button type="button" class="botao-visualizar"
                                onclick="abrirModal('visualizar')"><i class="bi bi-eye-fill"></i><br>Visualizar</button>
                        </td>
                        <td class="espaco-editar"><button type="button" class="botao-editar"
                                onclick="abrirModal('editar')"><i class="bi bi-pencil-square"></i><br>Editar</button>
                        </td>
                        <td class="espaco-excluir"><button type="button" class="botao-excluir"
                                onclick="abrirModal('rm-post')"><i class="bi bi-trash3-fill"></i><br>Deletar</button>
                        </td>
                    </tr>
                    <tr class="botoes-mobile">
                        <td class="linha-botoes" colspan="2">
                            <div class="container-botoes">
                                <button type="button" class="botao-visualizar" onclick="abrirModal('visualizar')"><i
                                        class="bi bi-eye-fill"></i><br>Visualizar</button>
                                <button type="button" class="botao-editar" onclick="abrirModal('editar')"><i
                                        class="bi bi-pencil-square"></i><br>Editar</button>
                                <button type="button" class="botao-excluir" onclick="abrirModal('excluir')"><i
                                        class="bi bi-trash3-fill"></i><br>Deletar</button>
                            </div>
                        </td>
                    </tr>
                    <tr class="linha-normal">
                        <td class="espaco-id">05</td>
                        <td class="espaco-titulo">Memórias Póstumas de Brás Cubas</td>
                        <td class="espaco-autor">Joaquim Faria de Souza Filho</td>
                        <td class="espaco-data">05/05/2024</td>
                        <td class="espaco-visualizar"><button type="button" class="botao-visualizar"
                                onclick="abrirModal('visualizar')"><i class="bi bi-eye-fill"></i><br>Visualizar</button>
                        </td>
                        <td class="espaco-editar"><button type="button" class="botao-editar"
                                onclick="abrirModal('editar')"><i class="bi bi-pencil-square"></i><br>Editar</button>
                        </td>
                        <td class="espaco-excluir"><button type="button" class="botao-excluir"
                                onclick="abrirModal('rm-post')"><i class="bi bi-trash3-fill"></i><br>Deletar</button>
                        </td>
                    </tr>
                    <tr class="linha-mobile">
                        <td class="espaco-id" rowspan="2">05</td>
                        <td class="espaco-titulo">Memórias Póstumas de Brás Cubas</td>
                        <td class="espaco-autor">Joaquim Faria de Souza Filho</td>
                        <td class="espaco-data" rowspan="2">05/05/2024</td>
                        <td class="espaco-visualizar"><button type="button" class="botao-visualizar"
                                onclick="abrirModal('visualizar')"><i class="bi bi-eye-fill"></i><br>Visualizar</button>
                        </td>
                        <td class="espaco-editar"><button type="button" class="botao-editar"
                                onclick="abrirModal('editar')"><i class="bi bi-pencil-square"></i><br>Editar</button>
                        </td>
                        <td class="espaco-excluir"><button type="button" class="botao-excluir"><i
                                    onclick="abrirModal('rm-post')"><i
                                        class="bi bi-trash3-fill"></i><br>Deletar</button></td>
                    </tr>
                    <tr class="botoes-mobile">
                        <td class="linha-botoes" colspan="2">
                            <div class="container-botoes">
                                <button type="button" class="botao-visualizar" onclick="abrirModal('visualizar')"><i
                                        class="bi bi-eye-fill"></i><br>Visualizar</button>
                                <button type="button" class="botao-editar" onclick="abrirModal('editar')"><i
                                        class="bi bi-pencil-square"></i><br>Editar</button>
                                <button type="button" class="botao-excluir" onclick="abrirModal('excluir')"><i
                                        class="bi bi-trash3-fill"></i><br>Deletar</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="paginacao">
            <button class="botoes-fora-tabela" id="botao-voltar"><i class="bi bi-chevron-left"></i>Voltar</button>
            <button class="botoes-fora-tabela" id="botao-avancar">Avançar<i class="bi bi-chevron-right"></i></button>
        </div>

        <!-- MODAL DE VISUALIZAÇÃO - INÍCIO -->

        <div class="cont-modal" id="visualizar">

            <div class="content">
                <div class="content-vizu">
                    <div class="cima">
                        <div class="direita">
                            <h3>Título do livro</h3>
                            <p>Livro</p>
                            <h3>Autor do livro</h3>
                            <p>Nome</p>
                            <h3>Ano de publicação</h3>
                            <p>1990</p>
                        </div>
                        <div class="esquerda">
                            <h3>Sinopse</h3>
                            <textarea readonly>Sinopse</textarea>
                            <br>
                            <h3>Nota média da internet</h3>
                            <div class="nota">
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                            </div>

                        </div>

                    </div>
                    <hr>
                    <div class="baixo">
                        <div class="esquerda">
                            <h3>Autor</h1>
                                <p>Pedro_123</p>
                                <h3>Título</h1>
                                    <p>Os Demônios</p>
                                    <div class="nota">
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                    </div>
                                    <h3>Review</h1>
                                        <textarea rows="14" cols="50"
                                            readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce commodo auctor erat, vel accumsan tortor aliquet ac. Donec vel odio eu quam eleifend commodo et quis velit. Nulla sollicitudin justo quis massa faucibus vulputate. Nam non augue leo. Aenean feugiat, lacus molestie facilisis blandit, dui turpis condimentum nisl, ut convallis nunc tortor nec enim. Nullam vestibulum, diam vitae commodo fermentum, mauris lorem sodales mauris, ac lacinia leo risus in tortor. Cras metus felis, rutrum eget vehicula et, elementum ut nunc. Quisque feugiat orci vitae maximus accumsan. Aliquam posuere nisi sed enim dictum, in dictum enim varius. Suspendisse sagittis ut nibh ac efficitur. Duis et nulla a tellus hendrerit euismod. Etiam egestas non dui eu elementum. Curabitur aliquam sed ex id mollis. Aenean a risus nisl.</textarea>
                        </div>
                        <div class="direita">
                            <img src="../../../public/assets/capa.jpg">
                            <h3>Data da leitura</h3>
                            <p>02/05/2024</p>
                            <h3>Data da publicação</h3>
                            <p>05/05/2024</p>
                        </div>
                    </div>
                </div>
                <button class="fecha" onclick="fecharModal('visualizar')">&times;</button>
            </div>
        </div>

        <!-- MODAL DE VISUALIZAÇÃO - FIM -->

        <!-- MODAL DE EDIÇÃO - INÍCIO -->

        <div class="cont-modal" id="editar">

            <div class="content">

                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="livro">
                        <div class="direita">
                            <label for="titulo-livro">Título do livro</label>
                            <input type="text" id="titulo-livro" name="titulo-livro" placeholder="Título do livro"
                                value="Livro">
                            <label for="autor-livro">Nome do autor</label>
                            <input type="text" id="autor-livro" name="autor-livro" placeholder="Nome do autor do livro"
                                value="autor">
                            <label for="ano-pub">Ano de publicação</label>
                            <input name="ano-pub" id="ano-pub" type="number" placeholder="Ano de publicação" max="2024"
                                value="1990">
                        </div>
                        <div class="esquerda">
                            <label for="sinopse">Sinopse</label><br>
                            <textarea name="sinopse" rows="7" cols="50" id="sinopse">Sinopse</textarea>
                            <br>
                            <label>Nota média da internet</label><br>
                            <div class="rating">
                                <label>
                                    <input type="radio" name="nota-net" value="1" />
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="nota-net" value="2" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="nota-net" value="3" checked />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="nota-net" value="4" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="nota-net" value="5" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                            </div><br>

                        </div>
                    </div>
                    <hr>
                    <div class="formulario">

                        <div class="esquerda">
                            <label for="autor">Autor</label><br>
                            <input type="text" id="autor" name="autor" value="pedro_123" readonly><br>
                            <label for="titulo">Título</label><br>
                            <input type="text" id="titulo" name="titulo" placeholder="Título da sua review"
                                value="Título">
                            <div class="rating">
                                <label>
                                    <input type="radio" name="stars" value="1" />
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="stars" value="2" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="stars" value="3" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="stars" value="4" checked="checked" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="stars" value="5" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                            </div>
                            <br>
                            <label for="conteudo">Review</label><br>
                            <textarea type="text" id="conteudo" name="conteudo" placeholder="Conteudo da sua review"
                                rows="7" cols="50">Sua review</textarea>
                        </div>

                        <div class="direita">
                            <div class="img-prev"><img id="preview2" src="../../../public/assets/capa.jpg"
                                    alt="Pré-visualização da imagem">
                            </div>
                            <label for="img">Selecione uma imagem:</label>
                            <input type="file" id="img-edita" name="img" accept="image/*">
                            <label for="data">Data da leitura:</label>
                            <input type="date" id="prev-data" value="2024-03-14" name="data">
                        </div>

                    </div>

                    <input type="submit" value="Salvar">

                </form>

                <button class="fecha" onclick="fecharModal('editar')">&times;</button>

            </div>

        </div>

        <!-- MODAL DE EDIÇÃO - FIM -->

        <!-- MODAL DE CRIAÇÃO - INÍCIO -->

        <div id="adiciona-post" class="cont-modal">
            <div class="content">

                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="livro">
                        <div class="direita">
                            <label for="titulo-livro">Título do livro</label>
                            <input type="text" id="titulo-livro" name="titulo-livro" placeholder="Título do livro">
                            <label for="autor-livro">Nome do autor</label>
                            <input type="text" id="autor-livro" name="autor-livro" placeholder="Nome do autor do livro">
                            <label for="ano-pub">Ano de publicação</label>
                            <input name="ano-pub" id="ano-pub" type="number" placeholder="Ano de publicação" max="2024">
                        </div>
                        <div class="esquerda">
                            <label for="sinopse">Sinopse</label><br>
                            <textarea name="sinopse" rows="7" cols="50" id="sinopse"></textarea>
                            <br>
                            <label>Nota média da internet</label><br>
                            <div class="rating">
                                <label>
                                    <input type="radio" name="nota-net" value="1" />
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="nota-net" value="2" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="nota-net" value="3" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="nota-net" value="4" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="nota-net" value="5" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                            </div><br>

                        </div>
                    </div>
                    <hr>
                    <div class="formulario">
                        <div class="esquerda">
                            <label for="autor">Autor</label><br>
                            <input type="text" id="autor" name="autor" value="pedro_123" readonly><br>
                            <label for="titulo">Título</label><br>
                            <input type="text" id="titulo" name="titulo" placeholder="Título da sua review"><br>
                            <label>Sua nota</label><br>
                            <div class="rating">
                                <label>
                                    <input type="radio" name="nota-user" value="1" />
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="nota-user" value="2" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="nota-user" value="3" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="nota-user" value="4" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="nota-user" value="5" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                            </div>
                            <br>
                            <label for="conteudo">Review</label><br>
                            <textarea type="text" id="conteudo" name="conteudo" placeholder="Conteudo da sua review"
                                rows="7" cols="50"></textarea>
                        </div>
                        <div class="direita">
                            <div class="img-prev"><img id="preview" src="" alt="Pré-visualização da imagem"
                                    style="display: none;">
                            </div>
                            <label for="img">Selecione uma imagem:</label>
                            <input type="file" id="img-adc" name="img" accept="image/*">
                            <label for="data">Data da leitura:</label>
                            <input type="date" id="data-adc" name="data">
                            <input type="date" style="display: none;" id="dataat" name="dataat">
                        </div>
                    </div>
                    <input type="submit" value="Publicar">
                </form>
                <a class="fecha" href="#" onclick="fecharModal('adiciona-post')">&times;</a>
            </div>
        </div>

        <!-- MODAL DE CRIAÇÃO - INÍCIO -->
        <!-- MODAL DE DELETAR - INICIO -->
        <div id="rm-post" class="cont-modal">
            <div class="content">
                <a class="fecha" onclick="fecharModal('rm-post')" href="#">&times;</a>
                <div class="quebra"></div>
                <form action="/delete/" method="post">
                    <input type="hidden" value="id-do-post">
                    <div class="rm-ct">
                        <p>Deseja excluir a publicação?</p>
                        <img src="../../../public/assets/Inbox cleanup-rafiki (1).svg">
                        <div class="botoes-rm">
                            <input type="submit" value="Excluir publicação">
                            <button class="cancelar" onclick="fecharModal('rm-post')" type="button">Cancelar</button>

                        </div>

                    </div>
                </form>
            </div>
        </div>
        <!-- MODAL DE DELETAR - FIM -->
    </main>
</body>
<script src="../../../public/js/admin-lista-de-posts.js"></script>

</html>