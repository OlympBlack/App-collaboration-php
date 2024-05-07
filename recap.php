<?php
require('connexion_bd.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>App calcul</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <style>
        body {
            background-image: url("img/e.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .table-container {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
            color: black;
        }

        table {
            margin-bottom: 0;
        }

        input.form-control {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card table-container">
            <h2 class="card-header text-center">Tableau de Données</h2>
            <div class="card-body">
                <input type="text" class="form-control" id="searchInput" placeholder="Rechercher...">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
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
                                <th>Colonne 3</th>
                                <th>Colonne 4</th>
                                <th>Colonne 5</th>
                                <th>Colonne 6</th>
                                <th>Colonne 7</th>
                                <th>Colonne 8</th>
                                <th>Colonne 9</th>
                                <th>Colonne 10</th>
                                <th>Colonne 11</th>
                                <th>Colonne 12</th>
                                <th>Colonne 13</th>
                                <th>Colonne 14</th>
                                <th>Colonne 15</th>
                                <th>Colonne 16</th>
                                <th>Colonne 17</th>
                                <th>Colonne 18</th>
                                <th>Colonne 19</th>
                                <th>Colonne 20</th>
                                <th>Colonne 21</th>
                                <th>Colonne 22</th>
                                <th>Colonne 23</th>
                                <th>Colonne 24</th>
                                <th>Colonne 25</th>
                                <th>Colonne 26</th>
                                <th>Colonne 27</th>
                                <th>Colonne 28</th>
                                <th>Colonne 29</th>
                                <th>Colonne 30</th>
                                <th>Colonne 31</th>
                                <th>Colonne 32</th>
                                <th>Colonne 33</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1999</td>
                                <td> <?php $request = $bdd->prepare('SELECT Dettepubliquemultilatera3t FROM databasecsv WHERE Années0t=1999');
                                        $request->execute();
                                        $results = $request->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($results as $result) {
                                            echo $result->Dettepubliquemultilatera3t;
                                        }
                                        ?></td>
                                <td>Donnée 1-3</td>
                                <td>Donnée 1-4</td>
                                <td>Donnée 1-5</td>
                                <td>Donnée 1-6</td>
                                <td>Donnée 1-7</td>
                                <td>Donnée 1-8</td>
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
                                <td>Donnée 1-32</td>
                                <td>Donnée 1-33</td>
                            </tr>
                            <tr>
                                <td>2000</td>
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
                                <td>Donnée 2-32</td>
                                <td>Donnée 2-33</td>
                            </tr>
                            <!-- Répéter pour les autres lignes -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var searchInput = document.getElementById('searchInput');
            searchInput.addEventListener('input', function() {
                var searchText = this.value.toLowerCase();
                var rows = document.querySelectorAll('table tbody tr');

                rows.forEach(function(row, index) {
                    if (index < 6) {
                        var rowData = row.textContent.toLowerCase();
                        if (rowData.includes(searchText)) {
                            row.style.display = 'table-row';
                        } else {
                            row.style.display = 'none';
                        }
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>

</html>