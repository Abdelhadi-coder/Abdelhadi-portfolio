<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abdelhadi</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Knewave&family=Oi&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.datatables.net/plug-ins/1.10.20/sorting/enum.js"></script>
    <script defer src="scroll.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mailform.css"> 
    <link rel="stylesheet" href="output.css">

</head>
<body class="bg-[#0F091F]">

<header>
    <nav class="bg-white dark:bg-[#0F091F] fixed w-full z-20 top-0 start-0">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-4xl font-semibold whitespace-nowrap dark:text-white dark:hover:text-[#FFD991] logo-font">R N M</span>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
          <a href="#contact">
            <button href="" type="button" class="font-bold rounded-lg text-base px-4 py-2 text-center dark:bg-[#0F091F] dark:text-white contact">CONTACT</button>
          </a>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-[#0F091F] dark:border-gray-700">
                <li class="element">
                    <a href="#parcours" class="font-bold block py-2 px-3 md:p-0 md:dark:hover:text-[#FFD991] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"><span class="text-xl sp-gauche"><</span> PARCOURS <span class="text-xl sp-droite">></span></a>
                </li>
                <li class="element">
                    <a href="#projets" class="font-bold block py-2 px-3 md:p-0 md:dark:hover:text-[#FFD991] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"><span class="text-xl sp-gauche"><</span> PROJETS <span class="text-xl sp-droite">></span></a>
                  </li>
            </ul>
        </div>
    </div>
    </nav>
</header>
<main>
    <section>
        <div class="flex justify-center items-center">
            <div class="mt-16 font-bold text-gray-700 rounded-full bg-white flex justify-center items-center" style="height: 240px; width: 240px;">PHOTO</div>
        </div>
        <h1 class="flex mt-10 items-center justify-center text-[#FFD991] font-bold text-9xl  name">ABDEL-HADI RANEM</h1>
        <h4 class="flex justify-center text-[#FFD991] font-bold text-xl">Developpeur Web</h4>
        <br>
        <h4 class="flex justify-center text-[#FFD991] font-bold text-xl">En regardant ce site tu vas bugger, mais heureusement je suis là pour debugger 🔥</h4>
        <div>
          <h4 class="flex justify-center text-[#FFD991] font-bold text-lg mt-3">Telechargez mon cv en cliquant sur l'icône ci-dessous</h4>
          <div class="flex justify-center mt-5">
            <a download="Abdel-hadi_RANEM-CV.pdf" href="../Elements/cv.pdf" title="Some"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABxUlEQVR4nO2aQUoDMRSGA4oLr9FbWDfuBMEziCsXLtQLFBWtCuJ7gxuvIHgGV67dCE26U1vRnVsV/CVtbYszZZJpJjNT80M2Jcn/vry8yTCNEEEjQfIqJD1DMaya5Cc9VpRF0AHZQozB5BvcQ2MBik+h+MU0KGsPY2DqQnFTx2QPoujEdnXzA+FB9ug4C4heBaDFS6YBZQVJ7Sej+m9mbD2sgssbZBqPxIGpqTfIXnyVzbYqvII4biJvkFjf28Y8JB1anSX9vgd67DTeqXI6maUQQBIUMjJrWwu4noOifUh+hKI7tHjFl7dbEMl7f55S36bnDMoFQjfxA5O2fHi7BjmLg1ysVw9E0Xn8IIzWfHi7BeleLULS+6hG+N6Xt/PJoGjbtj7KCSJ5Z+yptevT28lkaHMNii6h6HOsRj56v7W5VgkQtHgTir8mv/lquGij/CCS3iZDDAv/tfQgLoQAkqCQkSpvLTj8yKAVQJIUasSBEB6/BRS7K+9U/UsQ10IASVDIiAMhbC3LVfHVREo8RpppkCKFAKIG/7PLqF5oKkTvg8ZyPxbu2A/WVyY81wTSmuSjrHdRmsPMFAvQ0RCZ7qIEiWL0A4sJUZ0xRyowAAAAAElFTkSuQmCC" alt="parse-from-clipboard"></a>
          </div>
        </div>
    </section>
    <section id="projets">
        <div class="flex justify-center items-center">
            <h3 class="flex  items-center justify-center text-[#FFD991] font-bold text-5xl mt-40">PROJETS</h3>
        </div>
        <div class="flex justify-center items-center">
          <div class="bottom-0 h-[3px] bg-[#FFD991] w-[30%] mt-8 mb-8"></div>
        </div>
    </section>
    <section>
      <div class="flex items-center justify-center mb-25">
        <div class="grid grid-cols-1 md:grid-cols-1 gap-10 2xl:grid-cols-3 xl:grid-cols-2 ml-10 mr-10">
          <div class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow rounded-xl ele hide">
            <div class="h-auto w-auto">
              <img class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" src="../Images/Intro.png" alt="" />
            </div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
            <div class="absolute inset-0 flex translate-y-[58%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
              <h1 class="text-[#FFD991] project-title text-4xl project-title tracking-wider mb-7">Maquette d'introduction</h1>
              <p class="mb-3 text-lg italic text-white opacity-0 transition-all duration-1000 group-hover:opacity-100">Deuxième projet de la formation. Il a fallut faire la maquette d'un site seulement à partir d'une image le tout en 1 semaine</p>
              <button class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Try it !</button>
            </div>
          </div>
          <div class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30 rounded-xl ele hide">
            <div class="h-full w-auto">
              <img class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" src="../Images/Responsive.png" alt="" />
            </div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
            <div class="absolute inset-0 flex translate-y-[62%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
              <h1 class="text-[#FFD991] project-title text-4xl project-title tracking-wider mb-7">Maquette responsive</h1>
              <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Ressemblant à la première maquette je devais faire le site juste avec une image du site mais il devait être responsive. Donc adapté à tout les support (Smartphone, tablette, ordinateur...)</p>
              <button class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Try it !</button>
            </div>
          </div>
          <div class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30 rounded-xl ele hide">
            <div class="h-full w-auto">
              <img class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" src="../Images/cinema.png" alt="" />
            </div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
            <div class="absolute inset-0 flex translate-y-[70%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
              <h1 class="text-[#FFD991] project-title text-4xl project-title tracking-wider mb-7">My Cinema</h1>
              <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Ce projet c'était la première manipulation de base de données, quelque chose de nouveau que j'avais jamais vu. C'est un site pour les personnes qui travaillent dans un cinéma dans lequel on devait rechercher des utilisateurs, des films. Trier par genre, par distributeur, changer l'abonnement d'un utilisateur...</p>
              <button class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Try it !</button>
            </div>
          </div>
          <div class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30 rounded-xl ele hide">
          <div class="h-full w-auto">
            <img class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" src="../Images/morpion.png" alt="" />
          </div>
          <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
          <div class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
            <h1 class="text-[#FFD991] project-title text-4xl project-title tracking-wider mb-7">Morpion</h1>
            <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Ce projet est ce qu'on appelle une "colle". J'ai eu 4h pour realiser un jeu de morpion fonctionnel avec un systeme de victoire et de comptage de points.</p>
            <button class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Try it !</button>
          </div>
        </div>
        <div class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30 rounded-xl ele hide">
          <div class="h-full w-auto">
            <img class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" src="../Images/Puissance4.png" alt="" />
          </div>
          <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
          <div class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
            <h1 class="text-[#FFD991] project-title text-4xl project-title tracking-wider mb-7">Puissance 4</h1>
            <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Ce projet était un jeu de puissance 4 à faire en javascript. Ce projet a été donné en même temps qu'un autre gros projet de groupe de 1 mois et je devais le faire en 2 semaines.</p>
            <button class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Try it !</button>
          </div>
        </div>
        <div class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30 rounded-xl ele hide">
          <div class="h-full w-auto">
            <img class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" src="../Images/combined-croped.png" alt="" />
          </div>
          <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
          <div class="absolute inset-0 flex translate-y-[61%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
            <h1 class="text-[#FFD991] project-title text-4xl project-title tracking-wider mb-7">Tweet Academie</h1>
            <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Ce projet, tout est dans le nom. En effet en groupe de 4 nous devions recréer X (anciennement twitter). Avec une date limite de 1 mois.</p>
            <button class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Try it !</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="parcours">
    <div class="flex justify-center items-center">
        <h3 class="flex  items-center justify-center text-[#FFD991] font-bold text-5xl mt-10">MON PARCOURS</h3>
    </div>
    <div class="flex justify-center items-center">
      <div class="bottom-0 h-[3px] bg-[#FFD991] w-[30%] mt-8 mb-8"></div>
    </div>
  </section>
  <section>
      <div class="flex justify-center">
        <div class="border-2 p-7 border-white rounded-md min-w-xl max-w-xl mb-42 hide">
            <h2 class="text-[#FFD991] font-bold text-2xl">Stage professionnel de 3eme</h2><br>
            <p class="text-white">Stage réalisé chez speedy en tant que mécanicien. J'ai beaucoup pratiqué contrairement à d'autres type de stages</p>
        </div>
      </div>
      <div class="flex justify-center">
        <div class="border-2 p-7 border-white rounded-md min-w-xl max-w-xl mb-42 hide">
            <h2 class="text-[#FFD991] font-bold text-2xl">Brevet des collèges</h2><br>
            <p class="text-white">Obtention du Brevet des collèges</p>
        </div>
      </div>
      <div class="flex justify-center">
        <div class="border-2 p-7 border-white rounded-md min-w-xl max-w-xl mb-42 hide">
            <h2 class="text-[#FFD991] font-bold text-2xl">Baccalauréat</h2><br>
            <p class="text-white">Obtention du Baccalauréat équivalent scientifique (Mathématique, Physique-Chimie)</p>
        </div>
      </div>
      <div class="flex justify-center">
        <div class="border-2 p-7 border-white rounded-md min-w-xl max-w-xl mb-42 hide">
            <h2 class="text-[#FFD991] font-bold text-2xl">Immersion école 42</h2><br>
            <p class="text-white">-Immersion durant un mois à l'école 42.<br>-Projet de groupe et individuel<br>-Language C</p>
        </div>
      </div>
      <div class="flex justify-center">
        <div class="border-2 p-7 border-white rounded-md min-w-xl max-w-xl mb-42 hide">
            <h2 class="text-[#FFD991] font-bold text-2xl">Formation & Alternance</h2><br>
            <p class="text-white">-Formation en tant que developpeur web dont 1 an en alternance<br>-Duration 2 ans</p>
        </div>
      </div>
  </section>
  <section id="competences">
    <div class="flex justify-center items-center">
        <h3 class="flex  items-center justify-center text-[#FFD991] font-bold text-5xl mt-10">COMPETENCES</h3>
    </div>
    <div class="flex justify-center items-center">
      <div class="bottom-0 h-[3px] bg-[#FFD991] w-[30%] mt-8 mb-8"></div>
    </div>
  </section>
  <section>
    <div class="flex justify-center items-center">
    <div class="grid grid-cols-1 2xl:grid-cols-3 lg:grid-cols-2">
      <div class="justify-center">
        <h3 class="text-[#FFD991] font-sans font-extrabold text-4xl logo-font logo-font">Languages</h3><br>
          <div class="flex items-center gap-5">
            <img class="w-18 h-18" src="https://img.icons8.com/?size=100&id=108784&format=png&    color=000000" alt="javascript logo">
            <p class="text-[#FFD991] font-light text-2xl">Javascript</p>
          </div>
          <div class="flex items-center gap-5">
            <img class="w-18 h-18" src="https://img.icons8.com/?size=100&id=f0R4xVI4Sc8O&format=png&color=000000" alt="php logo">
            <p class="text-[#FFD991] font-light text-2xl">Php</p>
          </div>
          <div class="flex items-center gap-5">
            <img class="w-18 h-18" src="https://img.icons8.com/?size=100&id=rgPSE6nAB766&format=png&color=000000" alt="mysql logo">
            <p class="text-[#FFD991] font-light text-2xl">Mysql</p>
          </div>
          <div class="flex items-center gap-5">
            <img class="w-18 h-18" src="https://img.icons8.com/?size=100&id=20909&format=png&color=000000" alt="html logo">
            <p class="text-[#FFD991] font-light text-2xl">Html</p>
          </div>
          <div class="flex items-center gap-5">
          <img class="w-18 h-18" src="https://img.icons8.com/?size=100&id=21278&format=png&color=000000" alt="css logo">
            <p class="text-[#FFD991] font-light text-2xl">Css</p>
          </div>
      </div>
      <div class="justify-center">
        <h3 class="text-[#FFD991] font-sans font-extrabold text-4xl logo-font text-center">Outils</h3><br>
          <div class="flex items-center gap-5">
            <img class="w-18 h-18" src="https://img.icons8.com/?size=100&id=21049&format=png&color=000000" alt="trello logo">
            <p class="text-[#FFD991] font-light text-2xl">Trello</p>
          </div>
          <div class="flex items-center gap-5">
            <img class="w-18 h-18" src="https://img.icons8.com/?size=100&id=amXjtNWVYSKP&format=png&color=ffffff" alt="Figma logo">
            <p class="text-[#FFD991] font-light text-2xl">Figma</p>
          </div>
          <div class="flex items-center gap-5">
            <img class="w-18 h-18" src="https://img.icons8.com/?size=100&id=y7WGoWNuIWac&format=png&color=000000" alt="vscode logo">
            <p class="text-[#FFD991] font-light text-2xl">VsCode</p>
          </div>
          <div class="flex items-center gap-5">
            <img class="w-18 h-18" src="https://img.icons8.com/?size=100&id=20906&format=png&color=000000" alt="vscode logo">
            <p class="text-[#FFD991] font-light text-2xl">Git</p>
          </div>
      </div>
      <div class="justify-center">
        <h3 class="text-[#FFD991] font-sans font-extrabold text-4xl logo-font text-center">Frameworks & librairies</h3><br>
          <div class="flex items-center gap-5">
            <img class="w-18 h-18" src="https://img.icons8.com/?size=100&id=EzPCiQUqWWEa&format=png&color=000000" alt="bootstrap logo">
            <p class="text-[#FFD991] font-light text-2xl">Bootstrap</p>
          </div>
          <div class="flex items-center gap-5">
            <img class="w-18 h-18" src="https://img.icons8.com/?size=100&id=CIAZz2CYc6Kc&format=png&color=000000" alt="tailwind logo">
            <p class="text-[#FFD991] font-light text-2xl">Tailwindcss</p>
          </div>
          <div class="flex items-center gap-5">
            <img class="w-18 h-18" src="https://img.icons8.com/?size=100&id=wPohyHO_qO1a&format=png&color=000000" alt="react logo">
            <p class="text-[#FFD991] font-light text-2xl">React</p>
          </div>
      </div>
    </div>
    </div>
  </section>
  <section id="contact">
    <div class="flex justify-center items-center">
        <h3 class="flex  items-center justify-center text-[#FFD991] font-bold text-5xl mt-10">CONTACT</h3>
    </div>
    <div class="flex justify-center items-center">
      <div class="bottom-0 h-[3px] bg-[#FFD991] w-[30%] mt-8 mb-8"></div>
    </div>
  </section>
  <section>
    <div class="contact-container">
      <form action="https://api.web3forms.com/submit" method="POST" class="contact-middle">
        <div class="contact-middle-title">
          <h2>Send me an email :)</h2>
          <hr>
        </div>
        <input type="hidden" name="access_key" value="3898c83e-c479-4495-8199-808f18872089">
        <input type="text" name="name" placeholder="Prénom" class="contact-inputs" required>
        <input type="text" name="email" placeholder="Email" class="contact-inputs" required>
        <textarea name="message" placeholder="Votre mail" class="contact-inputs" required></textarea>
        <button type="submit">Envoyer<img src="https://img.icons8.com/?size=30&id=Y5wXK2rZQJnJ&format=png&color=000000" alt="Send mail logo"></button>
      </form>
    </div>
  </section>
</main>
</body>
</html>