<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benjamin Theismann</title>
</head>
<body>
    <form action="" method="">
       <fieldset>
            <legend>Vos coordonnées</legend>
            <div>
                <label for="nom">Nom :</label>
                <input type="text" id="nom" placeholder="votre nom">
            </div>
            <div>
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" placeholder="votre prénom">
            </div>
            <div>
                <label for="age">Date de Naissance :</label>
                <input type="date" id="age">
            </div>
            <div>
                <label for="email">Email :</label>
                <input type="email" id="email" placeholder="votre email">
            </div>
            <div>
                <label for="pays">Pays :</label>
                <select name="pays" id="pays">
                    <optgroup label="Europe">
                        <option value="Belgique">Belgique</option>
                    </optgroup>
                    <optgroup label="Amérique Du Nord">
                        <option value="etats-unis">États-Unis</option>
                        <option value="canada">Canada</option>
                    </optgroup>
                    <optgroup label="Asie">
                        <option value="japon">Japon</option>
                        <option value="chine">Chine</option>
                    </optgroup>
                </select>
            </div>
            <div>
                <label for="copies">Nombre de copies souhaitées :</label>
                <input type="number" id="copies">
            </div> 
       </fieldset>
       <fieldset>
        <legend>Périodicité</legend>
        <div>
            <div>
                <input type="radio" id="NewsletterHebdomadaire" name="periodicite">
                <label for="NewsletterHebdomadaire">Newsletter Hebdomadaire</label>
            </div>
            <div>
                <input type="radio" id="NewsletterMensuel" name="periodicite">
                <label for="NewsletterMensuel">Newsletter Mensuel</label>
            </div>
            <div>
                <input type="radio" id="NewsletterTrimestrielle" name="periodicite">
                <label for="NewsletterTrimestrielle">Newsletter Trimestrielle</label>
            </div>
        </div>
       </fieldset>
       <fieldset>
            <legend>Version papier - informatique</legend>
            <div>
                <input type="checkbox" id="papier">
                <label for="papier">Recevoir la version papier</label>
            </div>
            <div>
                <input type="checkbox" id="informatique">
                <label for="informatique">Recevoir la version informatique</label>
            </div>
       </fieldset>
       <div>
        <input type="submit" value="envoyer">
       </div>
    </form>
    
</body>
</html>