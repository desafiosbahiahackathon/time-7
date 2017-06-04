<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

   <title>Quiz</title>

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
<style>
body{
background-color:#804d8f;
background-size: 100%;
background-repeat: repeat-y;
}
</style>
</style>


</head>

<body>

    <div id="">

      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
              <a class="navbar-brand" href="/"><img src="img/logo_ronda_2.png" width="25"/></a>
          </div>
          <!-- /.navbar-header -->
          <div class="" role="navigation">
              <div class="">
                  <ul class="nav" id="">
                  </ul>
              </div>
              <!-- /.sidebar-collapse -->
          </div>

          <!-- /.navbar-static-side -->
      </nav>

        <div id="" style="background-color:#804d8f">

            <!-- /.row -->
            <div class="row" style="background-color:#804d8f">
                <div class="col-lg-12">
                    <div class="">
                        <div class="">
                            <div class="row" style="margin-top:200px;">
                                <div class="col-sm-3 col-md-3 col-lg-3"></div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <form role="form" method="POST" action="{{ route('cadastrar') }}">
                                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div id="tela-1">
                          <div class="col-md-10 column">
                            <div class="panel panel-primary">
                              <div class="panel-heading">
                                <h3 class="panel-title">
                        						Ele(a) é ciumento, possessivo e controlador?
                        					</h3>
                              </div>
                              <div class="panel-body">
                                <div class="radio">
                                  <label>
                                    <input name="optionsRadios" id="optionsRadios1" value="2" type="radio"> Sim
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input name="optionsRadios" id="optionsRadios2" value="1" type="radio"> Às vezes
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input name="optionsRadios" id="optionsRadios3" value="0" type="radio"> Não
                                  </label>
                                </div>
                              </div>
                              <div class="panel-footer">
                                <i onclick="mostra('tela-2');"  class="btn btn-primary " role="button">Próximo</i>
                              </div>
                            </div>
                            <div class="col-md-1 column">
                            </div>
                          </div>
                        </div>
                        <div style="display:none;" id="tela-2">
                        <div class="col-md-10 column">
                          <div class="panel panel-primary">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                  Ele(a) destrói bens e faz ameaças?
                                </h3>
                            </div>
                            <div class="panel-body">
                              <div class="radio">
                                <label>
                                  <input name="optionsRadios" id="optionsRadios1" value="2" type="radio"> Sim
                                </label>
                              </div>
                              <div class="radio">
                                <label>
                                  <input name="optionsRadios" id="optionsRadios2" value="1" type="radio"> Às vezes
                                </label>
                              </div>
                              <div class="radio">
                                <label>
                                  <input name="optionsRadios" id="optionsRadios3" value="0" type="radio"> Não
                                </label>
                              </div>
                            </div>
                            <div class="panel-footer">
                              <i onclick="mostra('tela-1');"  class="btn btn-primary " role="button">Anterior</i>
                              <i href="#" onclick="mostra('tela-3');" class="btn btn-default" role="button">Próximo</i>
                            </div>
                          </div>
                          <div class="col-md-1 column">
                          </div>
                        </div>
                      </div>
                      <div style="display:none;" id="tela-3">
                      <div class="col-md-10 column">
                        <div class="panel panel-primary">
                          <div class="panel-heading">
                            <h3 class="panel-title">
                                Ele(a) me impede de estudar ou trabalhar?
                              </h3>
                          </div>
                          <div class="panel-body">
                            <div class="radio">
                              <label>
                                <input name="optionsRadios" id="optionsRadios1" value="2" type="radio"> Sim
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input name="optionsRadios" id="optionsRadios2" value="1" type="radio"> Às vezes
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input name="optionsRadios" id="optionsRadios3" value="0" type="radio"> Não
                              </label>
                            </div>
                          </div>
                          <div class="panel-footer">
                            <i onclick="mostra('tela-2');"  class="btn btn-primary " role="button">Anterior</i>
                            <i href="#" onclick="mostra('tela-4');" class="btn btn-default" role="button">Próximo</i>
                          </div>
                        </div>
                        <div class="col-md-1 column">
                        </div>
                      </div>
                    </div>
                    <div style="display:none;" id="tela-4">
                    <div class="col-md-10 column">
                      <div class="panel panel-primary">
                        <div class="panel-heading">
                          <h3 class="panel-title">
                              Se você cedeu a seus desejos sexuais, você sente que foi por amor, por medo, pressão ou para agradar?
                            </h3>
                        </div>
                        <div class="panel-body">
                          <div class="radio">
                            <label>
                              <input name="optionsRadios" id="optionsRadios1" value="2" type="radio"> Sim
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input name="optionsRadios" id="optionsRadios2" value="1" type="radio"> Às vezes
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input name="optionsRadios" id="optionsRadios3" value="0" type="radio"> Não
                            </label>
                          </div>
                        </div>
                        <div class="panel-footer">
                          <i onclick="mostra('tela-3');"  class="btn btn-primary " role="button">Anterior</i>
                          <i href="#" onclick="mostra('tela-5');" class="btn btn-default" role="button">Próximo</i>
                        </div>
                      </div>
                      <div class="col-md-1 column">
                      </div>
                    </div>
                  </div>
                  <div style="display:none;" id="tela-5">
                  <div class="col-md-10 column">
                    <div class="panel panel-primary">
                      <div class="panel-heading">
                        <h3 class="panel-title">
                            Ele(a) faz um ou mais dos itens anteriores, mas diz que é por amor?
                          </h3>
                      </div>
                      <div class="panel-body">
                        <div class="radio">
                          <label>
                            <input name="optionsRadios" id="optionsRadios1" value="2" type="radio"> Sim
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input name="optionsRadios" id="optionsRadios2" value="1" type="radio"> Às vezes
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input name="optionsRadios" id="optionsRadios3" value="0" type="radio"> Não
                          </label>
                        </div>
                      </div>
                      <div class="panel-footer">
                        <i onclick="mostra('tela-4');"  class="btn btn-primary " role="button">Anterior</i>
                      </div>
                    </div>
                    <div class="container">
                      <div class="row" style="margin-left:170px;">
    <button type="button" class="btn btn btn-primary  btn-lg" data-toggle="modal" data-target="#myModal">Enviar Respostas</button>
</div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" style="color:red;">Atenção!</h4>
          </div>
          <div class="modal-body" style="color:red;">
            <p>Você está vivendo uma situação de violência contra a mulher. Ligue 180 e procure ajuda!</p>
          </div>
          <div class="modal-footer" >
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

  </div>
                  </div>
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
