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
                                 
                                    <!-- Modal -->
                                    <div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Importer les adherents</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                              </div>
                                          <div class="modal-body">
                                            <div class="container-fluid">
                                               <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                                                  @csrf
                                                  <div class="form-group mb-4">
                                                      <div class="custom-file text-left">
                                                          <input type="file" name="file" class="custom-file-input" id="customFile">
                                                          <label class="custom-file-label" for="customFile">Choose file</label>
                                                      </div>
                                                  </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-warning">Save</button>
                                          </div>
                                                </form>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <button class="btn btn-primary mr-1"  data-toggle="modal" data-target="#import">Importer Adhetrents</button>
                                    <a class="btn btn-success mr-1" href="{{ route('export-users') }}">Exporter Adhetrents</a>
                                    <button class="btn btn-warning text-white mr-1"  data-toggle="modal" data-target="#modelId">+ Ajouter un adherent</button>
                                    <button class="btn bg-dark text-white"  data-toggle="modal" data-target="#typeA">+ Type adherent</button>
                                  
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
                                                   <th>Noms et prenoms</th>
                                                   <th>Numero Tel</th>
                                                   <th>Civilité</th>
                                                   <th>Adresse</th>
                                                   <th>Date Naissance</th>
                                                   <th>Age</th>
                                                   <th>Date D'adhesion</th>
                                                   <th>Banque</th>
                                                   <th>Action</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                @foreach ($users as $user)
                                                <tr>
                                                   <td>
                                                    @if($user->photo)
                                                    <img class="rounded-circle" width="50" src="{{asset('images')}}/{{ $user->photo }}">
                                                    @endif
                                                   </td>
                                                   <td>
                                                       <a href="">{{ $user->name }}</a>
                                                   </td>

                                                   <td>
                                                       <a>{{ $user->phone }}</a>
                                                    </td>
                                                   <td>
                                                       <a>{{ $user->civilite }}</a>
                                                   </td>
                                                   <td class="project_progress">
                                                       <a>{{ $user->adresse }}</a>
                                                   </td>
                                                   <td class="project_progress">
                                                       <a>{{ $user->hbd }}</a>
                                                   </td>
                                                   <td class="project_progress">
                                                       <a>{{ 2023 - date('Y', strtotime($user->hbd))  }} ans</a>
                                                   </td>
                                                   <td class="project_progress">
                                                       <a>{{ $user->created_at->format('d-M-Y') }}</a>
                                                   </td>
                                                   <td class="project_progress">
                                                       <a>{{ $user->bank }}</a>
                                                   </td>

                                                   <td>
                                                       <div class="dropdown">
                                                           <a href="" class="text-warning h3 dropdown-toggle" id="triggerId" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                                           <div class="dropdown-menu" aria-labelledby="triggerId">
                                                               <a class="dropdown-item disabled" href="#">Modifier</a>
                                                               <a class="dropdown-item disabled" href="#">supprimer</a>
                                                               <a class="dropdown-item disabled" href="#">Gerer</a>
                                                           </div>
                                                       </div>
                                                   </td>
                                                </tr>
                                                @endforeach

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
     @include('layouts.js')

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

                <form method="POST" action="{{ route('addAdherant') }}" enctype="multipart/form-data">
                    @csrf

                  <div class="form-group row">
                    <label for="inputtext3" class="col-sm-2 col-form-label">nom</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputtext3" name="name">
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
                        <select name="civilite" id="" class="form-control">
                            <option value="M">Monsieur</option>
                            <option value="Mme">Madame</option>
                            <option value="Mlle">Mademoiselle</option>
                        </select>

                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputtext3" class="col-sm-2 col-form-label">Type d'adhérent</label>
                    <div class="col-sm-10">
                        <select name="typeAdherent_id" id="" class="form-control">
                            @foreach ($types as $type)
                                 <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>

                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputtext3" class="col-sm-2 col-form-label">Adresse</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputtext3" name="adresse">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputtext3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputtext3" name="email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputtext3" class="col-sm-2 col-form-label">Date naissance</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputtext3" name="hbd">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputtext3" class="col-sm-2 col-form-label">Pays</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputtext3" name="pays">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputtext3" class="col-sm-2 col-form-label">photo</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="inputtext3" name="photo">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputtext3" class="col-sm-2 col-form-label">Banque</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputtext3" name="bank">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputtext3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputtext3" class="col-sm-2 col-form-label">password confirm</label>
                    <div class="col-sm-10">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                  </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
                <button type="submit" class="btn btn-warning">Enregistrer</button>
            </div>
        </form>
        </div>
    </div>
   </div>


   <!-- Modal -->
   <div class="modal fade" id="typeA" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">NOUVEAU TYPE D'ADHERENT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('types.store') }}">
                    @csrf

                  <div class="form-group row">
                    <label for="inputtext3" class="col-sm-2 col-form-label">nom</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputtext3" name="name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputtext3" class="col-sm-2 col-form-label">description</label>
                    <div class="col-sm-10">
                      <textarea type="text" class="form-control" id="inputtext3" name="description"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputtext3" class="col-sm-2 col-form-label">Droit d'entrer</label>
                    <div class="col-sm-10">
                      <input type="tel" class="form-control" id="inputtext3" name="droit">
                    </div>
                  </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
                <button type="submit" class="btn btn-warning">Enregistrer</button>
            </div>
            </form>
        </div>
    </div>
   </div>
   </body>
</html>
