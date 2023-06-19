<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic RER</title>
</head>
<body>
    <main>
        <h1>Traffic RER</h1>
        <?php
            $url = "https://api-ratp.pierre-grimaud.fr/v4/traffic/rers";
            $response = file_get_contents($url);

            if($response) {
                $data = json_decode($response);   

                if(isset($data->result->rers)) {
                    $rers = $data->result->rers;

                    foreach ($rers as $rer) {
                        echo "<h2>Ligne " . $rer->line . "</h2>";
                        echo "<p>" . $rer->message . "</p>";
                        echo "<hr>";
                    }
                } else {
                    echo "<p>Aucune donnée disponible</p>";
                }
            } else {
                echo "<p>Erreur lors de la récupération des données</p>";
            }
        ?>
    </main>

</body>
</html>