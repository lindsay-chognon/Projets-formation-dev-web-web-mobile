​
#E1 VAPEUR DOUCE

Stéphane Gabrielly est chef formateur dans l'une des plus grandes écoles de cuisine de Paris après avoir été chef de cuisine aux Etats-Unis, à Bordeaux, à Bayonne, puis chef à domicile dans le Sud-Ouest et formateur cuisinier à l'Institut Paul-Bocuse à Lyon.

Pour accompagner son dernier livre "Plats gourmands, Vapeur Douce", Stéphane aimerait que vous lui proposiez un petit site qui servirait d'aide-mémoire à ses lecteurs. Ce site leur permettrait d'accéder rapidement à des informations pratiques liées à cet étonnant mode de cuisson.

Techniquement, les informations utilisées dans ce site proviennent d'une API distante qui permet de récupérer les informations liées à un aliment précis (exemple : https://api.hmz.tf/?id=Cresson ou encore https://api.hmz.tf/?id=Haricot+rouge ) ou encore de lister tous les produits actuellement disponibles dans l'API ( https://api.hmz.tf/?id=all ).

individuel
	

2 journées
	

compétences
C1 niveau III
C2 niveau III
C3 niveau III
Scénario utilisateur

Sur la page d'accueil, le visiteur tape le nom de l'aliment (exemple : Myrtille) et accède aux informations  concernant cet aliment (ici la durée de cuisson à la vapeur : 3-4 minutes).
Charte graphique

Stéphane Gabrielly aimerait baser son site sur la palette de couleurs suivante: https://colorhunt.co/palette/219713 et utiliser cette famille de police pour le logo: https://www.dafont.com/fr/stay-home-2.font?text=vapeur+douce

Le logo est constitué de deux mots : VAPEUR DOUCE
Exigences de sécurité

Le client désire que l'application soit dépourvue de faille de type "Cross-site scripting" (XSS).
Votre mission

À partir du scénario utilisateur, de la charte graphique et des exigences de sécurité identifiées, concevoir les maquettes mobile & desktop des interfaces utilisateurs de l’application, avec du contenu en langue française. Puis, les faire valider par le client avant de passer au développement.

À partir des maquettes mobile & desktop de l’interface validées par le client, créer les pages web dans un langage côté server. Développer, commenter et tester son code. Le site devra faire appel à l'API mentionnée par le client et contiendra des métadonnées facilitant son référencement sur les moteurs de recherche et améliorant sa visibilité sur les réseaux sociaux via l'open graph et les twitter cards.

Enfin, le site devra obtenir un score de performance mobile supérieur à 90% sur "PageSpeed Insights" https://developers.google.com/speed/pagespeed/insights/ 
Modalités pédagogiques

Evaluation individuelle à effectuer en deux jours.
Livrable(s)

    Lien vers le dépôt Git du projet qui contient :
        Les maquettes mobile & desktop.
        L'intégralité du site correspondant à ces maquettes.
        La capture d'écran du score de performance mobile "PageSpeed Insights".
        La capture d'écran de la page d'accueil sur le navigateur Firefox (desktop)
        La capture d'écran de la page d'accueil sur le navigateur Chrome ou Chromium (desktop)
        L'extrait de code commenté qui permet de faciliter le référencement du site sur les moteurs de recherche.
        L'extrait de code commenté qui permet d'améliorer la visibilité du site sur les réseaux sociaux.
    Lien vers une démonstration fonctionnelle du site, hébergée sur un serveur en ligne.
    Lien vers un support de présentation (slides) (vous vous servirez de ce support de présentation lors d'une restitution)

Pour aller plus loin (hors évaluation)

    Le client aimerait que vous lui proposiez une v2 qui intégrerait des suggestions automatiques. Par exemple si je tape "Rhu" dans le champ de formulaire, il me sera proposé "Rhubarbe (en tronçons)". Le client estime que les suggestions automatiques participent à l'amélioration de l'expérience utilisateur (UX).
    Le client a bien apprécié la simplicité de mise en page et le rendu mobile (avec et sans le clavier) du site DuckDuckGo, tel qu'illustré dans les captures suivantes. A vous de proposer une v3 qui s'en rapprocherait.
    https://cdn.hmz.tf/screenshot-duckduckgo-mobile-keyboard-false.png
    https://cdn.hmz.tf/screenshot-duckduckgo-mobile-keyboard-true.png

Contexte du projet

C1. Maquetter une application

À partir de cas d'utilisation ou de scénarios utilisateur, de la charte graphique et des exigences de sécurité identifiées, concevoir la maquette des interfaces utilisateurs de l’application, avec du contenu en langue française ou anglaise, y compris celles appropriées à l’équipement ciblé et en tenant compte de l’expérience utilisateur et pour un équipement mobile des spécificités ergonomiques. Formaliser les enchaînements des interfaces afin que l’utilisateur les valide ainsi que les maquettes.

Le maquettage intervient en phase de conception avec une forte implication de l'utilisateur final, actuel ou futur, le plus souvent dans une démarche projet itérative centrée sur l'expérience utilisateur (approche Agile). Chaque itération permet d'enrichir et de finaliser la maquette, afin que l’utilisateur valide l’interface graphique de l’application et en retrouve les principales fonctionnalités tout au long du cycle de développement. Les itérations peuvent donner lieu à des ateliers de présentation aux utilisateurs. Le maquettage intervient pour des applications sur des supports et environnements multiples.

Description de la compétence – processus de mise en œuvre
À partir de cas d'utilisation ou de scénarios utilisateur, de la charte graphique et des exigences de sécurité identifiées, concevoir la maquette des interfaces utilisateurs de l’application, avec du contenu en langue française ou anglaise, y compris celles appropriées à l’équipement ciblé et en tenant compte de l’expérience utilisateur et pour un équipement mobile des spécificités ergonomiques.

Formaliser les enchaînements des interfaces afin que l’utilisateur les valide ainsi que les maquettes.

Contexte(s) professionnel(s) de mise en œuvre
Le maquettage intervient en phase de conception avec une forte implication de l'utilisateur final, actuel ou futur, et dans une démarche itérative centrée sur l'expérience utilisateur (approche Agile). Chaque itération permet d'enrichir et de finaliser la maquette, afin que l’utilisateur valide l’interface graphique de l’application et en retrouve les principales fonctionnalités tout au long du cycle de développement. Les itérations peuvent donner lieu à des ateliers de présentation aux utilisateurs. Le maquettage intervient pour des applications sur des supports et environnements multiples.

C2. Réaliser une interface utilisateur web statique et adaptable

À partir de la maquette de l’interface à réaliser, de la charte graphique et à l'aide d'un langage de présentation, créer les pages web statiques et adaptables, y compris pour les équipements mobiles, afin d’obtenir un rendu visuel optimisé et adapté à l’équipement de l’utilisateur et à l’ensemble des navigateurs ciblés. Respecter les bonnes pratiques de structuration et de sécurité ainsi que les contraintes de l'architecture du matériel cible. Publier les pages web sur un serveur et les rendre visibles sur les moteurs de recherche. Rechercher des solutions pertinentes pour la résolution de problèmes techniques de rendu et d'accessibilité en utilisant de la documentation en langue française ou anglaise. Partager le résultat de sa veille avec ses pairs.

Cette compétence s'exerce seul, ou en équipe quand l'ergonomie du site nécessite l'apport de compétences en web design pour la mise en page des informations et/ou des objets graphiques et multimédias. La compétence peut nécessiter l’utilisation d’un environnement de développement et d’un environnement de test pour les équipements ciblés y compris mobiles. La visibilité du site (référencement) dépend du public visé.

Critères d'évaluation
L'interface est conforme à la maquette de l'application Les pages web respectent la charte graphique de l'entreprise Les bonnes pratiques de structuration et de sécurité sont respectées y compris pour le web mobile Les pages web sont accessibles depuis les navigateurs ciblés y compris depuis un mobile Les pages web s’adaptent à la taille de l’écran Les pages web sont optimisées pour le web mobile Le site respecte les règles de référencement naturel Les pages web sont publiées sur un serveur L’objet de la recherche est exprimé de manière précise en langue française ou anglaise La documentation technique liée aux technologies associées, en français ou en anglais, est comprise (sans contre-sens, ...) La démarche de recherche permet de résoudre un problème technique ou de mettre en œuvre une nouvelle fonctionnalité Le partage du résultat de recherche et de veille est effectué, oralement ou par écrit, avec ses pairs.

C3. Développer une interface utilisateur web dynamique

À partir de l'interface utilisateur web statique et adaptable, de la charte graphique et dans le respect des bonnes pratiques de développement et de sécurisation d'application web : développer, tester et documenter les traitements coté client, afin d’obtenir une page web dynamique et d’améliorer l’expérience utilisateur en particulier pour les équipements mobiles. Optimiser l’application web pour une utilisation sur les équipements mobiles. Publier l’application web et la rendre visible sur les moteurs de recherche. Pratiquer une veille technologique, y compris en anglais, pour résoudre un problème technique ou mettre en œuvre une nouvelle fonctionnalité ainsi que pour s’informer sur la sécurité informatique et les vulnérabilités connues. Partager le résultat de sa veille avec ses pairs.

Cette compétence s'exerce seul ou en équipe et peut nécessiter l’utilisation d’un environnement de développement. Le rendu visuel et les fonctionnalités doivent être vérifiés sur l’ensemble des navigateurs ciblés. La visibilité de l’application web (référencement) dépend du public visé. L’optimisation d’application web pour les équipements mobiles peut requérir l’utilisation des mécanismes asynchrones (de type AJAX,...).

Critères d'évaluation
Les pages web respectent la charte graphique de l'entreprise Les pages web sont conformes à l’expérience utilisateur y compris pour l’expérience mobile. L'architecture de l'application répond aux bonnes pratiques de développement et de sécurisation d'application web L’application web est optimisée pour les équipements mobiles Le code source est documenté ou auto-documenté L'application web est publiée sur un serveur Les tests garantissent que les pages web répondent aux exigences décrites dans le cahier des charges Les tests de sécurité suivent un plan reconnu par la profession L’objet de la recherche est exprimé de manière précise en langue française ou anglaise La documentation technique liée aux technologies associées, en français ou en anglais, est comprise (sans contre-sens, ...) La démarche de recherche permet de résoudre un problème technique ou de mettre en œuvre une nouvelle fonctionnalité La veille sur les vulnérabilités connues permet d’identifier et corriger des failles potentielles Le partage du résultat de veille est effectué oralement ou par écrit avec ses pairs .
​
