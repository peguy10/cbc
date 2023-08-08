<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      
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
                              <h2>Association</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row column1">
                        <div class="col-lg-12">
                            <div class="white_shd full margin_bottom_30">
                               <div class="full graph_head">
                                  <div class="heading1 margin_0">
                                     <h2>Description Association</h2>
                                  </div>
                               </div>
                               <div class="full inner_elements">
                                  <div class="row">
                                     <div class="col-md-12">
                                        <div class="tab_style2">
                                           <div class="tabbar padding_infor_info">
                                              <nav>
                                                 <div class="nav nav-tabs" id="nav-tab1" role="tablist">
                                                    <a class="nav-item nav-link active" id="nav-home-tab2" data-toggle="tab" href="#nav-home_s2" role="tab" aria-controls="nav-home_s2" aria-selected="true">Description Association</a>
                                                    <a class="nav-item nav-link" id="nav-profile-tab2" data-toggle="tab" href="#nav-profile_s2" role="tab" aria-controls="nav-profile_s2" aria-selected="false">But de l'Association</a>
                                                    <a class="nav-item nav-link" id="nav-contact-tab2" data-toggle="tab" href="#nav-contact_s2" role="tab" aria-controls="nav-contacts_s2" aria-selected="false">Immatriculation / Banque</a>
                                                 </div>
                                              </nav>
                                              <div class="tab-content" id="nav-tabContent_2">
                                                 <div class="tab-pane fade show active" id="nav-home_s2" role="tabpanel" aria-labelledby="nav-home-tab">
                                                    <div class="login_form col-md-9">
                                                      <form>
                                                         <fieldset>
                                                            <div class="field">
                                                               <label class="label_field">Association</label>
                                                               <input type="text" name="name_A" placeholder="Nom de l'association" />
                                                            </div>
                                                            <div class="field">
                                                               <label class="label_field">adresse</label>
                                                               <input type="text" name="adresse" placeholder="adresse de l'association" />
                                                            </div>
                                                            <div class="field">
                                                               <label class="label_field">Pays</label>
                                                               <input type="text" name="Pays" placeholder="Pays de l'association" />
                                                            </div>
                                                            <div class="field">
                                                               <label class="label_field">Email</label>
                                                               <input type="email" name="email" placeholder="E-mail" />
                                                            </div>
                                                            <div class="field">
                                                               <label class="label_field">tel</label>
                                                               <input type="tel" name="phone" placeholder="Numero de Telephone" />
                                                            </div>
                                                         </fieldset>
                                                      </form>
                                                    </div>
                                                 </div>
                                                 <div class="tab-pane fade" id="nav-profile_s2" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    <div class="login_form">
                                                        
                                                        <div class="field">
                                                            <label class="label_field">But </label>
                                                            <textarea name="but" id="" class="form-control" cols="5" rows="10" placeholder="but de l'association"></textarea>
                                                         </div>
                                                      </div>
                                                 </div>
                                                 <div class="tab-pane fade" id="nav-contact_s2" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                    <div class="login_form col-md-9">
                                                        <form>
                                                           <fieldset>
                                                              <div class="field">
                                                                 <label class="label_field">References</label>
                                                                 <input type="text" name="ref_bank" placeholder="Reference de la banque" />
                                                              </div>
                                                              <div class="field">
                                                                 <label class="label_field">Agrement</label>
                                                                 <input type="text" name="agrement" placeholder="agrement prefecture" />
                                                              </div>
                                                              <div class="field">
                                                                 <label class="label_field">Num com</label>
                                                                 <input type="text" name="num_com" placeholder="numero intra communautaire" />
                                                              </div>
                                                              <div class="field">
                                                                 <label class="label_field">R Commerce</label>
                                                                 <input type="text" name="reg_com" placeholder="Registre du Commerce" />
                                                              </div>
                                                              <div class="field">
                                                                 <label class="label_field">Code NAF</label>
                                                                 <input type="text" name="code_naf" placeholder="Code NAF" />
                                                              </div>
                                                              <div class="field">
                                                                 <label class="label_field">siret</label>
                                                                 <input type="text" name="siret" placeholder="siret" />
                                                              </div>
                                                              <div class="field margin_0">
                                                                 <button class="main_bt bg-warning">Enregistrer l'association</button>
                                                              </div>
                                                           </fieldset>
                                                        </form>
                                                      </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
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
   </body>
</html>