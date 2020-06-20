<?php

// recuperar os dados do arquivo lista.php
require_once 'listar.php';
// variavel para receber o resultado do select do arquivo lista.php


// $cep = cep("30260250"); metodo cep recebe o valor do cep e passa a variavel $cep em listar passa  cep para variavel $rua
$x =$_POST['cep'];
$cep = cep($x);


?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../../assets/css/shared/style.css">
        <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
   
  
  <body>
                <div>
                <h4 class="card-title"></h4>
            </div>
   
          
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <div>

                   </div>
                    <h4 class="card-title">Horizontal Two column</h4>
                    <form  method ="POST" class="form-sample" action ="registro.php"  >
                      <p class="card-description"> Personal info </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nome completo*</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email*</label>
                            <div class="col-sm-9">
                            <input type="email" class="form-control" placeholder="Email" name="email" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Gênero</label>
                            <div class="col-sm-9">
                              <select class="form-control">
                                <option>Masculino</option>
                                <option>Feminino</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date of Birth</label>
                            <div class="col-sm-9">
                              <input class="form-control" placeholder="dd/mm/yyyy" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Setor*</label>
                            <div class="col-sm-9">
                              <select class="form-control">
                                <option>Diretoria</option>
                                <option>Desenvolvimento</option>
                                <option>Suporte</option>
                                <option>Comercial</option>
                                <option>Recepção</option>
                                <option>Financeiro</option>
                                <option>Consultoria</option>
                                <option>Comercial</option>
                              </select>
                            </div>
                          </div>
                        </div>
                       </div>
                      <p class="card-description">    Endereço  </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">CEP</label>
                            <div class="col-sm-9">
                             <input type="search" class="form-control"placeholder ="00000000" id="busca" name="cep" value ="<?php  echo $cep['postal'] ?>"/>
                             <button type="submit"><i class="fa-search" aria-hidden="true"></i> Pesquisar</i></button> 
                             
                             </div>
                          </div>
                        </div>
                             <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">UF</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="uf" value ="<?php  echo $cep['uf'] ?>"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Logradouro</label>
                            <div class="col-sm-9">                                    
                              <input type="text"  class="form-control"name ="lg" value ="<?php  echo $cep['rua'] ?>"/>
                              
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Numero</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name ="numero" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Cidade</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="cidade" value ="<?php  echo $cep['cidade'] ?>"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Função</label>
                            <div class="col-sm-9">
                              <select class="form-control">
                                <option>Operacional</option>
                                <option> Administrativo</option>
                                <option>Supervisor</option>
                                <option>CEO</option>
                                <option>Gerente</option>
                                
                              </select>
                              <div class="card-body">
                        <h4 class="card-title">Outline icons</h4>
                        <p class="card-description"></p>
                        <div class="template-demo">
                          <button type="button" class="btn btn-outline-primary btn-fw" name ="enviar">
                            <i class="mdi mdi-file-document"></i>Submit</button>
                        
                        </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../../assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../../../assets/js/shared/off-canvas.js"></script>
    <script src="../../../assets/js/shared/misc.js"></script>
    <!-- endinject -->
  </body>
</html>