<!DOCTYPE html>
<html lang="en">
   <head>
    @include('layouts.head')
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            @include('layouts.nav')

            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               @include('layouts.slider')
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

                                                    <form method="POST" action="{{ route('associations.update', $association->id) }}">
                                                        @csrf
                                                        @method('put')
                                                        <fieldset>
                                                           <div class="field">
                                                              <label class="label_field">Association</label>
                                                              <input type="text" name="name" placeholder="Nom de l'association" value="{{ $association->name }}"/>
                                                           </div>
                                                           <div class="field">
                                                              <label class="label_field">adresse</label>
                                                              <input type="text" name="adresse" placeholder="adresse de l'association" value="{{ $association->adresse }}"/>
                                                           </div>
                                                           <div class="field">
                                                              <label class="label_field">Pays</label>
                                                              <input type="text" name="pays" placeholder="Pays de l'association" value="{{ $association->pays }}"/>
                                                           </div>
                                                           <div class="field">
                                                              <label class="label_field">Email</label>
                                                              <input type="email" name="email" placeholder="E-mail" value="{{ $association->email }}"/>
                                                           </div>
                                                           <div class="field">
                                                              <label class="label_field">tel</label>
                                                              <input type="tel" name="phone" placeholder="Numero de Telephone" value="{{ $association->phone }}"/>
                                                           </div>
                                                   </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-profile_s2" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                   <div class="login_form">

                                                       <div class="field">
                                                           <label class="label_field">But </label>
                                                           <textarea name="but" id="" class="form-control" cols="5" rows="10" placeholder="but de l'association">{{ $association->but }}</textarea>
                                                        </div>
                                                     </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-contact_s2" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                             <div class="field">
                                                                <label class="label_field">References</label>
                                                                <input type="text" class="form-control" name="ref_bank" placeholder="Reference de la banque" value="{{ $association->ref_bank }}"/>
                                                             </div>
                                                             <div class="field">
                                                                <label class="label_field">Agrement</label>
                                                                <input type="text" class="form-control" name="agrement" placeholder="agrement prefecture" value="{{ $association->agrement }}"/>
                                                             </div>
                                                             <div class="field">
                                                                <label class="label_field">Num com</label>
                                                                <input type="text" class="form-control" name="num_com" placeholder="numero intra communautaire" value="{{ $association->num_com }}"/>
                                                             </div>
                                                             <div class="field">
                                                                <label class="label_field">R Commerce</label>
                                                                <input type="text" class="form-control" name="reg_com" placeholder="Registre du Commerce" value="{{ $association->reg_com }}"/>
                                                             </div>
                                                             <div class="field">
                                                                <label class="label_field">Code NAF</label>
                                                                <input type="text" class="form-control" name="code_naf" placeholder="Code NAF" value="{{ $association->code_naf }}"/>
                                                             </div>
                                                             <div class="field">
                                                                <label class="label_field">siret</label>
                                                                <input type="text" class="form-control" name="siret" placeholder="siret" value="{{ $association->siret }}"/>
                                                             </div>
                                                             <div class="field margin_0">
                                                                <button class="main_bt bg-warning mt-3" type="submit">Enregistrer l'association</button>
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
     @include('layouts.js')
   </body>
</html>
