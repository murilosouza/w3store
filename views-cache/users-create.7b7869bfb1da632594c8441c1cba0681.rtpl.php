<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0"><i class="nav-icon fas fa-users"></i> Usuários</h4>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Página inicial</a></li>
            <li class="breadcrumb-item active">Cadastrar de Usuário</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4 class="m-0">Cadastrar Usuário <span><a href="/admin/users" class="btn btn-default float-right"><i class="fas fa-arrow-left"></i> Tela anterior</a></span></h4>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="/admin/users/create" method="post">
              <div class="card-body no-padding">
                <div class="form-group">
                  <label for="desperson">Nome</label>
                  <input type="text" class="form-control" id="desperson" name="desperson" placeholder="Digite o nome completo">
                </div>
                <div class="form-group">
                  <label for="deslogin">Login</label>
                  <input type="text" class="form-control" id="deslogin" name="deslogin" placeholder="Digite o login">
                </div>
                <div class="form-group">
                  <label for="nrphone">Telefone</label>
                  <input type="tel" class="form-control" id="nrphone" name="nrphone" placeholder="Digite o telefone">
                </div>
                <div class="form-group">
                  <label for="desemail">E-mail</label>
                  <input type="email" class="form-control" id="desemail" name="desemail" placeholder="Digite o e-mail">
                </div>
                <div class="form-group">
                  <label for="despassword">Senha</label>
                  <input type="password" class="form-control" id="despassword" name="despassword"
                    placeholder="Digite a senha">
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="inadmin" value="1"> Acesso de Administrador
                  </label>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-outline-success float-right"><i class="nav-icon fas fa-save"></i> Salvar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>