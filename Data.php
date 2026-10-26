<?php
   // session_start();
   if (session_status() === PHP_SESSION_NONE) {
    session_start();
    }

   $etudiants = [
    [
        "matricule" => "E221001",
        "nom" => "Diop",
        "prenom" => "Amadou",
        "sexe" => "Homme",
        "date_naissance" => "",
        "telephone" => "77 123 45 67",
        "filiere" => "Développement Web et Mobile",
        "niveau" => "L1",
        "classe" => "L1-DEVWEB",
        "adresse" => ""
    ],
    [
        "matricule" => "E221002",
        "nom" => "Fall",
        "prenom" => "Aïssatou",
        "sexe" => "Femme",
        "date_naissance" => "",
        "telephone" => "77 987 65 43",
        "filiere" => "Développement Web et Mobile",
        "niveau" => "L1",
        "classe" => "L1-DEVWEB",
        "adresse" => ""
    ],
    [
        "matricule" => "E221003",
        "nom" => "Sow",
        "prenom" => "Moussa",
        "sexe" => "Homme",
        "date_naissance" => "",
        "telephone" => "76 543 21 09",
        "filiere" => "Réseaux et Systèmes",
        "niveau" => "L1",
        "classe" => "L1-RESEAU",
        "adresse" => ""
    ],
    [
        "matricule" => "E221004",
        "nom" => "Ndiaye",
        "prenom" => "Fatou",
        "sexe" => "Femme",
        "date_naissance" => "",
        "telephone" => "76 543 21 09",
        "filiere" => "Développement Mobile",
        "niveau" => "L2",
        "classe" => "L2-MOBILE",
        "adresse" => ""
    ],
    [
        "matricule" => "E221005",
        "nom" => "Ba",
        "prenom" => "Ibrahima",
        "sexe" => "Homme",
        "date_naissance" => "",
        "telephone" => "77 654 32 10",
        "filiere" => "Développement Web et Mobile",
        "niveau" => "L3",
        "classe" => "L3-DEVWEB",
        "adresse" => ""
    ],
    [
        "matricule" => "E221006",
        "nom" => "Sarr",
        "prenom" => "Mariama",
        "sexe" => "Femme",
        "date_naissance" => "",
        "telephone" => "76 456 78 90",
        "filiere" => "Réseaux et Systèmes",
        "niveau" => "L3",
        "classe" => "L3-RESEAU",
        "adresse" => ""
    ],
    [
        "matricule" => "E221007",
        "nom" => "Gueye",
        "prenom" => "Ousmane",
        "sexe" => "Homme",
        "date_naissance" => "",
        "telephone" => "77 345 67 89",
        "filiere" => "Développement Web et Mobile",
        "niveau" => "M1",
        "classe" => "M1-DEVWEB",
        "adresse" => ""
    ],
    [
        "matricule" => "E221008",
        "nom" => "Diallo",
        "prenom" => "Aminata",
        "sexe" => "Femme",
        "date_naissance" => "",
        "telephone" => "78 567 89 01",
        "filiere" => "Développement Mobile",
        "niveau" => "M1",
        "classe" => "M1-MOBILE",
        "adresse" => ""
    ]
];


$filieres = [
    [
        "code_filiere" => "DEVWEB",
        "nom_filiere" => "Développement Web et Mobile",
        "responsable" => "Mme Diop",
        "description" => "Formation axée sur le développement web et mobile avec les technologies modernes."
    ],
    [
        "code_filiere" => "RESEAU",
        "nom_filiere" => "Réseaux et Systèmes",
        "responsable" => "M. Wade",
        "description" => "Administration des réseaux, sécurité et systèmes informatiques."
    ],
    [
        "code_filiere" => "MOBILE",
        "nom_filiere" => "Développement Mobile",
        "responsable" => "M. BA",
        "description" => "Développement d'applications mobiles Android et iOS."
    ],
    [
        "code_filiere" => "DATA",
        "nom_filiere" => "Data Science",
        "responsable" => "Mme Ndiaye",
        "description" => "Analyse et traitement des données massives et intelligence artificielle."
    ],
    [
        "code_filiere" => "UIUX",
        "nom_filiere" => "UI/UX Design",
        "responsable" => "Mme Fall",
        "description" => "Conception d'interfaces modernes et expérience utilisateur."
    ],
    [
        "code_filiere" => "CYBER",
        "nom_filiere" => "Cybersécurité",
        "responsable" => "M. Diagne",
        "description" => "Protection des systèmes et détection des menaces."
    ],
    [
        "code_filiere" => "IA",
        "nom_filiere" => "Intelligence Artificielle & Big Data",
        "responsable" => "Mme Sow",
        "description" => "Machine learning, deep learning et traitement automatisé des données massives."
    ]
    
];

$niveaux = [
    [
        "code_niveau" => "L1",
        "libelle_niveau" => "Première année",
    ],
    [
        "code_niveau" => "L2",
        "libelle_niveau" => "Deuxième année",
    ],
    [
        "code_niveau" => "L3",
        "libelle_niveau" => "Troisième année",
    ],
    [
        "code_niveau" => "M1",
        "libelle_niveau" => "Master 1",
    ],
    [
        "code_niveau" => "M2",
        "libelle_niveau" => "Master 2",
    ]
];


$classes = [
    [
        "code_classe" => "L1-DEVWEB",
        "nom_classe" => "L1 DEVWEB",
        "filiere" => "Développement Web et Mobile",
        "niveau" => "L1",
        "capacite" => 30
    ],
    [
        "code_classe" => "L1-RESEAU",
        "nom_classe" => "L1 RESEAU",
        "filiere" => "Réseaux et Systèmes",
        "niveau" => "L1",
        "capacite" => 30
    ],
    [
        "code_classe" => "L1-MOBILE",
        "nom_classe" => "L1 MOBILE",
        "filiere" => "Développement Mobile",
        "niveau" => "L1",
        "capacite" => 25
    ],
    [
        "code_classe" => "L2-DEVWEB",
        "nom_classe" => "L2 DEVWEB",
        "filiere" => "Développement Web et Mobile",
        "niveau" => "L2",
        "capacite" => 30
    ],
    [
        "code_classe" => "L2-MOBILE",
        "nom_classe" => "L2 MOBILE",
        "filiere" => "Développement Mobile",
        "niveau" => "L2",
        "capacite" => 30
    ],
    [
        "code_classe" => "L3-DEVWEB",
        "nom_classe" => "L3 DEVWEB",
        "filiere" => "Développement Web et Mobile",
        "niveau" => "L3",
        "capacite" => 30
    ],
    [
        "code_classe" => "L3-RESEAU",
        "nom_classe" => "L3 RESEAU",
        "filiere" => "Réseaux et Systèmes",
        "niveau" => "L3",
        "capacite" => 30
    ],
    [
        "code_classe" => "M1-MOBILE",
        "nom_classe" => "M1 MOBILE",
        "filiere" => "Développement Mobile",
        "niveau" => "M1",
        "capacite" => 30
    ],
    
];




if (!isset($_SESSION["etudiants"])) {
   $_SESSION["etudiants"] = $etudiants;
   }
   
   
   if (!isset($_SESSION["niveaux"])) {
      $_SESSION["niveaux"] = $niveaux;
   }

   if (!isset($_SESSION["filieres"])) {
    $_SESSION["filieres"] = $filieres;
    }

    if (!isset($_SESSION["classes"])) {
    $_SESSION["classes"] = $classes;
   }
   
   $totalEtudiants = count($_SESSION["etudiants"]);
   $totalniveaux = count($_SESSION["niveaux"]);
   $totalfilieres = count($_SESSION["filieres"]);
   $totalclasses = count($_SESSION["classes"]);


   $totalHommes = 0;
   $totalFemmes = 0;

   foreach ($_SESSION["etudiants"] as $etudiant) {
       if ($etudiant["sexe"] == "Homme") {
           $totalHommes++;
       } elseif ($etudiant["sexe"] == "Femme") {
           $totalFemmes++;
       }
   }

   $etudiantsParFiliere = [];

   foreach ($_SESSION["etudiants"] as $etudiant) {
       $filiere = $etudiant["filiere"];

       if (!isset($etudiantsParFiliere[$filiere])) {
           $etudiantsParFiliere[$filiere] = 0;
       }

       $etudiantsParFiliere[$filiere]++;
   }

   $etudiantsParNiveau = [];

   foreach ($_SESSION["etudiants"] as $etudiant) {
      $niveau = $etudiant["niveau"];

      if (!isset($etudiantsParNiveau[$niveau])) {
            $etudiantsParNiveau[$niveau] = 0;
      }

      $etudiantsParNiveau[$niveau]++;
   }

   $etudiantsParClasse = [];

   foreach ($_SESSION["etudiants"] as $etudiant) {
       $classe = $etudiant["classe"];

       if (!isset($etudiantsParClasse[$classe])) {
           $etudiantsParClasse[$classe] = [
               "nombre" => 0,
               "filiere" => $etudiant["filiere"],
               "niveau" => $etudiant["niveau"]
           ];
       }

       $etudiantsParClasse[$classe]["nombre"]++;
   }

   uasort($etudiantsParClasse, function ($a, $b) {
       return $b["nombre"] <=> $a["nombre"];
   });

   $topClasses = array_slice($etudiantsParClasse, 0, 4, true);


   $derniersEtudiants = array_slice(
    array_reverse($_SESSION["etudiants"]),
    0,
    5
   );

   $etudiantsParNiveau = [];

   foreach ($_SESSION["etudiants"] as $etudiant) {
       $niveau = $etudiant["niveau"];

       if (!isset($etudiantsParNiveau[$niveau])) {
           $etudiantsParNiveau[$niveau] = 0;
       }

       $etudiantsParNiveau[$niveau]++;
   }
?>