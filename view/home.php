<title><?=$title?></title>
<body>
<header>
    <section class="header-content">
        <div class="name"><h1>Antoine Mazoyer</h1></div>
        <div class="presentation"><h2>Data Analyst</h2></div>
    </section>
</header>

<section class="aboutme">
  <div class="title"><h2>À propos de moi</h2></div>
    <div class="row profil_content">
        <div class="col s4 profil_image">
            <img class="circle responsive-img" src="../public/medias/antoine.jpg">
        </div>
        <div class="col s8 profil_description">
            <p>Antoine MAZOYER, <?php echo $mon_age ?> ans, passionné par l'informatique.<br>J'ai conçu ce site pour vous montrer l'ensemble des compétences que j'ai acquises dans ce domaine.<br>
            Par l'intermédiaire de différents projets, que se soit à l'école, en entreprise ou par moi-même.<br>
            Ce site vous permettra, recruteur ou particulier, d'en savoir plus sur mon profil.</p>
        </div>
    </div>
  <div class="profil cv">
          <a class="btn" href="cv">Voir mon CV</a>
  </div>
</section>

<section class="formation">
    <div class="formation_title">
        <h2>Mon parcours</h2>
    </div>
    <table class="striped">
        <thead>
          <tr>
            <th>Nom de la formation</th>
            <th>Description</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Filière DevOps</td>
            <td>Formation de 3 mois dans le DevOps</td>
          </tr>
          <tr>
            <td>Data Analyst</td>
            <td>Master 1 en Data Analyst</td>
          </tr>
          <tr>
            <td>Concepteur Développeur d'Applications</td>
            <td>Validation de mon bachelor en informatique avec l'entreprise La Poste en alternance. Réalisation d'une application web de suivi de gestion de projets pour les collaborateurs.</td>
          </tr>
          <tr>
            <td>BTS comptabilité-gestion</td>
            <td>Alternance avec l'entrperise Orange. Contrôle et régularisation des écarts de la TVA hebdomadaire et mensuelle.</td>
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
        <a class="more btn" href="competences">En savoir plus sur mes compétences (Portfolio)</a>
    </div>
</section>

<section class="projects_technology">
    <div class="projects col s6">
      <h2><a href="projets">Projets</a> et <a href="VeilleTechno">Veille Technologique</a></h2>
    </div>
</section>

<?php require_once('../public/templates/footer.php'); ?>