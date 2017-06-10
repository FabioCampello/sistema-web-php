
      <div class="container theme-showcase" role="main">

      <!-- INICIO DA TABELA --> 
        <div class="page-header">
          <h1 align="center">Cadastrar Usuário</h1>
        </div>
        <div class="row">
          <div class="col-md-10">
            
            <form class="form-horizontal" method="POST" action="administrador.php?link=5">

                 <!-- CAMPO NOME -->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Nome</label>
                   <div class="col-sm-7">
                    <input type="text" class="form-control" name="nome" placeholder="Nome completo" required autofocus>
                  </div>
                </div>

                 <!-- CAMPO CPF -->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Cpf</label>
                   <div class="col-sm-7">
                    <input type="number" class="form-control" name="cpf" placeholder="CPF ou CNPJ">
                  </div>
                </div>
                

                <!-- CAMPO E-MAIL -->
                <div class="form-group">
                  <label class="col-sm-4 control-label">E-mail</label>
                   <div class="col-sm-7">
                    <input type="text" class="form-control" name="email" placeholder="E-mail" required autofocus>
                  </div>
                </div>

                <!-- CAMPO USUÁRIO -->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Usuário</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="login" placeholder="Usuário" required autofocus>
                  </div>
                </div>

                <!-- CAMPO SENHA -->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Senha</label>
                   <div class="col-sm-7">
                    <input type="password" class="form-control" name="senha" placeholder="Senha" required autofocus>
                  </div>
                </div>

                <!-- CAMPO NÍVEL DE ACESSO -->
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Nível de acesso</label>
                  <div class="col-sm-4">
                      <select  class="form-control" name="nivel_acesso_id" required autofocus>
                          <option value="">Selecione seu nível de acesso</option>
                          <option value="1">Administrador</option>
                          <option value="2">Usuário</option>
                      </select>
                  </div>
                </div>

                <!-- BOTÃO CADASTRAR -->
                <div class="form-group">
                  <div class="col-sm-offset-4 col-sm-10">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                  </div>
                </div>
            </form>

          </div>
        </div>
      <!-- FIM DA TABELA -->

      </div> <!-- /container -->


    