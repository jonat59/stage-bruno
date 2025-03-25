<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="ABC Transport - Services de livraison, déménagement et nettoyage industriel. Demandez un devis en ligne !"
    />
    <title>ABC</title>
    <link
      rel="icon"
      type="image/png"
      href="/favicon/favicon-96x96.png"
      sizes="96x96"
    />
    <link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/favicon/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="/favicon/apple-touch-icon.png"
    />
    <link rel="manifest" href="/favicon/site.webmanifest" />
    <link rel="stylesheet" href="/page_accueil/reset.css" />
    <link rel="stylesheet" href="/livraison/liv.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <header>
      <div id="banniere"><h1>ABC Transport</h1></div>
      <div id="nav">
        <div id="logo">
          <a href="/index.php">
            <img
              src="/page_accueil/images/Untitled.png"
              alt="Logo du site ABC Transport"
            />
          </a>
        </div>
        <nav>
          <ul>
            <li>
              <a href="/livraison/livraison.php">LIVRAISONS ÉLECTROMÉNAGERS</a>
            </li>
            <li><a href="/demenagement/demenagement.php">DÉMÉNAGEMENTS</a></li>
            <li>
              <a href="/nettoyage/nettoyage.php">NETTOYAGES INDUSTRIELS</a>
            </li>
            <li>
              <a href="/fournisseurs/fournisseurs.php">CONTACT GROSSISTES</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
    <div class="container" id="accueil">
      <h2><p>BIENVENUE SUR NOTRE SERVICE DE LIVRAISONS</p></h2>
      <video width="100%" height="100%" autoplay loop muted>
        <source src="livraison.mp4" type="video/mp4" />
      </video>
      <p2>
        ABC Transport est une entreprise spécialisée dans le transport de
        marchandises et de colis. Nous vous proposons un service de livraison
        express en moins de 24h, un service de suivi en temps réel et des tarifs
        compétitifs.Nous offrons un service de livraison rapide et sécurisé pour
        tous vos appareils électroménagers. Que vous ayez acheté un
        réfrigérateur, une machine à laver, un four, ou tout autre appareil
        essentiel pour votre maison, nous nous assurons qu'il arrive chez vous
        dans les meilleures conditions. Nos équipes spécialisées sont formées
        pour manipuler chaque produit avec soin et garantir une installation
        correcte, selon vos besoins. Nous nous engageons à respecter les délais
        de livraison, tout en vous offrant une expérience sans tracas. Notre
        objectif est de rendre la livraison de vos électroménagers aussi simple
        et rapide que possible, avec un suivi constant de votre commande jusqu'à
        sa réception. Choisissez notre service de livraison et profitez de la
        tranquillité d'esprit, en sachant que vos appareils seront livrés en
        toute sécurité et installés dans les règles de l'art. Contactez-nous
        pour en savoir plus !
      </p2>
      <!-- From Uiverse.io by MuhammadHasann -->
      
    </div>

    <div class="container" id="services">
      <h2><p>Récapitulatif de nos services</p></h2>
      <ul>
        <li>---Transport de marchandises et de colis ---</li>
        <li>---Transport de colis volumineux et fragiles ---</li>
        <li>---Service de livraison rapide et sécurisé en moins de 24h ---</li>
        <li>---Installation d'appareils électroménagers ---</li>
        <li>---Service de suivi en temps réel ---</li>
        <li>---Livraisons nationales et internationales ---</li>
      </ul>
    </div>

    <div class="container" id="contact">
      <h2>Contactez-nous</h2>
      <p>
        <n>Vous avez une question ou souhaitez obtenir un devis ?</n>
        Remplissez le formulaire ci-dessous :
      </p>
      <form>
        <label for="name">Nom :</label><br />
        <input type="text" id="name" name="name" required /><br /><br />

        <label for="email">Email :</label><br />
        <input type="email" id="email" name="email" required /><br /><br />

        <label for="message">Message :</label><br />
        <textarea id="message" name="message" rows="4" required></textarea
        ><br /><br />
        <button>
          <span class="text">Envoyer</span>
        </button>
      </form>
    </div>
    </main>
    <footer>
      <div id="grid">
        <div id="logo">
          <a href="/index.php">
            <img
              src="/page_accueil/images/logo_abc.jpg"
              alt="logo entreprise"
            />
          </a>
        </div>
        <nav id="nav">
          <ul>
            <li><a href="/footer/mentionslegales.php">Mentions Légales</a></li>
            <li>
              <a href="/footer/politique.php">Politiques de confidentialité</a>
            </li>
            <li><a href="/footer/propos.php">A Propos</a></li>
          </ul>
        </nav>
        <div id="Réseaux">
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
          <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
          <a href=""><i class="fa-brands fa-linkedin"></i></a>
        </div>
        <div id="Copyright">
          <span>&copy; 2025 - Tous droits réservés</span
          ><span>Made with &#10084;&#65039; by Jonathan </span>
        </div>
      </div>
    </footer>
  </body>
</html>
