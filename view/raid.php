<div class="row col s12">
    <p>Comme on peut le constater il existe plusieurs types de raid. <br>
    Nous allons maintenant étudier les différents avantages et inconvénients que ces raids proposent pour les entreprises</p></div>
</div>
<div class="row">
    <table class="bordered striped highlight responsive-table">
        <thead>
        <tr>
            <th id="test">Type de raid</th>
            <th>Avantages</th>
            <th>Inconvénients</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>Raid 0</td>
            <td>Rapport performance/prix intéressant.<br>
                Possibilité d’exécuter des lectures et écritures en simultanées sur chaque disque.
            </td>
            <td>Aucune tolérance aux pannes.<br>
                Défaillance sur un disque = perte totale des données.
            </td>
        </tr>
        <tr>
            <td>Raid 1</td>
            <td>Offre un niveau de tolérance aux pannes à bon prix.<br>
                Offre un haut niveau de disponibilité des données grâce à une copie complète des informations.
            </td>
            <td>Offre un niveau de tolérance aux pannes à bon prix.<br>
                Offre un haut niveau de disponibilité des données grâce à une copie complète des informations.
            </td>
        </tr>
        <tr>
            <td>Raid 5</td>
            <td>Offre un niveau de tolérance aux pannes ne nécessitant pas la duplication de données.<br>
                Offre une performance de lecture excellente.<br>
                Offre une méthode de correction entre les données (bits de parité).
            </td>
            <td>Performance écriture pénalisée (données de parité qui doivent être recalculées et enregistrées en même temps que les nouvelles données).<br>
                Utilisation obligatoire d’un minimum de 3 disques durs.
            </td>
        </tr>
        <tr>
            <td>Raid 0+1</td>
            <td>Offre un bon stockage des données car celles-ci se font instantanément par l’intermédiaire de sauvegarde.<br>
                Raid 01 combine les performances des deux types de raid 0 et 1 pour bénéficier des meilleures performances sans sacrifier l’intégrité des informations.<br>
            </td>
            <td>N’assure pas les pannes, car si un disque tombe en panne il faut reconstruire tout le miroir.<br>
                Fonctionnement en mode dégradé plus lent.<br>
                Coût matériel élevé.<br>
                Nécessite un minimum de quatre disques pour fonctionner et ne prend que la moitié du stockage totale.
            </td>
        </tr>
        <tr>
            <td>Raid 1+0</td>
            <td>Offre une bonne optimisation des performances à l’entrelacement des données tout en assurant la redondance des données.<br>
                Assure une tolérance aux pannes.
            </td>
            <td>Nécessite un minimum de deux grappes d’au moins deux disques pour fonctionner, ce qui peut engendrer un coût assez élevé.</td>
        </tr>
        </tbody>
    </table>
</div>
