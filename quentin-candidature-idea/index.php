<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style/style.css" />
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
        <article class="row">
            <blockquote class="blockquote_home row">
                <em style="font-size:medium">"Pour moi le profil idéal [d'innovateur], le bon potentiel, c'est celui qui a un grain de folie et un tableau Excel dans la tête"</em>
                <br /> <span style="color:rgb(146,188,247);">Nicolas Dufourcq, P-D.G BPI France</span>
            </blockquote>
            <div class="row">
                <div class="col-md-6" id="brain_img"><img src="src/img/brain.png" alt="Photo-brain" /><p class="sous-titre-1_home" style="font-family: tahoma, arial, sans-serif; font-size:medium;">Innover, c'est cultiver un état d'esprit...</p></div>
                <div class="col-md-6" id="chart_img"><img src="src/img/chart.png" alt="Photo-chart" /><p class="sous-titre-2_home" style="font-family: tahoma, arial, sans-serif; font-size:medium;">... mais c'est aussi développer des compétences et des savoir-faire.</p></div>
            </div>
        </article>

        <article class="row" id="article-2_home" style="font-family: tahoma, arial, sans-serif; font-size:medium;">
            <h2 style="font-family:OpenSans-Light, Arial, sans-serif; font-size:40px;">Mon projet</h2>
            <ul class="mon-projet_text">
                <li class="li-1">Je souhaite acquérir une expertise dans le <strong>product management</strong>, tout en poursuivant le développement de mon entreprise, Smar'Start.</li>
                <li class="li-2">Si je pense avoir l'état d'esprit pour innover, étant donné que j'ai créé une start-up innovante cette année, il me manque un certain nombre de compétences pour être un innovateur décisif et répondre aux exigences définies par Nicolas Dufourcq.</li>
                <li class="li-2">J'aimerais donc intégrer le programme IDEA pour continuer à <strong>travailler ma capacité à innover</strong> et développer les compétences business, techniques, et de design nécessaires à la réalisation de mon projet de vie professionnelle.</li>
            </ul>
        </article>
    </section>

    <?php include("footer.php") ?>

    <script src="script_portfolio.js"></script>

</body>

</html>