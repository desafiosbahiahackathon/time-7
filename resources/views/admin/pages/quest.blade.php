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
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">



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
              <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
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
                      <li class="sidebar-search">
                          <div class="input-group custom-search-form">
                              <input type="text" class="form-control" placeholder="Search...">
                              <span class="input-group-btn">
                              <button class="btn btn-default" type="button">
                                  <i class="fa fa-search"></i>
                              </button>
                          </span>
                          </div>
                          <!-- /input-group -->
                      </li>
                      <li>
                          <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
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
                      <li>
                          <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                      </li>
                      <li>
                          <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="panels-wells.html">Panels and Wells</a>
                              </li>
                              <li>
                                  <a href="buttons.html">Buttons</a>
                              </li>
                              <li>
                                  <a href="notifications.html">Notifications</a>
                              </li>
                              <li>
                                  <a href="typography.html">Typography</a>
                              </li>
                              <li>
                                  <a href="icons.html"> Icons</a>
                              </li>
                              <li>
                                  <a href="grid.html">Grid</a>
                              </li>
                          </ul>
                          <!-- /.nav-second-level -->
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="#">Second Level Item</a>
                              </li>
                              <li>
                                  <a href="#">Second Level Item</a>
                              </li>
                              <li>
                                  <a href="#">Third Level <span class="fa arrow"></span></a>
                                  <ul class="nav nav-third-level">
                                      <li>
                                          <a href="#">Third Level Item</a>
                                      </li>
                                      <li>
                                          <a href="#">Third Level Item</a>
                                      </li>
                                      <li>
                                          <a href="#">Third Level Item</a>
                                      </li>
                                      <li>
                                          <a href="#">Third Level Item</a>
                                      </li>
                                  </ul>
                                  <!-- /.nav-third-level -->
                              </li>
                          </ul>
                          <!-- /.nav-second-level -->
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="blank.html">Blank Page</a>
                              </li>
                              <li>
                                  <a href="login.html">Login Page</a>
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
                                    @foreach ($quest as $q)

                                      <div id="tela-1">
                                          <div class="form-group">
                                              <label>Guarnição/GH</label>
                                              {{$q->guarnicao}}
                                          </div>
                                          <div class="form-group">
                                              <label>Data da 1ª visita</label>
                                            {{$q->data_visita}}
                                          <div class="form-group">
                                              <label>MPU Nº</label>
                                              {{$q->mpu}}
                                          </div>
                                          <div class="form-group">
                                              <label>Origem Solicitação</label>
                                              {{$q->origem_solicitacao}}

                                          </div>
                                          <i onclick="mostra('tela-2');" id="avancar" class="fa fa-arrow-circle-right button-avancar"></i>

                                    </div>
                                    <div style="display:none;" id="tela-2" >
                                          <div class="form-group">
                                              <label>Nome</label>
                                              {{$q->nome}}
                                          </div>
                                          <div class="form-group">
                                              <label>Endereço Residencial</label>
                                              {{$q->end_residencial}}
                                          <div class="form-group">
                                              <label>Ponto de referência (endereço residencial)</label>
                                              {{$q->ponto_referencia}}
                                          </div>
                                          <div class="form-group">
                                              <label>Bairro (endereço residencial)</label>
                                              {{$q->bairro}}
                                          </div>
                                          <div class="form-group">
                                              <label>Endereço para visita</label>
                                              {{$q->end_visita}}
                                          </div>
                                        <i style="font-size:24px;" onclick="mostra('tela-1');" class="fa fa-arrow-circle-left button-avancar"></i>
                                        <i style="font-size:24px;" onclick="mostra('tela-3');" class="fa fa-arrow-circle-right button-avancar"></i>
                                      </div>
                                      <div style="display:none;" id="tela-3">
                                            <div class="form-group">
                                                <label>Ponto de referência(endereço para visita)</label>
                                                {{$q->ponto_referencia_v}}
                                            </div>
                                            <div class="form-group">
                                                <label>Bairro (endereço de visita)</label>
                                                {{$q->bairro_end_v}}
                                            </div>
                                            <div class="form-group">
                                                <label>Telefone</label>
                                                {{$q->telefone}}
                                              </div>
                                            <div class="form-group">
                                                <label>Melhor turno para visita</label>
                                                {{$q->melhor_turno}}
                                            </div>
                                            <div class="form-group">
                                                <label>Estado civil</label>
                                                {{$q->estado_civil}}
                                            </div>
                                            <div class="form-group">
                                                <label>Filho(a)s</label>
                                                {{$q->filhos}}
                                            </div>
                                            <div class="form-group">
                                                <label>Faixa etária</label>
                                                {{$q->faixa_filhos}}
                                            </div>

                                            <i style="font-size:24px;" onclick="mostra('tela-2');" class="fa fa-arrow-circle-left button-avancar"></i>
                                            <i style="font-size:24px;" onclick="mostra('tela-4');" class="fa fa-arrow-circle-right button-avancar"></i>
                                      </div>
                                      <div id="tela-4" style="display:none;">
                                            <div class="form-group">
                                                <label>Filho(a)s com agressor</label>
                                                {{$q->filhos_agressor}}
                                            </div>

                                            <div class="form-group">
                                                <label>Escolaridade</label>
                                                {{$q->escolaridade}}

                                            </div>
                                            <div class="form-group">
                                                <label>Raça/Etnia</label>
                                                {{$q->etnia}}

                                            </div>
                                            <div class="form-group">
                                                <label>Religião</label>
                                                {{$q->religiao}}

                                            </div>


                                            <div class="form-group">
                                                <label>Idade</label>
                                                {{$q->idade}}
                                            </div>
                                            <i style="font-size:24px;" onclick="mostra('tela-3');" class="fa fa-arrow-circle-left button-avancar"></i>
                                            <i style="font-size:24px;" onclick="mostra('tela-5');" class="fa fa-arrow-circle-right button-avancar"></i>

                                      </div>
                                      <div id="tela-5" style="display:none;">
                                        <div class="form-group">
                                            <label>Profissão/Ocupação</label>
                                            {{$q->profissao}}
                                        </div>
                                        <div class="form-group">
                                            <label>Último trabalho</label>
                                            {{$q->ultimo_emprego}}
                                        </div>

                                        <div class="form-group">
                                            <label>Trabalha</label>
                                            {{$q->trabalha}}

                                        </div>
                                        <div class="form-group">
                                            <label>Local de trabalho</label>
                                            <input class="form-control" type="text" name="local" id="local" placeholder="Digite o local de trabalho">
                                        </div>

                                        <div class="form-group">
                                            <label>Renda (SM - Salário Mínimo)</label>
                                            {{$q->renda}}


                                        </div>
                                        <div class="form-group">
                                            <label>Quem é o (a) principal responsável pelo sustento da família?</label>
                                            {{$q->responsavel_sustento}}

                                          </div>
                                          <div class="form-group">
                                              <label>Grau de risco?</label>
                                              @if($q->risco == 1)
                                                      <img src="img/verde.png" width="50px;" >
                                                  @elseif ($q->risco == 2)
                                                      <img src="img/amarelo.png" width="50px;" >
                                                  @else
                                                    <img src="img/vermelho.png" width="50px;" >
                                                  @endif
                                            </div>
                                            <br><br>
                                          <i style="font-size:24px;" onclick="mostra('tela-4');" class="fa fa-arrow-circle-left button-avancar"></i>

                                          <button type="reset" class="btn btn-default enviar">Resetar</button>
                                          <button type="submit" class="btn btn-default enviar">Enviar</button>
                                        </div>



                                    @endforeach
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
    <script src="/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/js/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/js/raphael.min.js"></script>
    <script src="/js/morris.min.js"></script>
    <script src="/js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/js/sb-admin-2.js"></script>

</body>

</html>
