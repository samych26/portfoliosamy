
<?php
session_start();
if(isset($_POST['send'])){
  // extraction des données de la base de données
  extract($_POST);
  // verfication de l'exsistance des données
  if(isset($nom)&& $nom != "" &&
  isset($prenom) && $prenom != "" &&
   isset($email) &&$email != "" &&
    isset($message) && $message != ""){
    //  envoyer l'email
    $to = "samycherfa35@gmail.com";
    
    $subject = "HTML email";

    $message = "
      <p> Vous avez un nouveau message de votre site web !</p>
      <p><strong>Nom:</strong> $nom</p>
      <p><strong>Prenom:</strong> $prenom</p>
      <p><strong>Email:</strong> $email</p>
      <p><strong>Message:</strong> $message</p>
    ";


    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers .= 'From: <' .$email. '>' . "\r\n";


    $send = mail($to,$subject,$message,$headers);

    if($send){
      $_SESSION['succes_message']="Votre message a été envoyé avec succès !";
    }else{
      $info="Erreur lors de l'envoi du message !";

    }

  }else{
    $info="Veuillez remplir tous les champs !";

  }
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mon Portfolio</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="mediaqueries.css" />
  </head>
  <body>
    <nav id="desktop-nav">
      <div class="logo">Samy CHERFA</div>
      <div>
        <ul class="nav-links">
          <li><a href="#about">A propos</a></li>
          <li><a href="#experience">Compétences</a></li>
          <li><a href="#projects">Projets</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>
    <nav id="hamburger-nav">
      <div class="logo">Samy CHERFA</div>
      <div class="hamburger-menu">
        <div class="hamburger-icon" onclick="toggleMenu()">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="menu-links">
          <li><a href="#about" onclick="toggleMenu()">A propos</a></li>
          <li><a href="#experience" onclick="toggleMenu()">Compétences</a></li>
          <li><a href="#projects" onclick="toggleMenu()">Projets</a></li>
          <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
        </div>
      </div>
    </nav>
    <section id="profile">
      <div class="section__pic-container">
        <img src="./assets/photo.png" alt="Samy Cherfa profile picture" />
      </div>
      <div class="section__text">
        <p class="section__text__p1">Hello, I'm</p>
        <h1 class="title">Samy CHERFA</h1>
        <p class="section__text__p2">Etudiant en deuxième année de Licence Informatique</p>
        <div class="btn-container">
          <button
            class="btn btn-color-2"
            onclick="window.open('./assets/CV.pdf', '_blank')"
          >
            Download CV
          </button>
        </div>
      </div>
    </section>
    <section id="about">
      <p class="section__text__p1">En savoir plus</p>
      <h1 class="title">A propos de moi</h1>
      <div class="section-container">
        <div class="about-details-container">
          <div class="about-containers">
            <div class="details-container">
              <img
                src="./assets/experience.png"
                alt="Experience icon"
                class="icon"
              />
              <h3>Experience</h3>
              <p>SARL NHOLD <br />Stage de découverte: 1 mois</p>
            </div>
            <div class="details-container">
              <img
                src="./assets/education.png"
                alt="Education icon"
                class="icon"
              />
              <h3>Formations</h3>
              <p>
                Licence 2: Informatique
                <br />
                Baccalauréat: Technique mathématique
              </p>
            </div>
          </div>
          <div class="text-container">
            <p>
              Etudiant en deuxième année de Licence Informatique à l'Université de
              Bejaia. Passionné par le développement de logiciels et les nouvelles
              technologies, je me suis engagé dans divers projets académiques et
              stages professionnels pour renforcer mes compétences en
              programmation et en gestion de projet. Je suis toujours à la
              recherche de nouvelles opportunités pour apprendre et innover dans
              le domaine de l'informatique.            
            </p>
          </div>
        </div>
      </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#experience'"
      />
    </section>
    <section id="experience">
      <p class="section__text__p1">Découvrez mes</p>
      <h1 class="title">Compétences</h1>
      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container">
            <h2 class="experience-sub-title">Frontend Development</h2>
            <div class="article-container">
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>HTML</h3>
                  <p>Avancée</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>CSS</h3>
                  <p>Avancée</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>JavaScript</h3>
                  <p>intermédiaire</p>
                </div>
              </article>
            </div>
          </div>
          <div class="details-container">
            <h2 class="experience-sub-title">Backend Development</h2>
            <div class="article-container">
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>SQL</h3>
                  <p>Avancée</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>PHP</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>JAVA</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>C</h3>
                  <p>Intermediate</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#projects'"
      />
    </section>
    <section id="projects">
      <p class="section__text__p1">Decouvrez mes</p>
      <h1 class="title">Projets</h1>
      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/Rectangle 11.png"
                alt="Project 1"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">ECHOES</h2>
            <p>
              ECHOES est un événement en ligne novateur qui fusionne l'intrigue d'un jeu de piste alternatif (ARG) avec la fascination de l'informatique. Conçu pour stimuler l'ingéniosité et l'exploration intellectuelle, Echoes emmène les participants dans un voyage
            </p>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="window.open('https://github.com/Paranoid-Pufferfish/Binary-Echoes')"
              >
                Github
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/Pong-game.ico"
                alt="Project 2"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Jeu de pong</h2>
            <p>
              Mon premier projet est un jeu de Pong que j'ai développé en C avec la bibliothèque Raylib. Ce projet m'a permis de mettre en pratique mes compétences en programmation, de comprendre les bases de la gestion graphique et de l'interaction utilisateur.
            </p>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="window.open('https://github.com/samych26/Pong')"
              >
                Github
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contact">
  <!-- message d'erreur -->
<?php
  if(isset($info)){?>
    <p class="request-message" style="color:red;">
      <?= $info ?>
    </p>
    <?php
  }
  ?>
  <!-- message de reussite -->
  <?php
  if(isset($_SESSION['succes_message'])){?>
    <p class="request-message" style="color: green;">
      <?= $info ?>
    </p>
    <?php
  }
  ?>
  <div class="contact">
 
    <form action="" method="post">
      <h1 class="titre-contact">Contactez moi</h1>
    <div class="elements-form">
    <label> Nom:</label>
      <input type="text" placeholder="Nom" name="nom" >
      <label >  Prenom:</label>
      <input type="text" placeholder="Prenom" name="prenom" >
    </div>
      
    

      <div class="elements-form">
      <label>Email:</label>
      <input type="email" placeholder="Email" name="email" >
      </div>
      
      <label>Message:</label>
      <textarea name="message" id="" cols="30" rows="10" placeholder="Message" ></textarea>

      <button name="send" class="btn">Envoyer</button> 
    </form>
  </div>

</section>
    <footer>
      <nav>
        <div class="nav-links-container">
          <ul class="nav-links">
            <li><a href="#about">A propos</a></li>
            <li><a href="#experience">Compétences</a></li>
            <li><a href="#projects">Projets</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </nav>
      <p>Copyright &#169; 2023 Cherfa Samy. All Rights Reserved.</p>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
