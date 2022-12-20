<?php include ("header.php"); ?>

<section class="int-quadro-de-vagas">
    <div class="topo-interna">
        <figure>
            <img src="assets/img/bg-topo-interna.jpg" class="d-md-block d-none" alt="imagem destaque">
            <img src="assets/img/bg-topo-interna-mobile.jpg" class="d-md-none d-block" alt="imagem destaque">
            <img src="assets/img/detalhe-topo-interna.png" alt="detalhe do topo">
            <div class="position-relative">
                <figcaption class="d-md-none d-block">
                    <h1>Trabalhe Conosco</h1>
                </figcaption>
            </div>
        </figure>
    </div>

    <div class="bloco-quadro-de-vagas">
        <div class="container">
            <h2 class="titulo-interna">Quadro de vagas</h2>
            <div class="content-interna">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam viverra</p>
            </div>
            <div class="box-vagas">
                <div class="group">
                    <label for="vaga">Tipo de vaga</label> 
                    <select id="vaga">
                        <option selected>Todas</option>
                        <option value="1">Clínico geral</option>
                        <option value="2">Enfermeiro</option>
                        <option value="3">Auxiliar</option>
                        <option value="4">Técnico</option>
                    </select>
                </div>
                <div class="group">
                    <label for="local">Local</label>
                    <select id="local">
                        <option selected>Todas</option>
                        <option value="1">Recife</option>
                        <option value="2">Caruaru</option>
                        <option value="3">Petrolina</option>
                    </select>
                </div>
                <div class="group">
                    <label for="area">Área</label>
                    <select id="area">
                        <option selected>Todas</option>
                        <option value="1">Efetivo</option>
                        <option value="2">Estágio</option>
                    </select>
                </div>
                <table class="table">
                    <tbody>
                        <tr>
                        <th scope="row">Clínico geral</th>
                        <td>Recife</td>
                        <td>Efetivo</td>
                        </tr>
                        <tr>
                        <th scope="row">Enfermeiro</th>
                        <td>Caruaru</td>
                        <td>Efetivo</td>
                        </tr>
                        <tr>
                        <th scope="row">Auxiliar</th>
                        <td>Petrolina</td>
                        <td>Efetivo</td>
                        </tr>
                        <tr>
                        <th scope="row">Técnico</th>
                        <td>Recife</td>
                        <td>Estágio</td>
                        </tr>
                        <tr>
                        <th scope="row">Clínico geral</th>
                        <td>Recife</td>
                        <td>Efetivo</td>
                        </tr>
                        <tr>
                        <th scope="row">Enfermeiro</th>
                        <td>Caruaru</td>
                        <td>Efetivo</td>
                        </tr>
                        <tr>
                        <th scope="row">Auxiliar</th>
                        <td>Petrolina</td>
                        <td>Efetivo</td>
                        </tr>
                        <tr>
                        <th scope="row">Técnico</th>
                        <td>Recife</td>
                        <td>Estágio</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?php include ("footer.php"); ?>
