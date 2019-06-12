<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PROJETO - remedio rapido</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Remedio Rapido</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
            <input type="text" class="form-control" placeholder="Busque aqui seu remedio..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="UsuariosCadastrados.php">Usuarios Cadastrados</a>
          
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="fomularioLogin.php" data-toggle="" data-target="">Sair</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Relacionados:</span><br><br><br>
          <a href="paginaConsultaRemedio.php"><h6>Consulta Remedios</h6></a><br>
          <a href="paginaInicial.php"><h6>Obter Remedios<p>Gratuitamente</h6></a><br>
          <a href="paginaRemediosDistribuidos.php"><h6>Remedios Distribuidos</h6></a><br>
          <a href="paginaFarmaciasParceiras.php"><h6>Farmacias Paceiras</h6></a><br>
          <a href="Pagina5.php"><h6>Postos de Saude</h6></a><br>
          <a href="paginaSitesComMesmoConteudo.php"><h6>Sites com o mesmo conteudo</h6></a><br>
        </a>
        
      </li>
     
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
        <!--Pagina 3--> 
            <a>Remedios Distribuidos</a>
        </ol>
        <br>
        <center><table border="1">
            <thead>
                <tr>
                    <th colspan="4">LISTA DE MEDICAMENTOS DISPONIBILIZADOS PELO 
                “AQUI TEM FARMÁCIA POPULAR”
                    </th>
                    
                </tr>
                <tr>
                    <td></td>
                    <th>MEDICAMENTOS</th>
                    <th>INDICAÇÃO</th>
                    <th>COPAGAMENTO/GRATUIDADE</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>ATENOLOL 25MG</td>
                    <td>HIPERTENSÃO</td>
                    <td>GRATUIDADE</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2</td>
                    <td>CAPTOPRIL 25MG</td>
                    <td>HIPERTENSÃO</td>
                    <td>GRATUIDADE</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>CLORIDRATO DE PROPRANOLOL 40MG</td>
                    <td>HIPERTENSÃO</td>
                    <td>GRATUIDADE</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>HIDROCLOROTIAZIDA 25MG</td>
                    <td>HIPERTENSÃO</td>
                    <td>GRATUIDADE</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>LOSARTANA POTÁSSICA 50MG</td>
                    <td>HIPERTENSÃO</td>
                    <td>GRATUIDADE</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>MALEATO DE ENALAPRIL 10MG</td>
                    <td>HIPERTENSÃO</td>
                    <td>GRATUIDADE</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>GLIBENCLAMIDA 5MG </td>
                    <td>DIABETES</td>
                    <td>GRATUIDADE</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>CLORIDRATO DE METFORMINA 500MG</td>
                    <td>DIABETES</td>
                    <td>GRATUIDADE</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>CLORIDRATO DE METFORMINA 500MG – 
                        AÇÃO PROLONGADA
                    </td>
                    <td>DIABETES</td>
                    <td>GRATUIDADE</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>CLORIDRATO DE METFORMINA 850MG</td>
                    <td>DIABETES</td>
                    <td>GRATUIDADE</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>INSULINA HUMANA 100UI/ML</td>
                    <td>DIABETES</td>
                    <td>GRATUIDADE</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>INSULINA HUMANA REGULAR 100UI/ML</td>
                    <td>DIABETES</td>
                    <td>GRATUIDADE</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>SULFATO DE SALBUTAMOL 5MG</td>
                    <td>ASMA</td>
                    <td>GRATUIDADE</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>SULFATO DE SALBUTAMOL 100MCG</td>
                    <td>ASMA</td>
                    <td>GRATUIDADE</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>DIPROPIONATO DE BECLOMETSONA 50MCG</td>
                    <td>ASMA</td>
                    <td>GRATUIDADE</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>DIPROPIONATO DE BECLOMETSONA 200MCG/DOSE</td>
                    <td>ASMA</td>
                    <td>GRATUIDADE</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>DIPROPIONATO DE BECLOMETSONA 200MCG/CÁPSULA</td>
                    <td>ASMA</td>
                    <td>GRATUIDADE</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>DIPROPIONATO DE BECLOMETSONA 250MCG</td>
                    <td>ASMA</td>
                    <td>GRATUIDADE</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>BROMETO DE IPRATRÓPIO 0,25MG/ML</td>
                    <td>ASMA</td>
                    <td>GRATUIDADE</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>BROMETO DE IPRATRÓPIO 0,02MG/DOSE</td>
                    <td>ASMA</td>
                    <td>GRATUIDADE</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>ACETATO DE MEDROXIPROGESTERONA 150MG A</td>
                    <td>ANTICONCEPÇÃO</td>
                    <td>COPAGAMENTO</td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>ETINILESTRADIOL 0,03MG + LEVONORGESTREL 0,15MG</td>
                    <td>ANTICONCEPÇÃO</td>
                    <td>COPAGAMENTO</td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>NORETISTERONA 0,35MG</td>
                    <td>ANTICONCEPÇÃO</td>
                    <td>COPAGAMENTO</td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>VALERATO DE ESTRADIOL 5MG + ENANTATO DE
                        NORETISTERONA 50MG
                    </td>
                    <td>ANTICONCEPÇÃO</td>
                    <td>COPAGAMENTO</td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>SINVASTATINA 10MG</td>
                    <td>DISLIPIDEMIA</td>
                    <td>COPAGAMENTO</td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>SINVASTATINA 20MG</td>
                    <td>DISLIPIDEMIA</td>
                    <td>COPAGAMENTO</td>
                </tr>
                <tr>
                    <td>27</td>
                    <td>SINVASTATINA 40MG</td>
                    <td>DISLIPIDEMIA</td>
                    <td>COPAGAMENTO</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>BUDESONIDA 32MCG</td>
                    <td>RINITE</td>
                    <td>COPAGAMENTO</td>
                </tr>
                <tr>
                    <td>29</td>
                    <td>BUDESONIDA 50MCG</td>
                    <td>RINITE</td>
                    <td>COPAGAMENTO</td>
                </tr>
                <tr>
                    <td>30</td>
                    <td>DIPROPIONATO DE BECLOMETSONA 50MCG</td>
                    <td>RINITE</td>
                    <td>COPAGAMENTO</td>
                </tr>
                <tr>
                    <td>31</td>
                    <td>CARBIDOPA 25MG + LEVODOPA 250MG</td>
                    <td>DOENÇA DE
                        PARKINSON
                    </td>
                    <td>COPAGAMENTO</td>
                </tr>
                <tr>
                    <td>32</td>
                    <td>CLORIDRATO DE BENSERAZIDA 25MG + LEVODOPA
                        100MG
                    </td>
                    <td>DOENÇA DE
                        PARKINSON
                    </td>
                    <td>COPAGAMENTO</td>
                </tr>
                <tr>
                    <td>33</td>
                    <td>ALENDRONATO DE SÓDIO 70MG</td>
                    <td>OSTEOPOROSE</td>
                    <td>COPAGAMENTO</td>
                </tr>
                <tr>
                    <td>34</td>
                    <td>MALEATO DE TIMOLOL 2,5MG</td>
                    <td>GLAUCOMA</td>
                    <td>COPAGAMENTO</td>
                </tr>
                <tr>
                    <td>35</td>
                    <td>MALEATO DE TIMOLOL 5MG</td>
                    <td>GLAUCOMA</td>
                    <td>COPAGAMENTO</td>
                </tr>
                
                
            </tbody>
            </table></center>
        <br>

            

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
              <span><b>Contato do administrador</b></span><br><br>
              <b>Telefone:</b> (61)9 9412-0659<br><br>
              <b>E-mail:</b> joao.prudencio0552@gmail.com
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
