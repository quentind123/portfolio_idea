<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style/style.css" />
        <link rel="stylesheet" href="style/style_smarstart.css" />
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
                <p style="border-left:1px solid rgb(125,197,141); padding-left:30px;">Cette année, j'ai entrepris de créer ma propre entreprise, et de devenir entrepreneur.</p>
                <p style="border-left:1px solid rgb(125,197,141); padding-left:30px;"> Je travaille  sur le développement de Smar'Start avec un associé depuis septembre 2014.</p>
            </div>
        </article>

        <article class="row" id="article_2" style="font-family: tahoma, arial, sans-serif; font-size:medium;">
            <h2 style="font-family:OpenSans-Light, Arial, sans-serif; font-size:40px; border-bottom: 1px solid rgb(125,197,141);">Qu'est-ce que Smar'Start ?</h2>

<!-- ##################### -->
            <h3 style="font-family:OpenSans-Light, Arial, sans-serif;color:rgb(125,197,141);">L'entreprise et son caractère innovant</h3>
            <ul>
                <li class="li-1">Smar'Start est une plateforme de financement participatif positionnée sur le segment de l'économie responsable et solidaire. Les projets que nous proposons sont tous des projets de création d'entreprise portés par des étudiants ou des jeunes actifs. De plus, tous nos projets présentent une dimension responsable et ou solidaire, que ce soit dans leur démarche, dans leur proposition de valeur, ou dans leur service.</li>
                <li class="li-2">Mais le véritable caractère innovant de Smar'Start repose sur le fait que les projets ne sont pas financés directement par les utilisateurs. En effet, c'est en regardant une vidéo publicitaire que nos utilisateurs génèrent des dons pour les projets qu'ils choisissent de soutenir.</li>
                <li class="li-2">Notre <strong>proposition de valeur</strong> est la suivante : "Soutiens des projets sans sortir un euro de ta poche"</li>                
            </ul>
                <p id="titre_callToAction">Voici une image de notre "call-to-action", que j'ai réalisé à l'aide du logiciel <em>Sketch</em>.</p>
                <img src="src/img/call_to_action.png" width="700" height="150" alt="call-to-action" id="call_to_action" />

<!-- ##################### -->
            <h3 class="sous-titres" style="font-family:OpenSans-Light, Arial, sans-serif; color:rgb(125,197,141);">Quelques chiffres</h3>
            <ul style="margin-top:50px;">
                <li class="liste_chiffres"><strong>4 mois</strong> pour développer notre premier prototype fonctionnel et définir notre proposition de valeur.</li>
                <li class="liste_chiffres"><strong>4 projets</strong> réunis pour notre premier béta-test. Un cinquième projet est en cours d'ajout à la plateforme.</li>
                <li class="liste_chiffres"><strong>2 entreprises</strong> sponsors prêtes à se lancer avec nous, en nous confiant <strong>2000 euros</strong>.</li>
                <li class="liste_chiffres">Plus de <strong>1000 utilisateurs</strong> réunis au cours de nos deux premières semaines de test.</li>
                <li class="liste_chiffres">Notre taux de rétention atteint <strong>33,7%</strong>.</li>
            </ul>

<!-- ##################### -->
            <h3 class="sous-titres" style="font-family:OpenSans-Light, Arial, sans-serif; color:rgb(125,197,141);">Le projet et mon objectif</h3>
                <ul style="margin-top:50px;">
                    <li class="liste_chiffres">Mon associé et moi avons comme projet de permettre à n'importe qui, quels que soient son niveau de richesse ou appartenance sociale, de pouvoir soutenir les projets de création d'entreprise qui lui plaisent, et ainsi participer dès aujourd'hui à la réussite des entreprises de demain.</li>
                    <li class="liste_chiffres">Mais en plus de ce projet collectif, c'est principalement l'opportunité d'apprentissage que cela représente qui m'a poussé à me lancer dans l'aventure entrepreneuriale. Et c'est cet objectif que je poursuis depuis que j'ai commencé à travailler sur Smar'Start.</li>
                </ul>

<!-- ##################### -->            
            <h3 class="sous-titres" style="font-family:OpenSans-Light, Arial, sans-serif; color:rgb(125,197,141);">Les prochaines étapes de developpement</h3>
                <ul style="margin-top:50px;">
                    <div class="row"> 
                        <div class="col-md-6">
                            <li class="liste_chiffres" id="texte_100jours">Nous avons présenté Smar'Start au concours <em>100 jours pour entreprendre</em>, et nous sommes en bonne voie pour être sélectionnés pour la prochaine étape : le pitch devant un jury. Le premier prix de ce concours correspond à une "Box" d'une valeur de 5000 euros, ce qui nous permettra de créer la structure juridique.</li>
                            <li class="liste_chiffres" id="texte_100jours">Aussi, nous voulons atteindre notre <strong>product market fit</strong>, ce qui signifie faire grimper notre taux de rétention à 45%.</li>
                        </div>
                        <div class="col-md-6">
                            <img src="src/img/100jours.png" alt="logo 100 jours" id="logo_100jours" />
                        </div>
                    </div>
                    <li class="liste_chiffres">A court terme, la prochaine étape de développement consiste à développer une nouvelle plateforme qui implémente la fonctionnalité de financement. En effet, la plateforme qui existe pour le moment n'est pas complétement fonctionnelle puisqu'elle n'effectue aucun transfert financier.</li>
                    <li class="liste_chiffres">A moyen terme, nous devons élargir notre réseau de partenaires. Notamment, nous voulons démarcher de nouvelles entreprises sponsors, car se sont elles qui fournissent les fonds servant à financer les projets.</li>
                </ul>

<!-- ##################### -->            
            <h3 class="sous-titres" style="font-family:OpenSans-Light, Arial, sans-serif; color:rgb(125,197,141);">La plateforme</h3>
                <p style="margin-top:50px; margin-bottom:60px;">Notre plateforme est accessible à cette adresse : <a href="http://www.smarstart.com/">www.smarstart.com</a></p>
                <img src="src/img/home_page_ss.png" width="450" height="300" title="Image Home Page" style="margin-right:50px;" />
                <img src="src/img/projets_ss.png" width="450" height="300" title="Image projets" />
                <p class="titres_img">Voici la Home Page de la plateforme. <span id="titre_img_projets">Voici les cartouches de présentations de nos deux premiers projets.</span></p>
                <ul style="margin-top:80px;">
                    <li class="liste_chiffres">Cette plateforme a été réalisée à l'aide du logiciel de gestion de contenu <strong>Wix</strong>. 
                        <br />Je développe également une nouvelle version de la plateforme sous <strong>WordPress</strong>.</li>
                    <li class="liste_chiffres">Nous utilisons le logiciel <strong>Mailchimp</strong> pour gérer notre e-mailing, ainsi que pour automatiser le processus de contact.</li>
                    <li class="liste_chiffres">Tous les visuels du site ont été conçus grâce à l'application <strong>Sketch</strong>.</li>
                </ul>

        </article>

         <article class="row" id="article_2" style="font-family: tahoma, calibry, sans-serif; font-size:medium;">
            <h2 style="font-family:OpenSans-Light, Arial, sans-serif; font-size:40px; border-bottom: 1px solid rgb(125,197,141);">Pourquoi Idea ?</h2>
                <ul style="margin-top:60px;">
                    <div class="row"> 
                        <div class="col-md-6">
                            <li class="liste_chiffres" id="texte_100jours">Le programme IDEA propose un <strong>environnement idéal</strong> pour développer Smar'Start.</li>
                            <li class="liste_chiffres">La <strong>diversité des profils</strong>, couplée au modèle de l'open innovation dont s'inspire IDEA, nous donneront la possibilité de mobiliser une grande variété de compétences, et peut-être trouver un nouvel associé.</li>
                        </div>
                        <div class="col-md-6">
                            <img src="src/img/community.png" alt="Logo Community" id="logo_community" />
                        </div>
                    </div>
                </ul>

        </article>

    </section>

    <?php include("footer.php") ?>

    <script src="script_portfolio.js"></script>

</body>

</html>