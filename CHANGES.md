# Changelog

## version 9.2.22
- Modification :
    - Aperçu de la police dans les sélecteurs.

## version 9.2.21
- Correction :
    - Footer / Texte personnalisé : suppression des sauts de ligne et de paragraphe.
- Modification : 
    - Thème / Body, couleurs de l'icône retour en haut de page perso personnalisables.

## version 9.2.20
- Corrections : 
    - Footer / Texte personnalisé : problème d'alignement des colonnes
    - Variable non déclarée dans main.php provoquant un warning

## version 9.2.19
- Corrections :
    - CSS : marge bouton InputDelete.
    - Texte de la page des mentions légales du site d'exemple.

## version 9.2.18
- Corrections :
    - Conformité balise p dans span (footer).
    - Petites corrections.
- Modifications : 
    - Installation par défaut : livraison d'une page de mentions légales.
    - Image du fond (body), options responsive cover et contain.
    - Réseaux sociaux, icône Youtube chaîne ou utilisateur.
    - Pied de page, position fixe dans le site.
    - Pied de page, option d'affichage des mentions légales disponible uniquement si une page est sélectionnée.

## version 9.2.17
- Correction :
    - Affiche le nom du la page plutôt que son id dans le fil d'ariane

## version 9.2.16
- Optimisation :
    - Sauvegarde manuelle des données de site (dossiers file et data).
- Modification :
    - Stocke la réécriture d'url dans baseUrl en cas de changement d'arborescence lors d'un transfert de site.
- Correction : 
    - Problème lors de la mise à jour de la variable dataVersion.

## version 9.2.15
- Corrections :
    - Sauvegarde des données de site.
    - Couleur du titre de site dans le menu réduit.
    - L'effet de couleur de fond personnalisé d'une page sélectionnée dans le menu est limité aux pages parents.
- Améliorations : 
    - Affichage du contenu seul d'une page du site dans une popup Lity sans menu, bannière et pied de page.
    - Editeur de texte ; effet accordéon, les accordéons peuvent être tous refermés.
    - Thème ; menu : lorsque le menu est réduit, le titre du site peut être inséré à la gauche du menu burger.

## version 9.2.14
- Mise à jour :
    - Script d'upload du gestionnaire de fichiers
- Modifications :
    - Thème : optimisation des masques de saisie pour le site en largeur 750px.    
- Corrections : 
    - Thème : gestion d'erreur lors de l'import d'un thème issu d'une version inférieure. 

## version 9.2.13
- Corrections :
    - Gestionnaire de fichiers, modifications des paramètres des miniatures.
    - Filtrage du nom des pages dans la fenêtre d'édition des pages.
    - Format de date dans le module Blog
    - Module Form : 
        - correction des options de champ pour le type étiquette
- Modifications : 
    - Suppression d'options inutiles dans l'édition d'une page de type de barre latérale.
    - Module Form : 
        - édition  : champs d’options condensés 
        - édition : ordre des champs dans le sélecteur 
    
## version 9.2.12
- Modifications 
    - TinyMCE :
        - Ajout d'un template effet accordéon.
        - Supprimer le filtrage des éléments.
        - Supprimer le forçage de l'affichage des médias à 100%
        - Activer le dimensionnement des médias
    - Module Form :
        - Etiquette de séparation
        - Checkbox retourne un astérisque plutôt que 1
    - Thème - Menu :
        - Couleur de fond de la page sélectionnée
        - Effet bord arrondi, page sélectionnée

## version 9.2.11
- Corrections : 
    - Marge du pied de page par défaut 5px
    - Installation sans site exemple : suppression des barres latérales
    - Edition de page : 
        - Affichage de l'option Fil d'ariane alors que le titre est masqué.
        - Page parente, l'option "ne pas afficher les pages enfants dans le menu horizontal" est incompatible avec une page désactivée : désactivation et masquage lorsque la page est désactivée.
        - Mauvais encodage des titres de pages perturbant l'affichage des caractères spéciaux ( ex: apostrophes ).
- Modifications : 
    - Recherche d'une mise à jour en ligne, s'effectue une fois par jour et devient optionnelle.
    - Amélioration de l'écran d'édition des pages.
    - iframe responsive

## version 9.2.10
- Modifications préparatoires à la version 10 : 
    - Lors de l'installation, stockage de l'url de base dans l'éventualité de la restauration d'un backup et de son installation dans une autre arborescence.
    - Modification des clés identifiant les légendes du module Gallery : suppression du point de séparation du nom de fichier de l'extension.
- Modifications :
    - Thème, bannière : nouvelle option de hauteur calculée à partir de la dimension de l'image sélectionnée.
    - Thème, bannière : informations sur l'image sélectionnée (largeur et hauteur).
    - Thème, pied de page :  réactivation de l'aperçu.
- Corrections : 
    - Thème, bannière : problème empêchant la bannière d'être cliquable lorsque la hauteur "responsive" de la bannière était sélectionnée.   
    - Responsive File manager : erreur empêchant l'extraction d'une archive ZIP.
- Mise à jour : 
    - CodeMirror 5.49.2 et modification des modules installés

## version 9.2.09
- Corrections :
    - Module Formulaire, erreur lors de l'envoi d'un premier formulaire
    - Thème Pied de page , désactivation de l'aperçu du texte personnalisé

## Version 9.2.08
- Correction :
    - Edition de page : bug empêchant le paramétrage d'un module après un changement de gabarit.
- Modification : 
    - Aide de l'édition des pages
    
## Version 9.2.07
- Modification : 
    - Balise <object> responsive
    - Placement possible de tous les modules
    - Commande de placement libre des modules et du menu latéral [MENU] et [MODULE]

## Version 9.2.06
- Correction : 
    - Validation html
    - Syntaxe du fichier robots.txt  

## Version 9.2.05
- Correction :
    - Suppression totale de Swiper (dossier source et template Tinymce)

## Version 9.2.04
- Correction : 
    - Conserver htaccess dans le dossier temp lors du nettoyage
- Suppression : 
    - Swiper

## Version 9.2.03
- Corrections :
    - Menu fixe en dehors du site : 
        - overlay du sous-menu activé au-dessus de la page
        - impossibilité de sélectionner un élément sous un sous-menu
    - Modules : les modes de gestion s'affichent en pleine page - réécriture du code.
    - Syntaxe du fichier main.php

## Version 9.2.02
- Correction :
    - Gestion d'erreur lors de l'installation automatisée d'une mise à jour

## Version 9.2.01
- Corrections : 
    - Sauvegarde du thème : prise en compte du fichier custom.css
    - Edition de page : libellés
    - Thème ; footer : marges du pied de page placé hors du site
    - Thème ; footer : aperçu du texte personnalisé

## Version 9.2.00
- Nouveautés :
    - Module de recherche dans le pied de page
    - Mentions légales dans le pied de page
    - Les pages "Recherche" et "Plan du site" peuvent être appelées à partir de TinyMCE dans le menu lien.
    - Le gabarit du pied de page peut se paramétrer en colonnes et en lignes, de 1 à 3 blocs.
    - Gabarit de page, présentation asymétrique des barres latérales : 33% - 50% - 16% et inversement
- Améliorations :
    - Gestion des sous-menus : suppression de l'option de masquage des pages dans le menu horizontal
    - Remise à plat et homogénéisation des masques d'édition des pages, footer et header
    - TinyMCE la fenêtre lien propose le sitemap et le module de recherche
- Correction :
    - Menu : alignement avec le contenu, couleur de l'arrière-plan

## Version 9.1.14   
- Correction :
    - Validation w3C : espace manquant

## Version 9.1.13
- Corrections : 
    - Erreur du sitemap.xml lorsqu'un blog ne contient pas d'article.
    - OpenGraph : erreur lors de la suppression de l'imagette si absente.

## Version 9.1.12
- Amélioration : 
    - Contrôle d'erreur dans la gestion de l'imagette OpenGraph
- Correction :     
    - Sitemap.xml : prendre en compte les sous-pages d'une page parente masquée

## Version 9.1.11
- Correction : 
    - Générateur de sitemap.xml, correction de syntaxe.

## Version 9.1.10
- Améliorations : 
    - Page sitemap et sitemap.xml : les articles de blog avec le statut brouillon sont masqués.
    - Sitemap.xml : ajout de la date de publication des articles.
    - Réseau social : Github.
- Correction : 
    - Suppression du ? dans les URLs vers les fichiers sitemap  de robots.txt

## Version 9.1.09
- Améliorations :
    - Mise en page petits écrans, modification des marges
    - Configuration du site : scripts dans header et body
    - Nouvel écran de configuration
    - Ajoute la compression gzip et deflate dans htaccess
    - Sitemap (page et sitemap.xml) revu et corrigé :
        - Prends en compte les articles de blog
        - Affiche les pages désactivées sans lien
        - Prends en compte les droits de l'utilisateur
- Corrections : 
    - Déclaration de localisation manquante dans mail.php
    - Bug avec le formulaire
    - Désactivation url upload dans RFM    

## Version 9.1.08
- Corrections : 
    - Validation du code html et du CSS commun
    - Réécriture activée après chaque mise à jour auto.
- Modifications : 
    - Thème 100%  fluide sans marge
    - Ecran de smartphone (ex : iPhone 6) : adaptation de la barre d'administration : le username est masqué et la taille des icônes est augmentée
    - Chemins vers les données dans des constantes
    - Modèles de bannières de plusieurs dimensions
    - Hauteur de police par défaut 13px
- Mises à jour : 
    - TinyMCE 4.9.4
    - PHPMailer 6.07
    - Jquery 3.4.1

## Version 9.1.07
- Correction : 
    - Ajout d'un utilisateur : autres contrôles avant envoi d'un mail de confirmation
- Suppression :
    - Include de script.inc.php et head.inc.html dans main.php

## Version 9.1.06
- Corrections : 
    - Ajout d'un utilisateur : pas d'envoi du mail de confirmation si les mots de passe ne sont pas identiques.
    - Mise à jour automatique : effacement des archives téléchargées
    - Z-index des sous-menus augmentés à 8 ; problème d'affichage avec codemirror
- Modification : 
    - Include de script.inc.php et head.inc.html dans main.php

## Version 9.1.05
- Correction : 
    - Site par défaut : lien Zwii masqué du menu horizontal
- Modifications : 
    - Présentation de l'édition des pages
    - Largeur dynamique du bouton envoyer dans le formulaire 
    - Lien dans le footer vers le site Zwii
    - Redirection, écran de confirmation

## Version 9.1.04
- Corrections : 
    - Edition de page : problème mise en page
    - Module Form (v1.9) : position et largeur des boutons
    - Thème Pied de page : problème d'affichage
    - Thème Site : boutons tronqués en 750px : 750px = 0.8em
- Modification : 
    - Aperçu de la bannière en mode responsive

## Version 9.1.03
- Corrections :
    - Edition de page : modification de libellés, masquage d'options petites corrections
    - Installation par défaut : chemin vers la bannière
    - Image dans le fond du site option automatique

## Version 9.1.02
- Correction :
    - Suppression Include

## Version 9.1.01
- Modifications : 
    - Amélioration de l'algorithme de gestion des barres
    - Script Google Analytics
    - Menu : effet de surimpression pages filles
    - Réorganisation de l'écran d'édition des pages
    - Blog : notification hiérarchique lors de la rédaction d'un commentaire 
    - Form : notification hiérarchique de la réception d'un message
    - Thème header : hauteur proportionnelle de la bannière (responsive)
- Ajouts :
    - Menu dans une barre latérale : intégral ou sous-menu de la page parente
    - Option d'apparition des pages dans le menu latéral ou le menu principal
    - Option de chargement d'un modèle de site à l'installation
    - Option de masquage des pages enfants dans le menu principal
    - Petits écrans, ordre des blocs : Page - Barre Gauche - Barre Droite
    - Intégration de la classe Swiper http://idangero.us/swiper/
    - Intégration de l'URL canonical 
    - Icône de suppression des pages dans la barre d'administration
    - Gestion du sitemap.xml et du robots.txt
- Corrections :
    - Form : option de redirection

## Version 9.0.21
- Mise à jour : 
    - Code Mirror v5.46
- Corrections : 
    - Liens de l'éditeur de page : impossibilité de sélectionner un lien vers une page parente
    - Export des données du site, problème lors de la création de l'arborescence.

## Version 9.0.20
- Correction : 
    - Footer : Taille de la police du numéro de version

## Version 9.0.19
- Correction : 
    - Alignement du menu    
                 
## Version 9.0.18
- Correction : 
    - Etat par défaut du numéro de version mal récupéré    

## Version 9.0.17
- Mises à jour :
    - simpleLightBox 1.17.0
- Correction : 
    - Marges pour les petits écrans en mode connecté
    - Ajustement CSS du pied de page
    - Harmonisation du contenu des bulles d'aide    
- Modifications : 
    - Ajout du numéro de version dans le pied de page activable dans la configuration du thème
    - Désactivation Aviary dans Responsive FileManager   

## Version 9.0.16
- Correction : 
    - Nom de page constitué de caractères filtrés empchant la création d'un Id valide.
    - Module Gallery : bouton de fermeture sous Edge

## Version 9.0.15
- Corrections : 
    - Débordement dans le pied de page quand le copyright est à droite
- Modifications : 
    - Petits écrans, menu d'administration icônes plus grandes
    - Masquage de l'icône de gestion du compte 

## Version 9.0.14
- Corrections : 
    - Débordement dans le pied de page quand le copyright est à droite
- Modifications : 
    - Petits écrans, menu d'administration plus icônes plus grandes
    - Masquage de l'icône de gestion du compte 

## Version 9.0.13
- Modifications :
    - Paramètre Tippy : ajouter area[title]
    - SimpleLightbox : bug d'affichage sous Edge, erreur signalée mais corrigée dans Zwii

## Version 9.0.12
- Corrections :
    - Configuration de Tippy pour l'utilisation de l'argument title dans les balises a et img. Data-tippy-content reste un argument reconnu
    - Bug de la redirection lorsqu'un dossier porte le nom d'une page, le contrôle de cohérence est déplacé dans page.

## Version 9.0.11
- Corrections :
    - Marges du pied de page
    - Tippy par défaut pour l'argument Title
    - Disparition du menu lorsque dans le site et que la bannière est déplacée hors du site

## Version 9.0.10
- Corrections :
    - Google + non effacé

## Version 9.0.09
- Corrections :
    - Nettoyage du code, petites corrections.

## Version 9.0.08
- Modifications :
    - Core : les données par défaut ne sont chargées qu'à installation afin d'alléger l'empreinte mémoire du noyau
    - Prise en compte de la taille des petits écrans, suppression des marges
    - Backup theme.json avant une mise à jour automatique
    - Réorganisation des écrans de paramétrage du thème, ordre de saisie, bulles d'aide et nouveaux libellés
    - SimpleLightBox : miniatures cliquables permettant de parcourir toutes les images d'une page (comme dans la galerie)
    - Barre d'administration : pages inactives en orange.
- Ajouts :
    - Thèmes : pied de page choix de police et de styles
- Corrections :
    - Faille XSS : liens de connexion encadrés par STRIP_TAGS
    - TinyMCE : désactivation du thème mobile ne fonctionnait pas sur ipad et iphone
    - Blog 1.3 : image en tête d'article correctement affichée avec effet responsive.
    - TinyMCE : taille des miniatures générées par défaut 480 x 320 en vue d'un affichage correct dans le module blog
    - Pied de page : correction d'un problème d'affichage sur des écrans inférieurs à 992px
    
## Version 9.0.07
- Correction :
    - Disparition du menu quand la bannière est masquée
- Modifications :
    - Barre d'administration : pages organisées

## Version 9.0.06
- Correction :
    - Configuration des modes de codemirror
- Modifications : 
    - TinyMCE : libellés fenêtre des liens

## Version 9.0.05
- Modifications :
    - Thème : 
        - nouvelle position du menu dans le site quand la bannière est au-dessus.
        - Simplification et ordre des libellés position du menu par rapport à la bannière
    - Editeur de texte, scrolle lorsque l'éditeur est ouvert, la barre d'outil se colle sous la barre d'administration.
    - TinyMCE :
        - liste des pages du site dans la fenêtre des liens
        - option lightbox pour l'affichage d'images ou de liens
        usages : https://sorgalla.com/lity/

## Version 9.0.04
- Corrections : 
    - Module form 1.6 : 
        - erreur lors de la non sélection d'un groupe
        - captcha inefficace
    - Pour les testeurs : la mise à jour automatique n'est plus proposée lors d'une régression, lorsque le numéro de version en ligne est inférieur à celui de la version installée.
- Ajout :
    - Redimensionnement des images map : permet d'obtenir des images map fonctionnelles lorsque les dimensions de l'image sont réduites par le thème ou la taille de l'écran.
        - La carte peut être générée par https://www.image-map.net/
        - Article (en) : https://blog.travismclarke.com/project/imagemap/
        - Git : https://github.com/clarketm/image-map 


## Version 9.0.03
- Corrections :
    - Erreur de mise à jour des options du menu lors du déplacement du header
    - Sélection par défaut d'une page de type barre
    - Données par défaut : suppression des doubles quotes

## Version 9.0.02
- Correction :
    - Mauvais affichage des bulles TIPPY, remplacement des balises TITLE


## Version 9.0.01
- Modifications : 
    - Abandon de l'envoi masqué des mails du formulaire
    - Effacement Google+ des réseaux sociaux
    - Rétablissement du background du header
    - Opération sur un mauvais type affichant une notice
- Correction : 
    - La bannière hors site cliquable replacée dans le header
    - Hauteur du footer hors site non appliquée


## Version 9.0.00
- Modification :
    - Stockage distinct du thème et des autres données (core, config, page, module et users ) avec import des données d'une version 8
    - Les thèmes :
        - Exporter un thème (avec les images) sous forme d'une archive ZIP à télécharger ou stocker dans  le gestionnaire de fichiers.
        - Importer un thème à partir des fichiers
        - Désactivation de la couleur d'arrière-plan du header lors de l'insertion d'une image
        - Nouvelle option de position fixe du menu type Facebook lorsque le menu et en haut de page et hors du site
        - Nettoyage des images effacées
    - Gabarits de pages : deux barres latérales, une à droite ou à gauche contenant des informations fixes.
    - Libellé Modérateur devient Editeur 
    - Editeur de texte :     
        - VisualBlocks dans TinyMCE
        - CodeMirror dans TinyMCE
    - Affichage de la version proposée dans la popup de mise à jour
    - Module Formulaire :
        - Case à cocher dans les formulaires
        - Bouton d'export au format CSV
        - Bouton effacer toutes les données
        - Notification d'un membre ou email libre 
    - Edition de page :
        - masquage des options inutiles selon le module
        - nouvelle option : fil d'ariane des pages filles
    - Barre d'administration fixe

Correctif : 
	- amélioration contre mesure CSRF
	- Erreur dans la procédure d'update suite à un ancien numéro de versions sur 4 digits

Mise à jour : 
	- TinyColoPicker
	- PhpMailer 6.0.6
	- Responsive FileManager version 9.14.0
	- Flatpickr version 4.5.2
	- Normalize.css version 8.0.1
	- Tippy version 3.3.0

     
## Version 8.5.6
* Correction : 
    - Destruction de la session au logout
    - Thème : aperçu de la modification de la barre de menu au-dessus du site
* Modification : 
    - Mise à jour RFM 9.14
    - Amélioration de la contre mesure CRSF
    - Libellé dans TinyMCE (gabarit)
    - Setlocal modification des paramètres FR    

## Version 8.5.5
* Correction : 
    - Faille CSRF lors de l'effacement d'un membre
    - Faille CSRF lors de l'effacement d'une galerie
    - Faille CSRF lors de l'effacement d'un article de blog    
    - Faille CSRF lors de l'effacement d'un article de news
    - Taille de la police dans le footer impossible à modifier

## Version 8.5.4
* Correction : 
    - Faille CSRF lors de l'effacement d'une page

## Verison 8.5.3
* Modification :
    - Config bouton de génération de la capture de l'écran OpenGraph
* Correction :
    - Appel de la génération de la capture d'écran OpenGraph quand le fichier est absent
    - CSS pour le footer des blocs et non des éléments
        - \#footersite, \#footerbody : bloc footer dans et hors site
        - \#footersite, \#footerbody a : liens du bloc footer  dans et hors site
        - Bloc des colonnes dans et hors site :
            - \#footersiteLeft, \#footerbodyLef
            - \#footersiteCenter, \#footerbodyCenter
            - \#footersiteRight, \#footerbodyRight   


## Version 8.5.2
* Correction : 
    - Thème menu : aperçu quand le menu est au-dessus et en-dehors du site
    
## Version 8.5.1
* Correction :
    - Nom de variable incorrect

## Version 8.5.0
* Correction : 
    - Suppression popup active par défaut dans le menu
    - Suppression option de titre de page dans le menu Icone + Texte
* Modification : 
    - Thème du menu : sélection de la police de caractère

## Version 8.4.9
* Correction :
    - Adresse d'une page inactive
* Modification : 
    - Blog : masquer une image dans l'article tout en conservant la miniature dans l'index

## version 8.4.8 
* Correction : 
    - Fautes de frappe

## Version 8.4.7
* correction :
    - Chaine de mise à jour des variables internes 

## Version 8.4.6
* corrections : 
    - Encodage des dates dans la liste des articles news et blog
    - Variable itemsperPage stockée dans le mauvais type

## Version 8.4.5
* corrections :
    - nettoyage du code core.php
    - W3C ajout de balise title manquante
    - Inversion de deux balises dans Socials

## Version 8.4.4
* Correction : 
    - Valeur par défaut et d'update des éléments du footer dans les blocks 

## Version 8.4.3
* Correction : 
    - URL incorrecte dans Metaimage
    - Erreur dans la génération du sitemap
    - Taille du texte de la bannnière maximale relative (vmax)
    - Préfixe des en-têtes html pour OpenGraph
    - Balise Titre dans Socials
    - Conformité W3C des URL dans socials

## Version 8.4.2
* Correction :
    - Modifications de la présentation des en-têtes d'articles de Blog et de News
    - Format du mois au format long et en français

## Version 8.4.1
* Correction :
    - Erreur de type empêchant l'affichage des articles du blog (nombre d'articles par page)

## Version 8.4.0
* Modifications :
	- Footer dans 3 blocs contenant dans l'ordre : Texte, Réseaux sociaux, Copyright
	- Pagination variable du nombre d'articles par page (news, blog et form)
	- Position des modules Galerie et Form dans une page ; haut ; bas ou libre avec les doubles crochets insérés dans l'article []
    - Prise en compte des balises OpenGraph obligatoires title , description, type et images
    - Modification de la position des boutons retour et éditer lors de l'affichage d'un article si connecté
    - Mise en forme de la composition des articles et des news 
    - Suppression du message de l'édition des redirections

* Corrections : 
    - Accès aux pages désactivées par le sitemap
    - Réduction du temps d'affichage des notifications
    - Image responsive en en-tête de l'article d'un blog
    - Mise à jour du gestionnaire de fichiers en version 9.13.1

## version 8.3.13 :
* Modifications : 
    - Bannière "responsive", nouvelles options de positionnement
    - Bouton Edit dans Blog
    - Options de position des menus selon la position de la bannière
    - Bouton Edition dans un article du blog
    - Balise ALT dans les images du menu
    - Correction RFM
 

## version 8.3.12 :
* Modification : 
    - bouton de retour dans la page d'un article de blog
* Correction :
    - miniatures des exemples 
## version 8.3.11 :
* Modifications : 
    - Thème : menu et sous menu sous forme de texte ou d'image (avec ou sans bulle)
    - Thème : nouvelle option permettant de cliquer sur la bannière afin de revenir à la racine du site
    - Thème : le menu peut être positionné en haut et hors de site sur la largeur de l'écran
    - Page : nouvelle option permettant désactiver une page dans le menu. Cette option permet soit  de mettre une page en maintenance tout en la laissant active dans le menu, soit de créer une entrée de menu principal sans contenu 
    - nouvelle option :  la bannière devient cliquable et renvoie vers la page d'accueil
    - nom des dossiers des images exemples
* Corrections : 
    - bug des commentaires non déposés quand connecté
    - bug présent depuis au moins la version 8.1 et qui faisait boucler l'édition d'une page avec un module de redirection; Après édition, un clic sur retour ou enregistrer renvoie vers la  page d'accueil en édition.
    - affichage d'une erreur 404 si le contenu d'une page est supprimé
    - erreur deans le filemanger si une seule extension demandée
    - corrige les droits sur la rédaction des commentaires
    - nouvelles icones d'exemple pour les menus
## 8.2.9
* Correction  :  filemanger : erreur dans la navigation du filemanager dans la sélection de la favicon
* Modification : on peut effacer le contenu d'une page sans provoquer d'erreur 404 
## 8.2.8
* Correction : filemanager problème de lecture d'une seule extension
## 8.2.7
* Correction : gestion des droits sur les commentaires du blog
* Correction : une option en double dans TinyMCE
## 8.2.6
* Ajout : module codesample dans TinyMCE
* Correction : erreur pendant de la récupération des données lorsque plusieurs cases à cocher ne sont pas cochées
* Correction : désactivation automatique de la réécriture d'URL lors de l'enregistrement de la configuration du site
* Correction : iframes et vidéos responsives
* Correction : lien de réinitialisation du mot de passe incorrect
* Correction : backup automatique non fonctionnel
* Correction : mauvaise lightbox de confirmation de suppression d'un utilisateur
* Correction : message de modifications non enregistrées lors de la navigation dans le module galerie
* Correction : aperçu incorrect de certaines polices dans la personnalisation du thème
* Correction : légende toujours visible dans le module galerie même lorsqu'elle est vide
* Correction : impossible de modifier un lien ou un tableau dans TinyMCE
* Correction : champ de sélection de date non fonctionnel
* Correction : images non triées par ordre alphabétique dans le module galerie
* Correction : articles après la première page du module blog non accessibles
* Correction : non suppression des données du module rattaché à une page lors de sa suppression
* Mise à jour : TinyMCE en 4.7.9

## 8.2.5
* Ajout : message de confirmation avant la mise à jour
* Ajout : sauvegarde du fichier de données avant une mise à jour
* Ajout : copier / coller avec un clic droit dans TinyMCE
* Ajout : plugin stickytoolbar afin de fixer la barre d'outils dans TinyMCE lors du défilement de la page
* Amélioration : modification du message d'erreur lors d'une mise à jour
* Amélioration : nouveaux textes par défaut à l'installation
* Correction : message de confirmation avant de quitter une page sans enregistrer ne s'affiche pas
* Correction : suppression du plugin legacyoutput qui génère du vieux code à la place du HTML5 dans TinyMCE
* Correction : message d'erreur lors d'une mise à jour avec la réécriture d'URL activée

## 8.2.4
* Ajout : bouton de mise à jour dans la barre utilisateur
* Ajout : mode mobile pour TinyMCE
* Amélioration : rétablissement de la réécriture d'URL après une mise à jour
* Amélioration : affichage des différentes étapes de mise à jour
* Correction : résultat d'une recherche caché par l'overlay de TinyMCE
* Correction : suppression des commentaires d'un article lors du changement de titre
* Mise à jour : TinyMCE en 4.7.8

## 8.2.3
* Ajout : mise à jour automatique de Zwii
* Ajout : surcouche de TinyMCE aux couleurs de Zwii
* Ajout : module pour rétablir le contenu non enregistré dans TinyMCE
* Correction : divers bugs mineurs

## 8.2.2
* Ajout : options avancées des images dans TinyMCE
* Ajout : effet de transition au survol des galeries photos
* Ajout : mode maintenance activable depuis la page de configuration
* Ajout : bordure autour de l'éditeur CSS dans la personnalisation avancée
* Amélioration : optimisation du message de consentement pour les cookies
* Correction : affichage cassé lors de l'ajout d'une image en fin d'article ou news
* Correction : incohérence dans la petite largeur du site
* Correction : erreur dans le script de mise à jour 8.2.0
* Correction : vidéos responsives non fonctionnelles
* Correction : légendes des photos de la galerie invisibles
* Mise à jour : Simplelightbox version 1.11.1

## 8.2.1
* Correction : texte des boutons et des items du menu invisible

## 8.2.0
* Ajout : bouton pour fermer les notifications
* Ajout : barre de progression dans les notifications
* Ajout : flèche pour les items du menu avec sous-menus
* Ajout : personnalisation avancée
* Ajout : nouvelles options de personnalisation
* Ajout : nouvelles tooltips
* Ajout : vidéos et iframes responsives
* Ajout : plugin template afin de créer des colonnes adaptatives dans TinyMCE
* Correction : divers correctifs mineurs
* Mise à jour : Flatpickr version 4.3.2
* Mise à jour : jQuery version 3.3.1
* Mise à jour : Lity version 2.3.0
* Mise à jour : Normalize version 8.0.0
* Mise à jour : TinyMCE version 4.7.7
* Suppression : support multilingue

## 8.1.2
* Correction : popup d'édition du module de redirection visible pour les membres
* Correction : enregistrement des ids et des urls impossible avec des caractères spéciaux
* Mise à jour : ResponsiveFilemanager version 9.12.2

## 8.1.1
* Amélioration : nouvelle méthode de traduction
* Correction : faille de sécurité
* Correction : faute d'orthographe
* Correction : news non publiée lors de la création
* Correction : pas de pagination pour les modules blog et news
* Correction : nombre de caractères max des textareas du générateur de formulaires bloqué à 500
* Correction : impossible d'ajouter un slash dans le titre d'une page

## 8.1.0
* Ajout : message d'erreur en cas d'échec lors d'un envoi d'email
* Ajout : vérification du fichier de données afin d'éviter une corruption
* Ajout : édition des métas des pages
* Ajout : confirmation des lightboxs avec le bouton "Entrée"
* Ajout : suppression des données dans le générateur de formulaires
* Ajout : module blog
* Ajout : module news
* Amélioration : refonte de l'interface
* Amélioration : messages en cas d'absence de contenu dans la galerie et le générateur de formulaires
* Amélioration : optimisation des filtres afin de sécuriser davantage les données enregistrées
* Correction : "Champ obligatoire" dans le module de génération de formulaire invisible
* Correction : changer le titre d'une page supprime le module rattaché
* Correction : impossible de désactiver la sauvegarde automatique des données
* Correction : faille de sécurité au niveau des champs obligatoires

## 8.0.1
* Ajout : mot de passe dans l'email d'installation
* Ajout : redirection vers l'interface de connexion si la page d'accueil est privée
* Ajout : suppression automatique des backups de plus de 30 jours
* Amélioration : suppression de la balise h1 du haut de page afin d'optimiser le référencement des sites
* Correction : mauvais comportement avec les images flottante en fin de page (image coupée)
* Correction : le serveur utilise une adresse email incorrecte pour envoyer des emails (www. en trop)
* Correction : les pages parents cachées s'affichent dans le menu lorsqu'un enfant n'est pas caché
* Correction : bouton de mise à jour toujours visible avec certaines configurations de PHP
* Correction : titre du site toujours visible même lorsqu'il doit être masqué
* Correction : page courante non mise en avant dans le menu lors de son édition
* Correction : texte personnalisé du bouton dans le module formulaire non visible
* Correction : incohérence de casse entre l'identifiant saisi à l'inscription / création de compte et celui envoyé par email
* Mise à jour : jQuery version 3.2.0
* Mise à jour : PHPMailer version 5.5.23
* Mise à jour : ResponsiveFilemanager version 9.11.3

## 8.0.0
Nouvelle version majeure de Zwii.

