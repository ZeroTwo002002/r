<?php
include
try {
    
    // Requête SQL pour extraire les données de la base de données
    $sql = "SELECT id, titre, description FROM ma_table";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Affichez les données sous forme de cartes Bootstrap
    while ($row = $stmt->fetch()) {
        echo '
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">'.$row["titre"].'</h5>
                    <p class="card-text">'.$row["description"].'</p>
                </div>
            </div>
        </div>';
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
