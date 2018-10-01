
  <form id="form-chat" action="" method="POST"  enctype="multipart/form-data">
    <div class="col-lg-8 col-md-offset-2">
      <div class="input-group">
        <input type="text" name="mensagem" id="mensagem" placeholder="Digite sua mensagem..." class="form-control" />
        <span class="input-group-btn">
          <input type="submit" value="Enviar" class="btn btn-primary"/>
          <input type="hidden" value="envMsg" name="env" />
        </span>
      </div>
    </div>
  </form>
  <br><br/>
  <?php
    if(isset($_POST['env']) && $_POST['env'] == "envMsg"){

      $mensagem = $_POST['mensagem'];
      $id_atribuido = 'Comercial';

      if(!empty($mensagem)){
        if($link->query("INSERT INTO mensagens (id_cliente, id_atribuido, mensagem, id_para) VALUES ('$id_de', '$id_atribuido', '$mensagem', '$protocolo')")){
        }
      }
    }
  ?>
</div>
