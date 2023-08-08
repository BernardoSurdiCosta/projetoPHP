<div class="row g-5">
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
    </form>
  </div>
</div>
<div class="col-md-6 col-lg-6 ">
    <h4 class="mb-3">Imagem do Produto</h4>
    <img id='img' height="300" src="">
</div>

<div class="row">
<div class="col">
<table class="table table-striped">
   <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>QTD</th>
      <th>R$ Venda</th>
      <th>Imagem</th>
      <th>Ações</th>
    </tr>
   </thead>
   <tbody>
     <?php
        require_once 'application/class/BancoDeDados.php';
        $banco = new BancoDeDados();
        $banco ->conectar();

        $sql = "SELECT * FROM produtos";

        $dados = $banco ->buscarTodos($sql);

        foreach($dados as $linha){
          echo "<tr>
                  <td>{$linha['id_produto']}</td>
                  <td>{$linha['nome']}</td>
                  <td>{$linha['qtd_estoque']}</td>
                  <td>{$linha['preco_venda']}</td>
                  <td><a href='application/uploads/{$linha['imagem']}' class='btn btn-primary' target='_blank'><i class='bi bi-image'></i></a></td>
                  <td><button onclick=\"carregar('{$linha['id_produto']}','{$linha['nome']}','{$linha['qtd_estoque']}','{$linha['preco_venda']}','{$linha['imagem']}')\" class='btn btn-warning'><i class='bi bi-pencil-square'></i></button>
                      <button onclick='excluir({$linha['id_produto']})' class='btn btn-danger'><i class='bi bi-trash3'></i></button></td>
                </tr>";
        }
     ?>
   </tbody>
    <tfoot>
      <tr>
        <th><strong>Total:</strong></th>
        <th colspan="5"><?php echo count($dados);?></th>
        </tr>
    </tfoot>
</table>
</div>
</div>

<script>
  function excluir(id) {
    var resposta = confirm('Tem certeza que deseja excluir este produto?');
    if(resposta){
      window.location = "application/excluir-produto.php?id="+ id;
    }
    
  }

  function carregar(id, nome, qtd, preco, img) {
    
    document.querySelector('#txtID').value =id;
    document.querySelector('#txtNome').value = nome;
    document.querySelector('#txtQtdEstoque').value = qtd;
    document.querySelector('#txtPreco').value = preco;
    document.querySelector('#img').src = 'application/uploads/' + img;
  
  }
</script>
