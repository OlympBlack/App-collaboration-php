<?php
require('connexion_bd.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>App calcul</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/style.css">
    <style>

    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card table-container">
            <h3 class="card-header text-center">Synthèse des modèdes</h3>
            <div class="card-body">
                <input type="text" class="form-control border-primary" id="searchInput" placeholder="Rechercher une année">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="bg-info text-center" style="font-size: 12px;">
                                <th>Date</th>

                                <!-----------la consommation privée---------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">consommation privée</button>

                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/ConsommationPrivee.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!-----------investissement privé---------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#investissement_prive" data-bs-whatever="@getbootstrap">Investissament privé</button>

                                    <div class="modal fade" id="investissement_prive" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/investissement privee.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!-----------Exportations cotonières---------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exportation_cotonière" data-bs-whatever="@getbootstrap">Exportations cotonières</button>

                                    <div class="modal fade" id="exportation_cotonière" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/exportation cotonnier.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!-----------Estimation des importations---------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#estimation_des_importation" data-bs-whatever="@getbootstrap">Estimation des importation</button>
                                    <div class="modal fade" id="estimation_des_importation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/estimation des importation.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!-----------production horaire du travail---------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#production_horaire" data-bs-whatever="@getbootstrap">Production horaire du travail</button>
                                    <div class="modal fade" id="production_horaire" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/produiction horaire.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!-----------La production du capacité---------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#production_du_capacite" data-bs-whatever="@getbootstrap">Production du capacité</button>
                                    <div class="modal fade" id="production_du_capacite" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/production du capacite.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!----------capacité de production---------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#capacite_de_production" data-bs-whatever="@getbootstrap">Capacité de production</button>
                                    <div class="modal fade" id="capacite_de_production" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/capacite de production.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!----------Agriculture---------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#agriculture" data-bs-whatever="@getbootstrap">Agriculture</button>
                                    <div class="modal fade" id="agriculture" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/agriculture.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!----------Elevage et chasse---------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#elevage_et_chasse" data-bs-whatever="@getbootstrap">Elevage et chasse</button>
                                    <div class="modal fade" id="elevage_et_chasse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/elevage et chasse.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!---------Pêche, sylviculture et exportation  forestière--------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#peche_syviculture" data-bs-whatever="@getbootstrap">Pêche, sylviculture et exportation forestière</button>
                                    <div class="modal fade" id="peche_syviculture" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/pêche sylviculture.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!---------secteur secondaire--------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#secteur_secondaire" data-bs-whatever="@getbootstrap">Secteur secondaire</button>
                                    <div class="modal fade" id="secteur_secondeur" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/secteur secondaire.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!---------agro-industrie--------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#agro_inductrie" data-bs-whatever="@getbootstrap">Agro-industrie</button>
                                    <div class="modal fade" id="agro_inductrie" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/agro-indistrie.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!---------Industrie Extractivité--------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#inductrie_extractivite" data-bs-whatever="@getbootstrap">Industrie extractivité</button>
                                    <div class="modal fade" id="inductrie_extractivite" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/inndistrie-extrative.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!---------Autres industrie manifacturière--------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#autres_industries" data-bs-whatever="@getbootstrap">Autres industries manifacturiè</button>
                                    <div class="modal fade" id="autres_industries" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/autre indistrie.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!---------Electricité et eau--------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#electricite_eau" data-bs-whatever="@getbootstrap">Electicité et eau</button>
                                    <div class="modal fade" id="electricite_eau" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/electricité et eau.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!---------BTP--------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#btp" data-bs-whatever="@getbootstrap">BTP</button>
                                    <div class="modal fade" id="btp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/BTP.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!--------Secteur tertiaire--------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#secteur_tertiaire" data-bs-whatever="@getbootstrap">Secteur tertiaire</button>
                                    <div class="modal fade" id="secteur_tertiaire" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/SECTEUR TERTIAIRE.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!--------Commerce-------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#commercer" data-bs-whatever="@getbootstrap">Commerce</button>
                                    <div class="modal fade" id="commerce" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/COMMERCE.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!--------Restauration hôtel-------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#restauration_hotel" data-bs-whatever="@getbootstrap">Restauration hôtel</button>
                                    <div class="modal fade" id="restauration_hotel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/RESTORATION HOTEL.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!--------Transport-------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#transport" data-bs-whatever="@getbootstrap">Transport</button>
                                    <div class="modal fade" id="transport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/TRANSPORT.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!--------Communication-------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#communication" data-bs-whatever="@getbootstrap">Communication</button>
                                    <div class="modal fade" id="communication" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/COMMUNICATION.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!--------Banques et finances-------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#banques_et_finance" data-bs-whatever="@getbootstrap">Banque et finance</button>
                                    <div class="modal fade" id="banques_et_finance" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/BANQUE ET FINANCES.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!--------Administration publique et sécurité sociale-------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#administration_publique" data-bs-whatever="@getbootstrap">Administration publique et sécurité sociale</button>
                                    <div class="modal fade" id="administration_publique" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/ADMINISTRATIN PUBLIC.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!--------Secteur éducatif------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#secteur_edicatif" data-bs-whatever="@getbootstrap">Secteur éducatif</button>
                                    <div class="modal fade" id="secteur_edicatif" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/SECTEUR EDICATIF.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!--------Secteur de la santé et action sociale------->
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#secteur_de_sante" data-bs-whatever="@getbootstrap">Secteur de la santé et action sociale-</button>
                                    <div class="modal fade" id="secteur_de_sante" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/SECTEUR DE LA SANT2.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!--------Autres services------>
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#autres_services" data-bs-whatever="@getbootstrap">Autres services</button>
                                    <div class="modal fade" id="autres_services" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/AUTRES SERVICES.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!--------Croissance inégalité et pauvreté------>
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#croissance_negalite" data-bs-whatever="@getbootstrap">Croissance inégalité et pauvreté</button>
                                    <div class="modal fade" id="croissance_negalite" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/croissance egalite.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!--------Transformation structurelle de l’économie, inégalité et pauvreté------>
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#transformation_structurelle" data-bs-whatever="@getbootstrap">Transformation structurelle de l’économie, inégalité et pauvreté</button>
                                    <div class="modal fade" id="transformation_structurelle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/transformation stucturelle.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!--------Éducation, inégalité, croissance-pauvreté------>
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#education_inegalité" data-bs-whatever="@getbootstrap">Éducation, inégalité, croissance-pauvreté</button>
                                    <div class="modal fade" id="education_inegalité" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/education integralite.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!--------Santé, inégalité, croissance-pauvreté------>
                                <th>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#sante_inegalite" data-bs-whatever="@getbootstrap">Santé, inégalité, croissance-pauvreté</button>
                                    <div class="modal fade" id="sante_inegalite" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/sante integralite.JPG" alt="" srcset="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <!-------tableau body-------->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h5>1999</h5>
                                </td>
                                <td><?php $request = $bdd->prepare('SELECT Stockdeladette1t FROM databasecsv WHERE Années0t=1999');
                                    $request->execute();
                                    $results = $request->fetchAll(PDO::FETCH_OBJ);
                                    foreach ($results as $result) {
                                        echo $result->Stockdeladette1t;
                                    }
                                    ?></td>

                                <td><?php $request = $bdd->prepare('SELECT Dettepubliquebilaterale2t FROM databasecsv WHERE Années0t=1999');
                                    $request->execute();
                                    $results = $request->fetchAll(PDO::FETCH_OBJ);
                                    foreach ($results as $result) {
                                        echo $result->Dettepubliquebilaterale2t;
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php $request = $bdd->prepare('SELECT Dettepubliquemultilatera3t FROM databasecsv WHERE Années0t=1999');
                                    $request->execute();
                                    $results = $request->fetchAll(PDO::FETCH_OBJ);
                                    foreach ($results as $result) {
                                        echo $result->Dettepubliquemultilatera3t;
                                    }
                                    ?>
                                </td>
                                <td>0.14</td>
                                <td>0.5</td>
                                <td>0.14</td>
                                <td>0.18</td>
                                <td>Donnée 1-9</td>
                                <td>Donnée 1-10</td>
                                <td>Donnée 1-11</td>
                                <td>Donnée 1-12</td>
                                <td>Donnée 1-13</td>
                                <td>Donnée 1-14</td>
                                <td>Donnée 1-15</td>
                                <td>Donnée 1-16</td>
                                <td>Donnée 1-17</td>
                                <td>Donnée 1-18</td>
                                <td>Donnée 1-19</td>
                                <td>Donnée 1-20</td>
                                <td>Donnée 1-21</td>
                                <td>Donnée 1-22</td>
                                <td>Donnée 1-23</td>
                                <td>Donnée 1-24</td>
                                <td>Donnée 1-25</td>
                                <td>Donnée 1-26</td>
                                <td>Donnée 1-27</td>
                                <td>Donnée 1-28</td>
                                <td>Donnée 1-29</td>
                                <td>Donnée 1-30</td>
                                <td>Donnée 1-31</td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>2000</h5>
                                </td>
                                <td>Donnée 2-2</td>
                                <td>Donnée 2-3</td>
                                <td>Donnée 2-4</td>
                                <td>Donnée 2-5</td>
                                <td>Donnée 2-6</td>
                                <td>Donnée 2-7</td>
                                <td>Donnée 2-8</td>
                                <td>Donnée 2-9</td>
                                <td>Donnée 2-10</td>
                                <td>Donnée 2-11</td>
                                <td>Donnée 2-12</td>
                                <td>Donnée 2-13</td>
                                <td>Donnée 2-14</td>
                                <td>Donnée 2-15</td>
                                <td>Donnée 2-16</td>
                                <td>Donnée 2-17</td>
                                <td>Donnée 2-18</td>
                                <td>Donnée 2-19</td>
                                <td>Donnée 2-20</td>
                                <td>Donnée 2-21</td>
                                <td>Donnée 2-22</td>
                                <td>Donnée 2-23</td>
                                <td>Donnée 2-24</td>
                                <td>Donnée 2-25</td>
                                <td>Donnée 2-26</td>
                                <td>Donnée 2-27</td>
                                <td>Donnée 2-28</td>
                                <td>Donnée 2-29</td>
                                <td>Donnée 2-30</td>
                                <td>Donnée 2-31</td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>2001</h5>
                                </td>
                                <td>Donnée 2-2</td>
                                <td>Donnée 2-3</td>
                                <td>Donnée 2-4</td>
                                <td>Donnée 2-5</td>
                                <td>Donnée 2-6</td>
                                <td>Donnée 2-7</td>
                                <td>Donnée 2-8</td>
                                <td>Donnée 2-9</td>
                                <td>Donnée 2-10</td>
                                <td>Donnée 2-11</td>
                                <td>Donnée 2-12</td>
                                <td>Donnée 2-13</td>
                                <td>Donnée 2-14</td>
                                <td>Donnée 2-15</td>
                                <td>Donnée 2-16</td>
                                <td>Donnée 2-17</td>
                                <td>Donnée 2-18</td>
                                <td>Donnée 2-19</td>
                                <td>Donnée 2-20</td>
                                <td>Donnée 2-21</td>
                                <td>Donnée 2-22</td>
                                <td>Donnée 2-23</td>
                                <td>Donnée 2-24</td>
                                <td>Donnée 2-25</td>
                                <td>Donnée 2-26</td>
                                <td>Donnée 2-27</td>
                                <td>Donnée 2-28</td>
                                <td>Donnée 2-29</td>
                                <td>Donnée 2-30</td>
                                <td>Donnée 2-31</td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>2002</h5>
                                </td>
                                <td>Donnée 2-2</td>
                                <td>Donnée 2-3</td>
                                <td>Donnée 2-4</td>
                                <td>Donnée 2-5</td>
                                <td>Donnée 2-6</td>
                                <td>Donnée 2-7</td>
                                <td>Donnée 2-8</td>
                                <td>Donnée 2-9</td>
                                <td>Donnée 2-10</td>
                                <td>Donnée 2-11</td>
                                <td>Donnée 2-12</td>
                                <td>Donnée 2-13</td>
                                <td>Donnée 2-14</td>
                                <td>Donnée 2-15</td>
                                <td>Donnée 2-16</td>
                                <td>Donnée 2-17</td>
                                <td>Donnée 2-18</td>
                                <td>Donnée 2-19</td>
                                <td>Donnée 2-20</td>
                                <td>Donnée 2-21</td>
                                <td>Donnée 2-22</td>
                                <td>Donnée 2-23</td>
                                <td>Donnée 2-24</td>
                                <td>Donnée 2-25</td>
                                <td>Donnée 2-26</td>
                                <td>Donnée 2-27</td>
                                <td>Donnée 2-28</td>
                                <td>Donnée 2-29</td>
                                <td>Donnée 2-30</td>
                                <td>Donnée 2-31</td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>2002</h5>
                                </td>
                                <td>Donnée 2-2</td>
                                <td>Donnée 2-3</td>
                                <td>Donnée 2-4</td>
                                <td>Donnée 2-5</td>
                                <td>Donnée 2-6</td>
                                <td>Donnée 2-7</td>
                                <td>Donnée 2-8</td>
                                <td>Donnée 2-9</td>
                                <td>Donnée 2-10</td>
                                <td>Donnée 2-11</td>
                                <td>Donnée 2-12</td>
                                <td>Donnée 2-13</td>
                                <td>Donnée 2-14</td>
                                <td>Donnée 2-15</td>
                                <td>Donnée 2-16</td>
                                <td>Donnée 2-17</td>
                                <td>Donnée 2-18</td>
                                <td>Donnée 2-19</td>
                                <td>Donnée 2-20</td>
                                <td>Donnée 2-21</td>
                                <td>Donnée 2-22</td>
                                <td>Donnée 2-23</td>
                                <td>Donnée 2-24</td>
                                <td>Donnée 2-25</td>
                                <td>Donnée 2-26</td>
                                <td>Donnée 2-27</td>
                                <td>Donnée 2-28</td>
                                <td>Donnée 2-29</td>
                                <td>Donnée 2-30</td>
                                <td>Donnée 2-31</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src="static/js/script.js"></script>

</body>

</html>