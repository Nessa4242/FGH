<?php include ("header.php"); ?>

<section class="int-cadastre-seu-curriculo">
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

    <div class="bloco-cadastre-seu-curriculo">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-12">
                    <h2 class="titulo-interna">Cadastre seu currículo</h2>
                    <form>
                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-10 col-12"> 
                                <input id="nome-curriculo" name="nome-curriculo" placeholder="Nome completo" type="text" required="required" class="form-control">
                            </div>
                            <div class="form-group col-md-10 col-12"> 
                                <input id="cpf-curriculo" name="cpf-curriculo" placeholder="CPF" type="text" class="form-control" required="required">
                            </div>
                            <div class="form-group col-md-10 col-12"> 
                                <input id="nascimento-curriculo" name="nascimento-curriculo" placeholder="Data de nascimento" type="text" class="form-control" required="required">
                            </div> 
                            <div class="form-group col-md-10 col-12">
                                <button name="continuar" type="submit" class="btn btn-interna-mais btn-continuar">Continuar <i class="fas fa-angle-right"></i></button>
                            </div>
                        </div>
                    </form>
                    <span class="separador-formularios">ou</span>
                    <h3 class="titulo-interna">Faça seu login</h3>
                    <form>
                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-10 col-12"> 
                                <input id="cpf-login" name="cpf-login" placeholder="CPF" type="text" class="form-control" required="required">
                            </div>
                            <div class="form-group col-md-10 col-12"> 
                                <input id="senha-login" name="senha-login" placeholder="Senha" type="" class="form-control" required="required">
                            </div> 
                            <div class="form-group col-md-10 col-12">
                                <button name="entrar" type="submit" class="btn btn-interna-mais btn-entrar">Entrar <i class="fas fa-angle-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ("footer.php"); ?>