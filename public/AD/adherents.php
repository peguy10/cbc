
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      
      <title>CBC BANK</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style>

      </style>
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <?php include_once('inc/nav.php');?>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle bg-warning"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index.html"><img class="img-responsive" src="images/logo/cbc.jpg" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="bg-warning badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="bg-warning badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li class="bg-warning">
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/layout_img/user_img.jpg" alt="#" /><span class="name_user">John David</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="help.html">Help</a>
                                       <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>GESTION DES ADHERENTS</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row column1">
                        <div class="col-md-12">
                            <div class="white_shd full margin_bottom_30">
                               <div class="full graph_head">
                                  <div class="heading1 margin_0">
                                     <h2>Liste des Adherents </h2>
                                  </div>
                                  <div class="row float-right">
                                    <button class="btn btn-warning text-white"  data-toggle="modal" data-target="#modelId">+ Ajouter un adherent</button>
                                  </div>
                               </div>
                               <div class="full price_table padding_infor_info">
                                  <div class="row">
                                     <div class="col-lg-12">
                                        <div class="table-responsive-sm">
                                           <table class="table table-striped projects">
                                              <thead class="thead-dark bg-secondary">
                                                 <tr>
                                                    <th style="width: 2%">No</th>
                                                    <th style="width: 30%">Noms et prenoms</th>
                                                    <th>Numero Tel</th>
                                                    <th>Civilité</th>
                                                    <th>Adresse</th>
                                                    <th>Date Naissance</th>
                                                    <th>Age</th>
                                                    <th>Date D'adhesion</th>
                                                    <th>Chef Famille ?</th>
                                                    <th>Nbr de Cotisation</th>
                                                    <th>Banque</th>
                                                    <th>Action</th>
                                                 </tr>
                                              </thead>
                                              <tbody>
                                                 <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <a href="">John doe</a>
                                                    </td>
                                                    
                                                    <td>
                                                        <a>678563771</a>
                                                     </td>
                                                    <td>
                                                        <a>M</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>Douala</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>01/01/1990</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>33</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>10/01/2023</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>oui</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>01</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>cbc Bank</a>
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="" class="text-warning h3 dropdown-toggle" id="triggerId" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item disabled" href="#">Disabled action</a>
                                                                <h6 class="dropdown-header">Section header</h6>
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">After divider action</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                 </tr>
                                                 <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <a href="">John doe</a>
                                                    </td>
                                                    
                                                    <td>
                                                        <a>678563771</a>
                                                     </td>
                                                    <td>
                                                        <a>M</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>Douala</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>01/01/1990</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>33</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>10/01/2023</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>oui</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>01</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>cbc Bank</a>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="" class="text-warning h3 dropdown-toggle" id="triggerId" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item disabled" href="#">Disabled action</a>
                                                                <h6 class="dropdown-header">Section header</h6>
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">After divider action</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                 </tr>
                                                 <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <a href="">John doe</a>
                                                    </td>
                                                    
                                                    <td>
                                                        <a>678563771</a>
                                                     </td>
                                                    <td>
                                                        <a>M</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>Douala</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>01/01/1990</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>33</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>10/01/2023</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>oui</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>01</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>cbc Bank</a>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="" class="text-warning h3 dropdown-toggle" id="triggerId" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item disabled" href="#">Disabled action</a>
                                                                <h6 class="dropdown-header">Section header</h6>
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">After divider action</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                 </tr>
                                                 <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <a href="">John doe</a>
                                                    </td>
                                                    
                                                    <td>
                                                        <a>678563771</a>
                                                     </td>
                                                    <td>
                                                        <a>M</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>Douala</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>01/01/1990</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>33</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>10/01/2023</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>oui</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>01</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>cbc Bank</a>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="" class="text-warning h3 dropdown-toggle" id="triggerId" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item disabled" href="#">Disabled action</a>
                                                                <h6 class="dropdown-header">Section header</h6>
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">After divider action</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                 </tr>
                                                 <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <a href="">John doe</a>
                                                    </td>
                                                    <td>
                                                        <a>678563771</a>
                                                     </td>
                                                    <td>
                                                        <a>M</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>Douala</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>01/01/1990</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>33</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>10/01/2023</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>oui</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>01</a>
                                                    </td>
                                                    <td class="project_progress">
                                                        <a>cbc Bank</a>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="" class="text-warning h3 dropdown-toggle" id="triggerId" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item disabled" href="#">Disabled action</a>
                                                                <h6 class="dropdown-header">Section header</h6>
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">After divider action</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                 </tr>
                                              </tbody>
                                           </table>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                     </div>
                     <div class="row column1 social_media_section">

                     </div>
                     <!-- graph -->
                     <div class="row column2 graph margin_bottom_30">
                        <div class="col-md-l2 col-lg-12">

                        </div>
                     </div>
                     <!-- end graph -->
                     <div class="row column3">

                     </div>
                     <div class="row column4 graph">

                     </div>
                  </div>
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2023 Designed by inov Cameroun. All rights reserved.<br><br>
                           CBC bank</a>
                        </p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script>
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <script src="js/chart_custom_style1.js"></script>

   <!-- Modal -->
   <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Information de l'adherant</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                
                <form>
                  <div class="form-group row">
                    <label for="inputtext3" class="col-sm-2 col-form-label">nom</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputtext3" name="nom">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputtext3" class="col-sm-2 col-form-label">prenom</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputtext3" name="prenom">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputtext3" class="col-sm-2 col-form-label">telephone</label>
                    <div class="col-sm-10">
                      <input type="tel" class="form-control" id="inputtext3" name="phone">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputtext3" class="col-sm-2 col-form-label">civilité</label>
                    <div class="col-sm-10">
                        <select name="cv" id="" class="form-control">
                            <option value="M">Monsieur</option>
                            <option value="Mme">Madame</option>
                            <option value="Mlle">Mademoiselle</option>
                        </select>
                        
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputtext3" class="col-sm-2 col-form-label">Adresse</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputtext3" name="address">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputtext3" class="col-sm-2 col-form-label">Date naissance</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputtext3" name="date_naiss">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputtext3" class="col-sm-2 col-form-label">Date D'Adhesion</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputtext3" name="date_adh">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputtext3" class="col-sm-2 col-form-label">civilité</label>
                    <div class="col-sm-10">
                        <select name="cv" id="" class="form-control">
                            <option value="OUI">OUI</option>
                            <option value="NON">NON</option>
                        </select>
                        
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputtext3" class="col-sm-2 col-form-label">Nombre de cotisation</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputtext3" name="nbr_cotisation">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputtext3" class="col-sm-2 col-form-label">Banque</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputtext3" name="bank">
                    </div>
                  </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
                <button type="button" class="btn btn-warning">Enregistrer</button>
            </div>
        </div>
    </div>
   </div>
   </body>
</html>