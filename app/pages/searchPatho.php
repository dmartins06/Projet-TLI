{extends file='pages/base.html'}
{block name=content}
    <h1>Recherche de pathologies</h1>
        <form method="get" action="pathologies.php">
            <div class="symptomes">
                <h2>Liste des symptomes</h2>
                <!-- Afficher la liste des symptomes -->
            </div>

            <div class="criteres">
                <h2>Critères de recherche</h2>
                <!-- Afficher 3 lignes de critères avec une liste déroulante par défaut pour chaque (Méridien, type de pathologies, caractéristiques)
                    Possibilité de rajouter une liste déroulante à l'aide d'un bouton "+" pour ajouter des critères -->
            </div>

            <div class="recherche">
                <button type="submit">Rechecher</button>
            </div>

            <div class="pathologies">
                <h2>Liste des pathologies trouvées</h2>
            </div>

        </form>
{/block}