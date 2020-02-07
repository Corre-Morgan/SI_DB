<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="Content-Script-Type" content="text/javascript">

    <title>SI BD</title>

    <!--<link rel="stylesheet" href="css/ui.tabs.css" type="text/css" media="print, projection, screen"/>
    <link rel="stylesheet" href="css/base.css" type="text/css"/>-->
    <link rel="stylesheet" href="css/Semantic-UI-CSS-master/semantic.min.css" type="text/css"/>

    <script src="js/jquery-1.2.6.js" type="text/javascript"></script>
    <script src="js/ui.core.js" type="text/javascript"></script>
    <script src="js/ui.tabs.js" type="text/javascript"></script>
</head>

<body>
<h1 class="ui header centered">SI BD</h1>
<div class="ui one column centered grid">
    <form id="form" action="index.php" method="post">
        <div class="ui four wide column">
            <div class="ui form grouped fields">
                <div class="ui form field">
                    <label class="ui form field" for="identifiant">Identifiant</label>
                    <div class="ui input error">
                        <input type="text" id="identifiant" name="identifiant">
                    </div>
                </div>
                <div class="ui form field">
                    <label for="email">Email</label>
                    <div class="ui input error">
                        <input type="email" id="email" name="email">
                    </div>
                </div>
                <div class="ui form field">
                    <label for="mdp">Mot de passe</label>
                    <div class="ui input error">
                        <input type="password" id="mdp" name="mdp">
                    </div>
                </div>
                <div class="ui form inline fields">
                    <label for="sexe">Sexe</label>
                    <div class="ui field">
                        <div class="ui radio checkbox">
                            <input type="radio" id="masculin" name="sexe" value="M">
                            <label>Homme</label>
                        </div>
                    </div>
                    <div class="ui field">
                        <div class="ui radio checkbox">
                            <input type="radio" id="feminin" name="sexe" value="F">
                            <label>Femme</label>
                        </div>
                    </div>
                </div>
                <div class="ui form field">
                    <label for="telephone">Téléphone</label>
                    <div class="ui input error">
                        <input type="tel" id="telephone" name="telephone">
                    </div>
                </div>
                <div class="ui form field">
                    <label for="pays">Pays</label>
                    <div class="ui input error">
                        <select id="pays" name="pays">
                            <option value="France">France</option>
                            <option value="Allemagne">Allemagne</option>
                            <option value="Irlande">Irlande</option>
                            <option value="Australie">RIP Australie</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="ui segment">
                <div class="ui form field">
                    <div class="ui input error toggle checkbox">
                        <input type="checkbox" id="cgu" name="cgu">
                        <label>Vous avez pris connaissance des cgu</label>
                    </div>
                </div>
            </div>
            <button class="ui button" type="submit">Envoyer</button>
        </div>
    </form>
</div>
</body>
</html>
