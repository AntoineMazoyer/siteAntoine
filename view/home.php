<title><?=$title?></title>
<body>
<header>
    <section class="header-content">
        <div class="name"><h1>Antoine Mazoyer</h1></div>
        <div class="presentation"><h2>Concepteur Développeur d'Applications</h2></div>
    </section>
</header>

<section class="aboutme">
  <div class="title"><h2>À propos de moi</h2></div>
    <div class="profil_content">
        <div class="profil_image">
            <img class="circle responsive-img" src="../public/medias/antoine.jpg">
        </div>
        <div class="profil_description">
            <p>Antoine MAZOYER, <?php echo $mon_age ?> ans, passionné par l'informatique.<br>J'ai conçu ce site pour vous montrer l'ensemble de mes compétences que j'ai acquises dans ce domaine. 
            Par l'intermédiaire de différents projets, que se soit à l'école, en entreprise ou par moi-même à travers différents projets personnels<br>
            Ce site vous permettra également, recruteur/particulier, d'en savoir un peu plus sur mon profil.</p>
        </div>
    </div>
  <div class="profil cv">
          <a class="btn" href="cv.php">Visualiser mon CV</a>
  </div>
</section>

<section class="formation">
    <div class="formation_title">
        <h2>Mon parcours</h2>
    </div>
    <table class="striped centered">
        <thead>
          <tr>
            <th>Nom de la formation</th>
            <th>Description</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>BTS comptabilité-gestion en alternance</td>
            <td>Contrôle de la TVA mensuelle et hebdomadaire au sein de l'entreprise Orange. Contrôle des différents écarts et régularisation de ces derniers.</td>
          </tr>
          <tr>
            <td>Bachelor informatique (Titre CDA) en alternance</td>
            <td>Préparation du titre Concepteur Développeur d'Applications avec l'entreprise La Poste. Réalisation d'une application web de gestion de projets pour les collaborateurs du groupe La Poste. Langages utilisés : PHP, JavaScript, CSS3, HTML5 et SQL.</td>
          </tr>
          <tr>
            <td>Data Analyst</td>
            <td>Préparation et validation de la formation de Data Analyst avec OpenClassrooms</td>
          </tr>
        </tbody>
      </table>
</section>
    
<section class="skills">
  <h2>Mes compétences</h2>
    <div class="list">
      <div class="skill">
          <li>HTML5</li><span class="bar"><span class="html"></span></span>
      </div>
      <div class="skill">
          <li>CSS3</li><span class="bar"><span class="css"></span></span>
      </div>
      <div class="skill">
          <li>PHP</li><span class="bar"><span class="php"></span></span>
      </div>
      <div class="skill">
          <li>JavaScript</li><span class="bar"><span class="javascript"></span></span>
      </div>
      <div class="skill">
          <li>SQL</li><span class="bar"><span class="sql"></span></span>
      </div>
      <div class="skill">
          <li>C#</li><span class="bar"><span class="csharp"></span></span>
      </div>
      <div class="skill">
          <li>C++</li><span class="bar"><span class="cplusplus"></span></span>
      </div>
      <div class="skill">
          <li>Java</li><span class="bar"><span class="java"></span></span>
      </div>
      <div class="skill">
          <li>Python</li><span class="bar"><span class="python"></span></span>
      </div>
      <div class="skill">
          <li>R</li><span class="bar"><span class="r"></span></span>
      </div>
    </div>
    <div class="btn_placement">
        <a class="more btn" href="skills.php">En savoir plus sur mes compétences (Portfolio)</a>
    </div>
</section>

<section class="projects">
    <div class="project_title">
        <h2>Projets + Veille Technologique</h2>
    </div>
    <div><p>En cours de réalisation</p></div>
    <!-- <div class="row">
      <ul class="collapsible popout col s6">
        <li>
          <div class="collapsible-header"><i class="material-icons">business_center</i>Liste de mes projets</div>
          <div class="collapsible-body">
            <ul class="collection">
              <li class="collection-item avatar">
                <a href="#!">
                  <img src="../public/medias/airAtlantique.png" alt="" class="circle">
                  <span class="title">AirAtlantique</span>
                  <p><br>Réalisation d'une application en WPF permettant la gestion des vols pour l'entreprise.</p>
                </a>
              </li>
            </ul><br>
            <ul class="collection">
              <li class="collection-item avatar">
                <a href="#!">
                  <img src="../public/medias/airAtlantique.png" alt="" class="circle">
                  <span class="title">AirAtlantique</span>
                  <p><br>Réalisation d'une application web permettant aux clients d'air Atlantique de réserver 
                    un vol et d'acheter leurs billets.</p>
                </a>
              </li>
            </ul><br>
            <ul class="collection">
              <li class="collection-item avatar">
                <a href="#!">
                  <img src="../public/medias/laposte.png" alt="" class="circle">
                  <span class="title">La Poste</span>
                  <p><br>Création d'une application web pour le pôle du CSMSI de La Poste permettant d'améliorer leur gestion de projets
                  (ASGP - Application de Suivie de Gestion de Projet).</p>
                </a>
              </li>
            </ul>
          </div>
        </li>
        </ul>
        <ul class="collapsible popout col s6">
          <li>
            <div class="collapsible-header"><i class="material-icons">border_color</i>Veille Technologique</div>
            <div class="collapsible-body">
              <ul class="collection">
                <li class="collection-item avatar">
                  <a href="#!">
                    <img src="../public/medias/RAID0.png" alt="" class="circle">
                    <span class="title">Les Raids</span>
                    <p><br>Étude réalisée sur une technologie permettant aux entreprises de stocker leurs données.
                    </p>
                  </a>
                </li>
              </ul><br>
              <ul class="collection">
              <li class="collection-item avatar">
                <a href="#!">
                  <img src="../public/medias/rightjoin.png" alt="" class="circle">
                  <span class="title">Les méthodes de sauvegarde</span>
                    <p><br>Étude menée sur la façon de sauvegarder différentes données.
                  </p>
                </a>
              </li>
              </ul>
          </div>
          </li>
        </ul>
    </div> -->
</section>

<?php require_once('../public/templates/footer.php'); ?>