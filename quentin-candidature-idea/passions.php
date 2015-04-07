<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style/style.css" />
        <link rel="stylesheet" href="style/style_smarstart.css" />
        <link rel="stylesheet" href="style/style_programmation.css" />
        <link rel="stylesheet" href="style/style_passions.css" />
        <link rel="stylesheet" href="src/dist/css/bootstrap.css" />
        <title>Portfolio - Quentin Davy</title>
    </head>

    <style>
    @font-face
    {
        font-family: 'OpenSans-Light';
        src: url('src/polices/OpenSans-Light.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }
    </style>

<body>

    <?php include("header.php") ?>

    <section>
       <article class="row" id="article-2_home" style="font-family: tahoma, arial, sans-serif; font-size:medium;">
            <div class="accroche_page">
                <p style="margin-top:-50px; border-left:1px solid rgb(226,135,170); padding-left:30px;">Mais l'entrepreneuriat, la programmation, et l'environnement web ne sont pas mes seules passions.</p>
                <p style="border-left:1px solid rgb(226,135,170); padding-left:30px;">La musique et le cyclisme m'aident aussi à penser l'innovation.</p>
            </div>
        </article>

        <article class="row" id="article_2" style="font-family: tahoma, arial, sans-serif; font-size:medium;">
            <h2 style="font-family:OpenSans-Light, Arial, sans-serif; font-size:40px; border-bottom: 1px solid rgb(226,135,170);">La musique</h2>

<!-- ##################### -->
            <h3 style="font-family:OpenSans-Light, Arial, sans-serif;color:rgb(226,135,170);">La guitare</h3>
                 <ul style="margin-top:50px;">
                    <div class="row"> 
                        <div class="col-md-6">
                            <li class="liste_chiffres" id="texte_100jours">Cela fait plus de <strong>10 ans</strong> que je suis guitariste. Je joue principalement du Blues, du Gipsy jazz, et du Rock'N'Roll.
                        <br />Voici une liste non exhaustive de mon répertoire : The Rolling Stones, Robert Johnson, Django Reinhart, The Rosenberg Trio...</li>
                        </div>
                        <div class="col-md-6">
                            <img src="src/img/guitarist.png" alt="Image de guiratiste" id="logo_guitarist" />
                        </div>
                    </div>
                    <li class="liste_chiffres">En plus d'être un réel plaisir, la guitare me permet de travailler ma capacité de conceptualisation. En effet, je m'efforce d'appréhender un morceau dans son ensemble avant de le travailler, pour ensuite y ajouter mes arrangements. <strong>C'est aussi ça l'innovation</strong>.</li>
                </ul>

<!-- ##################### -->
            <h3 class="sous-titres" style="font-family:OpenSans-Light, Arial, sans-serif; color:rgb(226,135,170);">Le groupe <em>Blue Puzzle</em></h3>
                <ul style="margin-top:50px;">
                    <div class="row"> 
                        <div class="col-md-6">
                            <img src="src/img/blue_puzzle.png" alt="Image de Blue Puzzle" id="logo_blue_puzzle" />
                        </div>
                         <div class="col-md-6">
                            <li class="liste_chiffres" id="texte_100jours">En 2010, j'ai décidé de passer à la vitesse supérieure avec la musique. C'est ainsi qu'avec deux amis, nous avons créé le groupe de musique Blue Puzzle.
                                <br /><strong>Mon engagement et mon autonomie</strong> ont fait que je suis rapidement devenu manager du groupe.</li>
                            <li style="margin-top:20px;">Je gérais donc un groupe de <strong>7 personnes</strong> : un chanteur, deux guitaristes, un pianiste, une saxophoniste, un batteur et un bassiste.</li>
                            <li style="margin-top:20px;">Nous avons écrit et composé <strong>11 morceaux</strong>, et avons joué des reprises des Stones, des Pink Floyd, et de Jimi Hendrix lors de deux concerts.</li>
                        </div>
                    </div>
                    <li class="liste_chiffres" style="margin-top:40px;">Cela a été ma <strong>première expérience managériale</strong> : je devais gérer une équipe de 7 personnes, planifier et réserver des studios pour les répétitions, et prévoir les concerts.</li>
                </ul>

                <div class="audio">
                    <p>Voici un enregistrement d'un de nos meilleurs morceaux, "Christmas Jazz", écrit et composé en décembre 2011 :</p>
                    <audio controls="controls">
                        <source src="src/img/christmas_jazz.wav" type="audio/wav" />
                        <source src="src/img/christmas_jazz.mp3" type="audio/mp3" />
                        Votre navigateur ne supporte pas le tag <audio>.
                    </audio>
                </div>

        </article>

        <article class="row" id="article_2" style="font-family: tahoma, arial, sans-serif; font-size:medium;">
            <h2 style="font-family:OpenSans-Light, Arial, sans-serif; font-size:40px; border-bottom: 1px solid rgb(226,135,170);">Le cyclisme</h2>

<!-- ##################### -->
            <h3 style="font-family:OpenSans-Light, Arial, sans-serif;color:rgb(226,135,170);">Mon vélo</h3>
                 <ul style="margin-top:50px;">
                    <div class="row"> 
                        <div class="col-md-6">
                            <li class="liste_chiffres" id="texte_100jours">En mai 2012, j'avais besoin d'un nouveau moyen de transport pour me rendre sur mon lieu de travail, car celui-ci était mal désservi par les transports en commun parisiens.</li>
                            <li style="margin-top:20px;">J'ai donc choisi le vélo pour me déplacer. Toutefois, je voulais que celui-ci soit à la fois personnalisé et parfaitement réglé pour ma taille.</li>
                            <li style="margin-top:20px;">Ainsi, j'ai entrepris de <strong>me construire mon propre vélo</strong> à partir d'un ancien vélo de piste récupéré chez un particulier.</li>
                        </div>
                        <div class="col-md-6">
                            <img src="src/img/velo.png" alt="Photo de mon vélo" id="photo_velo" />
                        </div>
                    </div>
                </ul>                

<!-- ##################### -->
            <h3 class="sous-titres" style="font-family:OpenSans-Light, Arial, sans-serif; color:rgb(226,135,170);">Ce que cela m'apprend</h3>
                <ul style="margin-top:50px;">
                    <li class="liste_chiffres">J'ai appris à me servir de mes mains, puisque la construction et l'entretien du vélo est un <strong>travail mécanique et manuel</strong>.</li>
                    <li class="liste_chiffres">Mais plus largement, j'ai surtout découvert que je pouvais me servir de mes mains pour créer et construire des objects, et donc des produits.</li>
                    <li class="liste_chiffres">Ce constat m'a fait réfléchir sur le fait que l'innovation n'est pas forcément digitale mais peut concerner toute sorte d'objets.</li>
                </ul>
                <p class="conclu">Au même titre que mon expérience entrepreneuriale et mon investissement dans l'apprentissage des technologies web, cette expérience a été déterminante dans mon choix de candidater au programme IDEA, car j'ai désormais la certitude que la conception manuelle de produits est également un domaine qui me plait.</p>


        </article>

    </section>

    <?php include("footer.php") ?>

    <script src="script_portfolio.js"></script>

</body>

</html>