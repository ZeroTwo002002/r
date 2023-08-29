<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de données Bootstrap</title>
    <!-- Inclure les fichiers CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Liste de données</h1>
        <table class="table">
            <thead>
       
            <a href="index.php">ici</a>
            <tbody>
                <?php
                include_once('config_bdd.php');

                // requete sql pour recuperer les données
                $req = "SELECT nom, mail, subject, message FROM form";
                $resultat = $conn->query($req);

                while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($ligne["nom"]) . "</td>";
                    echo "<td>" . htmlspecialchars($ligne["mail"]) . "</td>";
                    echo "<td>" . htmlspecialchars($ligne["subject"]) . "</td>";
                    echo "<td>" . htmlspecialchars($ligne["message"]) . "</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
        </table>
    </div>

    <!-- Inclure les fichiers JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>






