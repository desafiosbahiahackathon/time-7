<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />


    <title>Formulário de Acolhimento</title>


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <script>
    function mostra(id) {
        var array = new Array('tela-1', 'tela-2', 'tela-3', 'tela-4','tela-5');
        x = document.getElementById(id)
        for (i = 0; i < array.length; i++) {
            if (array[i] == id) {
                x.style.display = 'block';
            }
            else {
                document.getElementById(array[i]).style.display = 'none';
            }
        }
    }
</script>


</head>

<body>

    <div id="wrapper">

      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html">Ronda Maria da Penha</a>
          </div>
          <!-- /.navbar-header -->

          <ul class="nav navbar-top-links navbar-right">
              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-messages">
                      <li>
                          <a href="#">
                              <div>
                                  <strong>John Smith</strong>
                                  <span class="pull-right text-muted">
                                      <em>Yesterday</em>
                                  </span>
                              </div>
                              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <strong>John Smith</strong>
                                  <span class="pull-right text-muted">
                                      <em>Yesterday</em>
                                  </span>
                              </div>
                              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <strong>John Smith</strong>
                                  <span class="pull-right text-muted">
                                      <em>Yesterday</em>
                                  </span>
                              </div>
                              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a class="text-center" href="#">
                              <strong>Read All Messages</strong>
                              <i class="fa fa-angle-right"></i>
                          </a>
                      </li>
                  </ul>
                  <!-- /.dropdown-messages -->
              </li>
              <!-- /.dropdown -->
              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-tasks">
                      <li>
                          <a href="#">
                              <div>
                                  <p>
                                      <strong>Task 1</strong>
                                      <span class="pull-right text-muted">40% Complete</span>
                                  </p>
                                  <div class="progress progress-striped active">
                                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                          <span class="sr-only">40% Complete (success)</span>
                                      </div>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <p>
                                      <strong>Task 2</strong>
                                      <span class="pull-right text-muted">20% Complete</span>
                                  </p>
                                  <div class="progress progress-striped active">
                                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                          <span class="sr-only">20% Complete</span>
                                      </div>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <p>
                                      <strong>Task 3</strong>
                                      <span class="pull-right text-muted">60% Complete</span>
                                  </p>
                                  <div class="progress progress-striped active">
                                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                          <span class="sr-only">60% Complete (warning)</span>
                                      </div>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <p>
                                      <strong>Task 4</strong>
                                      <span class="pull-right text-muted">80% Complete</span>
                                  </p>
                                  <div class="progress progress-striped active">
                                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                          <span class="sr-only">80% Complete (danger)</span>
                                      </div>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a class="text-center" href="#">
                              <strong>See All Tasks</strong>
                              <i class="fa fa-angle-right"></i>
                          </a>
                      </li>
                  </ul>
                  <!-- /.dropdown-tasks -->
              </li>
              <!-- /.dropdown -->
              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-alerts">
                      <li>
                          <a href="#">
                              <div>
                                  <i class="fa fa-comment fa-fw"></i> New Comment
                                  <span class="pull-right text-muted small">4 minutes ago</span>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                  <span class="pull-right text-muted small">12 minutes ago</span>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <i class="fa fa-envelope fa-fw"></i> Message Sent
                                  <span class="pull-right text-muted small">4 minutes ago</span>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <i class="fa fa-tasks fa-fw"></i> New Task
                                  <span class="pull-right text-muted small">4 minutes ago</span>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                  <span class="pull-right text-muted small">4 minutes ago</span>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a class="text-center" href="#">
                              <strong>See All Alerts</strong>
                              <i class="fa fa-angle-right"></i>
                          </a>
                      </li>
                  </ul>
                  <!-- /.dropdown-alerts -->
              </li>
              <!-- /.dropdown -->
              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-user">
                      <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                      </li>
                      <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                      </li>
                  </ul>
                  <!-- /.dropdown-user -->
              </li>
              <!-- /.dropdown -->
          </ul>
          <!-- /.navbar-top-links -->

          <div class="navbar-default sidebar" role="navigation">
              <div class="sidebar-nav navbar-collapse">
                  <ul class="nav" id="side-menu">
                      <li>

                          <a href="admin"><i class="fa fa-dashboard fa-fw"></i> Página inicial</a>

                      </li>
                      <li>
                          <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Formulários<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="questionario">Questionário</a>
                              </li>
                              <li>
                                  <a href="listagem">Listar</a>

                              </li>
                          </ul>
                          <!-- /.nav-second-level -->
                      </li>


                          </ul>
                          <!-- /.nav-second-level -->
                      </li>



                  </ul>
              </div>
              <!-- /.sidebar-collapse -->
          </div>
          <!-- /.navbar-static-side -->
      </nav>

        <div id="page-wrapper">

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Formulário de acolhimento
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-lg-3"></div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <form role="form" method="POST" action="{{ route('cadastrar') }}">
                                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <div id="tela-1">
                                          <div class="form-group">
                                              <label>Guarnição/GH</label>
                                              <input class="form-control" type="text" name="guarnicao" id="guarnicao" placeholder="Digite a guarnição">
                                          </div>
                                          <div class="form-group">
                                              <label>Data da 1ª visita</label>
                                              <input class="form-control" type="date" name="data" id="data" placeholder="Digite a data da primeira visita">
                                          </div>
                                          <div class="form-group">
                                              <label>MPU Nº</label>
                                              <input class="form-control" type="number" name="mpu" id="mpu" placeholder="Digite o MPU">
                                          </div>
                                          <div class="form-group">
                                              <label>Origem Solicitação</label>
                                              <div class="radio">
                                                  <label>
                                                      <input type="radio"  name="origem_solicitacao" id="origem_solicitacao1" value="tj_vara" >TJ/ __Vara
                                                  </label>
                                              </div>
                                              <div class="radio">
                                                  <label>
                                                      <input type="radio"  name="origem_solicitacao" id="origem_solicitacao2" value="mp" >MP
                                                  </label>
                                              </div>
                                              <div class="radio">
                                                  <label>
                                                      <input type="radio"  name="origem_solicitacao" id="origem_solicitacao3" value="dp" >DP
                                                  </label>
                                              </div>
                                              <div class="radio">
                                                  <label>
                                                      <input type="radio"  name="origem_solicitacao" id="origem_solicitacao4" value="deam" >DEAM
                                                  </label>
                                              </div>

                                          </div>
                                          <i onclick="mostra('tela-2');" id="avancar" class="fa fa-arrow-circle-right button-avancar"></i>

                                    </div>
                                    <div style="display:none;" id="tela-2" >
                                          <div class="form-group">
                                              <label>Nome</label>
                                              <input class="form-control" type="text" name="nome" id="nome" placeholder="Digite o nome">
                                          </div>
                                          <div class="form-group">
                                              <label>Endereço Residencial</label>
                                              <input class="form-control" type="text" name="end_residencial" id="end_residencial" placeholder="Digite o endereço residencial">
                                          </div>
                                          <div class="form-group">
                                              <label>Ponto de referência (endereço residencial)</label>
                                              <input class="form-control" type="text" name="ponto_referencia" id="ponto_referencia" placeholder="Digite o ponto de referencia">
                                          </div>
                                          <div class="form-group">
                                              <label>Bairro (endereço residencial)</label>
                                              <input class="form-control" type="text" name="bairro" id="bairro" placeholder="Digite o bairro">
                                          </div>
                                          <div class="form-group">
                                              <label>Endereço para visita</label>
                                              <input class="form-control" type="text" name="end_visita" id="end_visita" placeholder="Digite o endereço para visita">
                                          </div>
                                        <i  onclick="mostra('tela-1');" id="avancar"  class="fa fa-arrow-circle-left button-avancar"></i>
                                        <i  onclick="mostra('tela-3');" id="avancar" class="fa fa-arrow-circle-right button-avancar"></i>
                                      </div>
                                      <div style="display:none;" id="tela-3">
                                            <div class="form-group">
                                                <label>Ponto de referência(endereço para visita)</label>
                                                <input class="form-control" type="text" name="ponto_referencia_v" id="ponto_referencia_v" placeholder="Digite o ponto de referencia">
                                            </div>
                                            <div class="form-group">
                                                <label>Bairro (endereço de visita)</label>
                                                <input class="form-control" type="text" name="bairro_end_v" id="bairro_end_v" placeholder="Digite o bairro">
                                            </div>
                                            <div class="form-group">
                                                <label>Telefone</label>
                                                <input class="form-control" type="text" name="telefone" id="telefone" placeholder="Digite o telefone">
                                            </div>

                                            <div class="form-group">
                                                <label>Melhor turno para visita</label>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="turno" value="matutino">Matutino
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="turno" value="vespertino">Vespertino
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label>Estado civil</label>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"   name="estado_civil" id="estado_civil1" value="casada" >Casada/União estável
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="estado_civil" id="estado_civil2" value="divorciada" >Divorciada
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="estado_civil" id="estado_civil3" value="separada" >Separada
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="estado_civil" id="estado_civil4" value="solteira" >Solteira
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="estado_civil" id="estado_civil5" value="viuva" >Viúva
                                                    </label>
                                                </div>


                                            </div>
                                            <div class="form-group">
                                                <label>Filho(a)s</label>
                                                <input class="form-control" type="text" name="filhos" id="filhos" placeholder="Digite se há filhos">
                                            </div>
                                            <div class="form-group">

                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="faixa_filhos" id="optionsRadios1" value="0a4" >0 a 4 Anos
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="faixa_filhos" id="optionsRadios2" value="5a10" >05 a 10 anos
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="faixa_filhos" id="optionsRadios3" value="separada" >Separada
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="faixa_filhos" id="optionsRadios4" value="solteira" >Solteira
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="faixa_filhos" id="optionsRadios5" value="viuva" >Viúva
                                                    </label>
                                                </div>


                                            </div>
                                            <i id="avancar" onclick="mostra('tela-2');" class="fa fa-arrow-circle-left button-avancar"></i>
                                            <i id="avancar" onclick="mostra('tela-4');" class="fa fa-arrow-circle-right button-avancar"></i>
                                      </div>
                                      <div id="tela-4" style="display:none;">
                                            <div class="form-group">
                                                <label>Filho(a)s com agressor</label>
                                                <input class="form-control" name="filhos_agressor" id="filhos_agressor" placeholder="Digite se há filhos">
                                            </div>

                                            <div class="form-group">
                                                <label>Escolaridade</label>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="escolaridade" id="escolaridade1" value="nao_escolarizada" >Não escolarizada
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="escolaridade" id="escolaridade2" value="fundamental_1" >Fundamental I
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="escolaridade" id="escolaridade3" value="fundamental_2" >Fundamental II
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="escolaridade" id="escolaridade4" value="ensino_medio" >Ensino médio
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="escolaridade" id="escolaridade5" value="graduacao" >Graduação
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="escolaridade" id="escolaridade6" value="pos_graduacao" >Pós Graduação
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label>Raça/Etnia</label>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="raca" id="raca1" value="preta" >Preta
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="raca" id="raca2" value="parda" >Parda
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="raca" id="raca3" value="branca" >Branca
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="raca" id="raca4" value="amarela" >Amarela
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="raca" id="raca15" value="indigena" >Indígena
                                                    </label>
                                                </div>



                                            </div>
                                            <div class="form-group">
                                                <label>Religião</label>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="religiao" id="religiao1" value="catolica" >Católica
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="religiao" id="religiao2" value="evangelica" >Evangélica/Protestante
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="religiao" id="religiao3" value="espirita" >Espírita
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="religiao" id="religiao4" value="matriz" >Matriz africana
                                                    </label>
                                                </div>

                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="religiao" id="religiao5" value="outro" >Outra
                                                    </label>
                                                </div>


                                            </div>


                                            <div class="form-group">
                                                <label>Idade</label>
                                                <input class="form-control" type="number" name="idade" id="idade" placeholder="Digite a idade">
                                            </div>
                                            <i id="avancar" onclick="mostra('tela-3');" class="fa fa-arrow-circle-left button-avancar"></i>
                                            <i id="avancar" onclick="mostra('tela-5');" class="fa fa-arrow-circle-right button-avancar"></i>

                                      </div>
                                      <div id="tela-5" style="display:none;">
                                        <div class="form-group">
                                            <label>Profissão/Ocupação</label>
                                            <input class="form-control" type="text" name="profissao" id="profissao" placeholder="Digite a profissão">
                                        </div>
                                        <div class="form-group">
                                            <label>Último trabalho</label>
                                            <input class="form-control" type="text" name="ultimo_emprego" id="ultimo_emprego" placeholder="Digite o local de trabalho">
                                        </div>

                                        <div class="form-group">
                                            <label>Trabalha</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="trabalha" value="sim">Sim
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="trabalha" value="nao">Não
                                                </label>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label>Local de trabalho</label>
                                            <input class="form-control" type="text" name="local" id="local" placeholder="Digite o local de trabalho">
                                        </div>

                                        <div class="form-group">
                                            <label>Renda (SM - Salário Mínimo)</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio"  name="renda" id="renda1" value="nr">NR
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio"  name="renda" id="renda2" value="sr">SR
                                                </label>
                                            </div>

                                            <div class="radio">
                                                <label>
                                                    <input type="radio"  name="renda" id="renda3" value="ate1sm" >Até 01 SM
                                                </label>
                                            </div>

                                            <div class="radio">
                                                <label>
                                                    <input type="radio"  name="renda" id="renda4" value="de02a04sm" >02 A 04 SM
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio"  name="renda" id="renda5" value="acima05sm" >Acima de 05 SM
                                                </label>
                                            </div>,


                                        </div>
                                        <div class="form-group">
                                            <label>Quem é o (a) principal responsável pelo sustento da família?</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio"  name="sustento" id="sustento1" value="propria" >A própria
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio"  name="sustento" id="sustento2" value="agressor" >O(a) Agressor(a)
                                                </label>
                                            </div>

                                          </div>
                                          <div class="form-group">
                                              <label>Grau de risco?</label>
                                              <table>
                                                <tr>
                                                  <td>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio"  name="risco" id="risco" value="1" >
                                                            <img src="img/verde.png" class="img-responsive" style"margin-left:5%;" width="100px"> Baixo risco
                                                        </label>
                                                    </div>
                                                </td>
                                                  <td></td>
                                                  <td></td>
                                                <td>

                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio"  name="risco" id="risco" value="2" >
                                                            <img src="img/amarelo.png" class="img-responsive" width="100px"> Médio risco
                                                        </label>
                                                    </div>

                                                  </td>
                                                  <td></td>
                                                  <td></td>
                                                  <td>
                                                      <div class="radio">
                                                          <label>
                                                              <input type="radio"  name="risco" id="risco" value="3">
                                                              <img src="img/vermelho.png" class="img-responsive" width="100px"> Alto risco
                                                          </label>
                                                      </div>
                                                </td>
                                                </tr>
                                            </table>
                                            </div>
                                            <br><br>
                                          <i id="avancar" onclick="mostra('tela-4');" class="fa fa-arrow-circle-left button-avancar"></i>

                                          <button type="reset" class="btn btn-default enviar">Resetar</button>
                                          <button type="submit" class="btn btn-default enviar">Enviar</button>
                                        </div>



                                    </form>
                                </div>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/raphael.min.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
