<<!-- Temporisation par le bais du buffer -->

    <?php ob_start(); ?>


    <p class="text-monospace m-4 p-4 text-primary">ici ma page mentions légales</p>

    <!-- Start mention Area -->
    <section class="open-mention-area ">
        <div class="container">
            <div class="row justify-content-center  m-5 p-5">
                <div class="col-lg-12 open-mention-wrap ">
                    <h4 class="text-primary text-center mb-3 pb-3">Mentions légales</h4>
                    <p class="text-justify">

                        Conformément aux dispositions de la loi n° 2004-575 du 21 juin 2004 pour la confiance en
                        l'économie numérique, il est précisé aux utilisateurs du site Cabinet dentaire Antony l'identité
                        des différents intervenants dans le cadre de sa réalisation et de son suivi.

                        Edition du site

                        Le présent site, accessible à l’URL https://cabinetdentaireantony.fr (le « Site »), est édité
                        par :

                        christine daniele, résidant 56 rte d antony 91320 wissous, de nationalité Française (France),
                        né(e) le 05/12/1977,


                        Hébergement

                        Le Site est hébergé par la société obh, situé 56 rte d antony 92360, (contact téléphonique ou
                        email : +33695172435).

                        Directeur de publication

                        Le Directeur de la publication du Site est christine daniele.

                        Nous contacter

                        Par téléphone : +33695172435
                        Par email : konda300@yahoo.fr
                        Par courrier : 56 rte d antony 91320 wissous

                        Données personnelles

                        Le traitement de vos données à caractère personnel est régi par notre Charte du respect de la
                        vie privée, disponible depuis la section "Charte de Protection des Données Personnelles",
                        conformément au Règlement Général sur la Protection des Données 2016/679 du 27 avril 2016
                        («RGPD»).

                        a désigné un Délégué à la Protection des Données (DPO) auprès de la CNIL (Désignation N° ). Les
                        coordonnées de notre Délégué à la Protection des Données sont les suivantes :

                        Nom : Arthur Rimbal
                        Adresse : 10 route de l ecole 91320 wissous
                        Téléphone : +33695172430
                        Email : konda300@yahoo.fr

                        Génération des mentions légales par Legalstart.

                    </p>

                    <h4 class="text-primary text-center mb-3 pb-3">RGPD</h4>
                    <p class="text-justify">
                        Politique de protection des données à caractère personnel.
                        La présente politique décrit la manière dont XXX traite les données à caractère personnel
                        (ci-après les « Données Personnelles ») collectées auprès de ses prospects, clients et
                        partenaires (ci-après le/les « Clients
                        ») :
                        • Lors de leur navigation sur le site internet https://avocat-fiscaliste- paris.com (ci-après le
                        « Site ») et de leur utilisation des fonctionnalités de ce Site ;
                        • Lors de prises de contacts téléphoniques ;
                        • Dans le cadre de la formalisation de relations contractuelles (signature de contrats, etc.) et
                        du suivi de ces relations contractuelles ;
                        • Par tout autre moyen.
                        Les textes de référence de cette politique sont le Règlement Général pour la Protection des
                        Données n° 2016/679/UE du 27 avril 2016 – applicable depuis le 25 mai 2018 (le « RGPD ») et la
                        loi dite « Informatique et Libertés » du 6 janvier 1978 modifiée (la « LIL »).
                        Cette politique pourra être modifiée, complétée ou mise à jour afin notamment de se conformer à
                        toute évolution légale, réglementaire, jurisprudentielle et technique.
                        Cependant, les Données Personnelles des Clients seront toujours traitées conformément à la
                        politique en vigueur au moment de leur collecte, sauf si une prescription légale impérative
                        venait à en disposer autrement et était d’application rétroactive.

                        1. Les Données Personnelles collectées sont les suivantes :
                        • Sur le site https://xxxxxxxx.com dans le cadre des formulaires de prise de contact : nom,
                        prénom, numéro de téléphone, adresse électronique, message laissé par le Client le cas échéant.
                        • Dans le cadre de la prospection commerciale : nom, prénom, adresse postale, adresse
                        électronique, numéro de téléphone.
                        • Dans le cadre de la formalisation et du suivi des relations contractuelles
                        : nom, prénom, adresse postale, adresse électronique, numéro de téléphone,
                        • XXX confirme ne collecter aucune donnée « sensible » au sens de l’article 9 paragraphe 1 du
                        RGPD (par exemple, données concernant la santé).
                        2. Les finalités principales des Données Personnelles collectées sont les suivantes :
                        • permettre à XXX de répondre à toutes demandes d’informations des Clients quant aux prestations
                        de services proposées par XXX;

                        • permettre aux Clients de naviguer et de profiter des fonctionnalités des Sites.
                        • permettre l’envoi par XXX d’informations commerciales et de messages publicitaires, via
                        courriers électroniques, messages SMS, appels téléphoniques et courriers postaux.
                        • permettre la signature de contrats et assurer le suivi des relations contractuelles;
                        • Lorsque certaines informations ou déclarations sont obligatoires pour accéder à des
                        fonctionnalités spécifiques des Sites, ce caractère obligatoire est indiqué au moment de la
                        saisie des Données Personnelles. En cas de refus du Client de fournir des informations
                        obligatoires, il pourra se voir refuser l’accès à certains services, fonctionnalités ou
                        rubriques des Sites.


                    </p>

                </div>
            </div>
        </div>
    </section>
    <!-- End mention Area -->


    <?php

    $content = ob_get_clean();
    $titre = "Mentions légales";
    require "template.php";
    ?>