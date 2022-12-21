<a class="waves-effect waves-light btn" href="accueil"><i class="material-icons left">home</i>Retour à l'accueil</a>

<div class="project-content">
    <h1>PROJETS</h1>
    <div class="row">
        <div class="card col s5">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="/public/medias/appli csharp.png">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Air Atlantique<i class="material-icons right">more_vert</i></span>
                <p>Réalisation d'une application permettant aux clients d'Air Atlantique de réserver leurs vols</p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Air Atlantique | Nombre de personnes sur le projet : 2<i class="material-icons right">close</i></span>
                <p>Actions réalisées pour mener à bien le projet : <br><br>
                    - Analyse du cahier des charges que vous pouvez retrouvez <a href="/public/medias/Sujets-AA.pdf" target="_blank">ici</a> !<br>
                    - Réalisation du schéma des cas d'utilisation permettant de connaître le rôle de chaque acteur qui interagit avec l'application.<br>
                    - Réalisation du schéma de base de données en prenant en compte les informations de notre document et les informations données par notre intervenant à l'oral que vous pouvez retrouver <a href="/public/medias/NotesBDD.txt" target="_blank">ici</a>.<br>
                    - Conception de la base de données sous SQL avec le logiciel MSSMS (Microsoft SQL Server Management Studio) une fois que notre schéma a été validé par notre intervenant.<br>
                    - Réalisation de l'application backend en C# avec WPF.<br>
                    - Réalisation de l'application frontend en PHP avec le framework Symfony.<br>
                    - Mise en place de différents types de test pour vérifier que nos applications seront bien fonctionnelles.
                </p>
            </div>
        </div>
        <div class="card col s5">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="/public/medias/ASGP.png">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">La Poste<i class="material-icons right">more_vert</i></span>
                <p>Conception d'une application web pour le groupe La Poste permettant de centraliser leurs projets
                (ASGP - Application de Suivie de Gestion de Projet).</p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">La Poste | Nombre de personnes sur le projet : 1<i class="material-icons right">close</i></span>
                <p>Actions réalisées pour mener à bien le projet : <br><br>
                    - Rédaction du cahier des charges avec l'ensemble des fonctionnalités que va contenir l'application.<br>
                    - Création d'un fichier excel "matrice/role" permettant de définir les droits de chaque utilisateur sur notre application.<br>
                    - Maquettage du site avec Figma permettant de savoir si le besoin correspondait avant de commencer à développer.<br>
                    - Développement de l'application en respectant deux principes fondamentaux du groupe : l'accessibilité et l'éco-conception.<br>
                    - Réalisation de la base de données au fur et à mesure. Un schéma de la base de données a été réalisé.<br>
                    - Mise en ligne de mon code sur le GitLab de l'entreprise
                </p>
            </div>
        </div>
    </div>
</div>

<div class="technology-content">
    <h1>VEILLE TECHONOLOGIQUE</h1>
    <div class="row">
        <div class="card col s5">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="/public/medias/Raid.png">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Les Raids<i class="material-icons right">more_vert</i></span>
                <p>Étude réalisée sur une technologie permettant aux entreprises de stocker leurs données.</p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Les Raids<i class="material-icons right">close</i></span>
                <p>Le RAID (Redundant Array of Inxpensive Disks) est une technologie qui combine un ensemble de plusieurs disques durs pour ne former plus qu'une unité de stockage.<br>
                Cette technologie propose aux entreprises une excellente solution de stockage pour protéger et accéder à leurs données. <br>
                Il existe différents types de RAID :<br>
                </p>
                <div class="raid-img"><img class="raid0" src="/public/medias/raid0.png"><p>Pour fonctionner, le raid 0 est constitué d'au moins deux disques durs. 
                Sa capacité est égale au disque le plus petit, c'est pour cela que l'on va privilégier deux disques de même capacité.<br>
                Le raid 0 utilise l'ensemble des disques simultanément, ce qui fait qu'on aura une augmentation des performances lectures et écritures.<br>
                Les fichiers sont répartis sur un ensemble de disques dont l'accès et l'enregistrement des informations se font rapidement.<br>
                Cependant ce raid ne garantie pas la duplication de données, c'est-à-dire qu'en cas de panne, l'accès aux fichiers sera impossible.<br>
                </p></div>
                <div class="raid-img"><p>Pour fonctionner, le raid 1 est constitué d'au moins deux disques durs. Les deux disques doivent avoir la même capacité de stockage.<br>
                En effet, le raid 1 utilise le principe de mirroring, c'est-à-dire qu'il va copier le contenu d'un disque directement sur un autre.<br>
                Ce type de raid permet donc d'avoir accès aux données en cas de panne, mais en cas d'un disque défectueux il faudra arrêter le système pour pouvoir le remplacer.<br>
                </p><img class="raid1" src="/public/medias/raid1.png"></div>
                <div class="raid-img"><img class="raid5" src="/public/medias/raid5.png"><p>Pour fonctionner, le raid 5 est constitué d'au moins trois disques durs. 
                Sa capacité est égale au disque le plus petit.<br>
                Le raid 5 combine les caractéristiques du raid 0 et 1 en utilisant l'ensemble des disques simultanément.<br>
                Il permet donc d'avoir accès aux informations en cas de panne mais permet aussi d'enregistrer l'information plus rapidement.<br>
                Cependant la reconstitution de la grappe peut prendre plusieurs heures (pour 1TB on a besoin d'une dixaine d'heure) et il est possible de perdre un deuxième disque quand un à lâcher.<br>
                </p></div>
                <div class="raid-img"><p>Pour fonctionner, le raid 01 (0+1) est constitué d'au moins quatres disques durs. 
                Ensuite si on souhaite ajouter d'autres disques, il faudra les mettre 2 par 2 au sein de la grappe.<br>
                Le raid 01 comme son nom l'indique utilise la technologie du raid 0 plus celle du raid 1 pour avoir le maximum de performance.<br>
                Il permet d'obtenir une forte redondance de données avec une bonne performance de lecture et écritures.<br>
                Cependant le ratio prix/redondance est très élevé, ce qui fait qu'il n'est pas ou peu utilisé par les entreprises.<br>
                </p><img class="raid01" src="/public/medias/raid01.png"></div>
                <div class="raid-img"><img class="raid10" src="/public/medias/raid10.png"><p>Pour fonctionner, le raid 10 (1+0) est constitué d'au moins quatres disques durs. 
                Sa capacité est égale au disque le plus petit, c'est pour cela que l'on va privilégier deux disques de même capacité.<br>
                Le raid 0 utilise l'ensemble des disques simultanément, ce qui fait qu'on aura une augmentation des performances lectures et écritures.<br>
                Les fichiers sont répartis sur un ensemble de disques dont l'accès et l'enregistrement des informations se font rapidement.<br>
                Cependant ce raid ne garantie pas la duplication de données, c'est à dire qu'en cas de panne, l'accès aux fichiers sera impossible.<br>
                </p></div>
            </div>
        </div>
        <div class="card col s5">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="/public/medias/methodeSauvegarde.jpg">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Les méthodes de sauvegarde<i class="material-icons right">more_vert</i></span>
                <p>Étude menée sur la façon de sauvegarder différentes données.</p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Les méthodes de sauvegarde<i class="material-icons right">close</i></span>
                <p>Une sauvegarde est un moyen adopté par les entreprises leur permettant d'enregistrer différentes données en temps réel. 
                   Cette sauvegarde permet aux entreprises de conserver et restaurer différentes données.<br>
                   Nous verrons ici les trois sauvegardes les plus utilisées afin de conserver les différentes données.</p>
                <div><h5><b><u>La sauvegarde totale</u></b></h3>
                <p>La sauvegarde totale permet de réaliser une duplication complète de fichiers précise contenue dans un dossier ou dans un disque. 
                C’est une méthode simple à utiliser, mais celle-ci est lourde puisque à chaque fois que l’on enregistrera une quantité de données, 
                la quantité que l'on souhaite sauvegarder va s’ajouter à la quantité déjà stockée.</p></div>
                <div><h5><b><u>La sauvegarde différentielle</u></b></h3>
                <p>La sauvegarde différentielle peut être faite après avoir réalisé une sauvegarde totale. Grâce à cette méthode on sauvegarde les différences 
                entre la première sauvegarde et l’état actuel des données. Cette méthode nécessite moins d’espace qu’une sauvegarde totale. 
                Cependant il faut restaurer la première sauvegarde ainsi que la dernière après avoir stocké les différences. 
                Cette méthode engendre une restauration plus longue.</p></div>
                <div><h5><b><u>La sauvegarde incrémentielle</u></b></h3>
                <p>La sauvegarde incrémentielle nécessite également une sauvegarde totale. 
                Ensuite grâce à cette méthode on va stocker uniquement la différence entre la sauvegarde des données actuelles et la sauvegarde précédente. 
                Il faudra restaurer la première sauvegarde ainsi que toutes les sauvegardes suivantes pour revenir à une date précise.
            </p></div>
            </div>
        </div>
    </div>
</div>