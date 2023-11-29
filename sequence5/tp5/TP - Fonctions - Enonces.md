# Travaux pratiques - Fonctions en PHP

---

## Consignes
Les différentes fonctions demandées ci-après devront être définies dans un script **tp-fonctions.php**.\
Ce script sera inclus lors du test de vos fonctions.

## 1. Conversion de température
Créez une fonction `convertirCelsiusFahrenheit` qui convertit une température de Celsius en Fahrenheit.\
La fonction a un paramètre (la température en Celcius) et retourne la température convertie en Fahrenheit.

## 2. Génération d'un mot de passe
Créez une fonction `genererMotDePasse` qui génère un mot de passe aléatoire.\
La fonction a un paramètre (la longueur du mot de passe) et renvoie le mot de passe généré.\
Utilisez des lettres majuscules, minuscules, des chiffres et des caractères spéciaux.\
Les caractères spéciaux à utiliser sont les suivants : `!@#$%^&*()`.

## 3. Génération d'un numéro adhérent
Créez une fonction `genererNumeroAdhérent` qui génère un numéro d'adhérent dont le format est le suivant : `AD-999999`. \
Le format doit donc comporter 9 caractères. \
Exemple :
- AD-987544
- AD-342943
- AD-000007

## 4. Génération d'un acronyme
Créez une fonction `genererAcronyme` qui prend une phrase et renvoie l'acronyme correspondant en majuscules.\
Par exemple, pour "As Soon As Possible", elle renvoie "ASAP".

## 5. Génération de numéros de billets
- Créez une fonction `genererNumerosbillets` qui génère et retourne un tableau contenant des numéros de billets pour un événement. \
Un numéro de billet doit respecter le format `EVT-yyyyMMdd-9999` où `yyyyMMdd` est la date du jour et `9999` est un nombre aléatoire à quatre chiffres.\
Le nombre de numéros à générer devra être un paramètre de la fonction.
Les numéros renvoyés dans le tableau devront tous être uniques (pas de doublons).
- Créez une fonction `acheterBillet` permettant à une personne identifée par son nom d'acheter un billet parmi ceux générés par la fonction `genererNumerosbillets`. \
Attention le billet doit faire partie des billets générés et ne pas avoir déjà été vendu. \
Chaque fois qu'un billet est vendu, on doit enregistrer la vente dans un tableau associatif avec comme clé le numéro de billet et comme valeur le nom de la personne.

Voici un exemple d'utilisation :
```php
// Génération de 50 billets
$billetsDisponibles = genererNumerosBillets(50);

$billetsVendus = [];
// Achat de billets
acheterBillet("Alice","EVT-20231129-6743",$billetsDisponibles,$billetsVendus);
acheterBillet("Bob","EVT-20231129-1289",$billetsDisponibles,$billetsVendus);
acheterBillet("Charly","EVT-20231129-4587",$billetsDisponibles,$billetsVendus);
// Affichage des billets vendus
foreach($billetsVendus as $billetVendu as $nom) {
    echo "$nom a acheté le billet $billetVendu" . PHP_EOL;
}
```















