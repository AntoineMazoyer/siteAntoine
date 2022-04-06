 
  <div class="container-fluid def">
    <br>
    <h1>Le RAID</h1><br>
    <h2><i><b><u>Qu'est-ce que le raid ?</u></b></i></h2><br>
    <p>Le RAID (Redundant Array of Inxpensive Disks) est une technologie qui combine un ensemble de plusieurs disques durs pour ne former plus qu'une unité de stockage.<br>
    Cette technologie propose aux entreprises une excellente solution de stockage pour protéger et accéder à leurs données. <br>Il en existe différents types que nous verrons sur cette page.</p>
    <hr>
</div>

<div class="row">
    <div class="col s8 raid0">
        <article class="container-fluid RAIDtexte">
            <h3><b><u>Raid 0</u></b></h3>
            <p>Pour fonctionner, le raid 0 est constitué d'au moins deux disques durs. Sa capacité est égale au disque le plus petit, c'est pour cela que l'on va privilégier deux disques de même capacité.<br>
                Le raid 0 utilise l'ensemble des disques simultanément, ce qui fait qu'on aura une augmentation des performances lectures et écritures.<br>
                Les fichiers sont répartis sur un ensemble de disques dont l'accès et l'enregistrement des informations se font rapidement.<br>
                Cependant ce raid ne garantie pas la duplication de données, c'est-à-dire qu'en cas de panne, l'accès aux fichiers sera impossible.</p>
        </article>
    </div>
    <div class="col s4">
        <img src="images/RAID0.png" id="imgraid0" alt="">
    </div>
</div>
<div class="row">
    <div class="col s8 raid1">
        <article class="container-fluid RAIDtexte">
            <h3><b><u>Raid 1</u></b></h3>
            <p>Pour fonctionner, le raid 1 est constitué d'au moins deux disques durs. Les deux disques doivent avoir la même capacité de stockage.<br>
                En effet, le raid 1 utilise le principe de mirroring, c'est-à-dire qu'il va copier le contenu d'un disque directement sur un autre.<br>
                Ce type de raid permet donc d'avoir accès aux données en cas de panne, mais en cas d'un disque défectueux il faudra arrêter le système pour pouvoir le remplacer.
        </article>
    </div>
    <div class="col s4">
        <img src="images/RAID1.png" id="imgraid1" alt="">
    </div>
</div>
<div class="row">
    <div class="col s8 raid5">
        <article class="container-fluid RAIDtexte">
            <h3><b><u>Raid 5</u></b></h3>
            <p>Pour fonctionner, le raid 5 est constitué d'au moins trois disques durs. Sa capacité est égale au disque le plus petit.<br>
                Le raid 5 combine les caractéristiques du raid 0 et 1 en utilisant l'ensemble des disques simultanément.<br>
                Il permet donc d'avoir accès aux informations en cas de panne mais permet aussi d'enregistrer l'information plus rapidement.<br>
                Cependant la reconstitution de la grappe peut prendre plusieurs heures (pour 1TB on a besoin d'une dixaine d'heure) et il est possible de perdre un deuxième disque quand un à lâcher.
            </p>
        </article>
    </div>
    <div class="col s4">
        <img src="images/RAID5.png" id="imgraid5" alt="">
    </div>
</div>
<div class="row">
    <div class="col s8 raid01">
        <article class="container-fluid RAIDtexte">
            <h3><b><u>Raid 01</u></b></h3>
            <p>Pour fonctionner, le raid 01 (0+1) est constitué d'au moins quatres disques durs. Ensuite si on souhaite ajouter d'autres disques, il faudra les mettre 2 par 2 au sein de la grappe.<br>
                Le raid 01 comme son nom l'indique utilise la technologie du raid 0 plus celle du raid 1 pour avoir le maximum de performance.<br>
                Il permet d'obtenir une forte redondance de données avec une bonne performance de lecture et écritures.<br>
                Cependant le ratio prix/redondance est très élevé, ce qui fait qu'il n'est pas ou peu utilisé par les entreprises.
            </p>
        </article>
    </div>
    <div class="col s4">
        <img src="images/RAID01.png" id="imgraid01" alt="">
    </div>
</div>
<div class="row">
    <div class="col s8 raid10">
        <article class="container-fluid RAIDtexte">
            <h3><b><u>Raid 10</u></b></h3>
            <p>Pour fonctionner, le raid 10 (1+0) est constitué d'au moins quatres disques durs. Sa capacité est égale au disque le plus petit, c'est pour cela que l'on va privilégier deux disques de même capacité.<br>
                Le raid 0 utilise l'ensemble des disques simultanément, ce qui fait qu'on aura une augmentation des performances lectures et écritures.<br>
                Les fichiers sont répartis sur un ensemble de disques dont l'accès et l'enregistrement des informations se font rapidement.<br>
                Cependant ce raid ne garantie pas la duplication de données, c'est à dire qu'en cas de panne, l'accès aux fichiers sera impossible.</p>
        </article>
    </div>
    <div class="col s4">
        <img src="images/RAID10.png" id="imgraid10" alt="">
    </div>
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
