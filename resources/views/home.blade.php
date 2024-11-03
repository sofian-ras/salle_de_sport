{{-- resources/views/home.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil - Salle de Sport</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url();
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            color: #333;
        }
        .header {
            background-image: url('/images/banniere.webp');
            width: 100%;
            height: 60vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: rgb(76, 5, 199);
            text-shadow: 2px 2px 4px rgba(196, 170, 170, 0.7);
        }
        .header h1 {
            font-size: 3rem;
        }
        .bouton {
            background-color: #28a745;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
        }

        .colonne {
            flex: 1;
            min-width: 250px; 
            max-width: 32%;
            margin: 10px;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>


    <div class="header">
        <h1>Bienvenue dans notre Salle de Sport !</h1>
    </div>

    <div class="container">
        <h2>Nos Services</h2>
        <p>Découvrez nos différentes offres et programmes d'abonnement.</p>

        <div class="row">
            <div class="colonne">
                <div class="carte-body">
                    <div class="carte">
                        <h5 class="Titre">Abonnements</h5>
                        <p class="desc">Accédez à nos forfaits d'abonnement flexibles adaptés à vos besoins.</p>
                        <a href="{{ url('abonnements') }}" class="bouton">Voir les Abonnements</a>
                    </div>
                </div>
            </div>

            <div class="colonne">
                <div class="carte-body">
                    <div class="carte">
                        <h5 class="Titre">Équipements</h5>
                        <p class="desc">Découvrez notre équipement de pointe pour un entraînement efficace.</p>
                        <a href="#" class="bouton">Voir les Équipements</a>
                    </div>
                </div>
            </div>

            <div class="colonne">
                <div class="carte-body">
                    <div class="carte">
                        <h5 class="Titre">Programmes</h5>
                        <p class="desc">Rejoignez nos programmes de formation adaptés à tous les niveaux.</p>
                        <a href="#" class="bouton">Voir les Programmes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
