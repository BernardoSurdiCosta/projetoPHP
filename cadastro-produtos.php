

      <div class="row g-5">
      <div class="col-md-6 col-lg-6 order-md-last">
        <h4 class="mb-3">Imagem do Produto</h4>
        <img src="">
      </div>
        <div class="col-md-6 col-lg-6">
          <h4 class="mb-3">Cadastro de Produtos</h4>
          <form action="application/inserir-produto.php" method="POST" enctype="multipart/form-data">
            <div class="row g-3">
              <div class="col-sm-3">
                <label for="txtID" class="form-label">ID</label>
                <input type="text" class="form-control" id="txtID" name="txtID" readonly value="NOVO">
              </div>

              <div class="col-sm-9">
                <label for="txtNome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="txtNome" name="txtNome">
              </div>

              <div class="col-sm-6">
                <label for="txtQtdEstoque" class="form-label">Qtd. Estoque</label>
                <input type="text" class="form-control" id="txtQtdEstoque" name="txtQtdEstoque">
              </div>

              <div class="col-sm-6">
                <label for="txtPreco" class="form-label">Preço R$</label>
                <input type="text" class="form-control" id="txtPreco" name="txtPreco">
              </div>

              <div class="col-12">
                <label for="fileFotoProduto" class="form-label">Foto do Produto</label>
                <input type="file" class="form-control" id="fileFotoProduto" name="fileFotoProduto">
              </div>

              <hr class="my-4">

              <div class="col-sm-4">
                <button class="w-100 btn btn-primary btn-lg" type="submit">Salvar</button>
              </div>

              <div class="col-sm-4">
                <button class="w-100 btn btn-secondary btn-lg" type="reset">Cancelar</button>
              </div>

              <div class="col-sm-4">
                <a class="w-100 btn btn-danger btn-lg" href="application/fazer-logout.php">Sair</a>
              </div>
          </form>
        </div>
      </div>