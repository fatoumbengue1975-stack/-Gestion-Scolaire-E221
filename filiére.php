<?php
require_once 'Data.php';

if (!isset($_SESSION["connecte"]) || $_SESSION["connecte"] !== true) {
    header("Location: connexion.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filières Gestion Scolaire</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css">
</head>

<body class="bg-gray-100 m-0">

    <div class="w-full min-h-screen flex">
 
        <div class="w-60 shrink-0 bg-red-800 h-screen fixed left-0 top-0 overflow-hidden">

            <div class="w-45 h-15 mt-4 ml-9 flex justify-between">
                <div class="w-12 h-12 mt-1 bg-[url(images.jpg)] bg-cover bg-top rounded-xl shrink-0"></div>

                <div class="w-33 max-w-full min-h-[60px] ml-4">
                    <h1 class="text-white text-xl font-bold mt-1">ECOLE 221</h1>
                    <p class="text-orange-200 font-bold text-[10px]">GESTION SCOLAIRE</p>
                </div>
            </div>

            <a href="dashbord.php" class="cursor-pointer block mx-4 md:mx-8">
                <div class="w-45 min-h-8 ml-1 mt-12 rounded-[9px] flex items-center text-white text-sm">
                    <i class="fa-solid fa-house ml-5"></i>
                    <span class="font-bold ml-3">Tableau de bord</span>
                </div>
            </a>

            <a href="filiére.php" class="cursor-pointer block mx-4 md:mx-8">
                <div class="w-42 min-h-8 ml-1 bg-orange-200 mt-4 rounded-[9px] flex items-center  text-red-800 text-sm">
                    <i class="fa-solid fa-sliders rotate-90 ml-4"></i>
                    <span class="font-bold ml-4">Filières</span>
                </div>
            </a>

            <a href="niveau.php" class="cursor-pointer block mx-4 md:mx-8">
                <div class="w-45 min-h-8 mt-4 rounded-[9px] flex items-center text-white text-sm">
                    <i class="fa-solid fa-sliders ml-5"></i>
                    <span class="font-bold ml-4">Niveaux</span>
                </div>
            </a>

            <a href="classe.php" class="cursor-pointer block mx-4 md:mx-8">
                <div class="w-45 min-h-8 mt-4 rounded-[9px] flex items-center text-white text-sm">
                    <i class="fa-solid fa-users ml-5"></i>
                    <span class="font-bold ml-4">Classes</span>
                </div>
            </a>

            <a href="etudiant.php" class="cursor-pointer block mx-4 md:mx-8">
                <div class="w-45 min-h-8 mt-4 rounded-[9px] flex items-center text-white text-sm">
                    <i class="fa-solid fa-graduation-cap ml-5"></i>
                    <span class="font-bold ml-4">Etudiants</span>
                </div>
            </a>

            <a href="statistique.php" class="cursor-pointer block mx-4 md:mx-8">
                <div class="w-45 min-h-8 mt-4 rounded-[9px] flex items-center text-white text-sm">
                    <i class="fa-solid fa-chart-line ml-5"></i>
                    <span class="font-bold ml-4">Statistiques</span>
                </div>
            </a>

            <a href="déconnexion.php" class="cursor-pointer block mx-4 md:mx-8">
                <div class="w-45 min-h-8 mt-30 rounded-[9px] flex items-center text-white text-sm">
                    <i class="fa-solid fa-circle-arrow-left ml-5"></i>
                    <span class="font-bold ml-4">Se déconnecter</span>
                </div>
            </a>

        </div>

        <div class="w-[calc(100%-15rem)] ml-60 min-w-0 min-h-screen">

            <div class="w-[calc(100%-15rem)] ml-60 bg-white h-17 flex items-center justify-center fixed top-0 left-0 z-10">

                <div class="w-full max-w-[960px] h-12 flex items-center justify-between px-5  ">

                    <div class="w-80 h-7 flex flex-col justify-center  border border-gray-300 rounded-full bg-gray-100">
                        <p class="text-gray-700 text-xs ml-3"><i class="fa-solid fa-magnifying-glass text-gray-500 "></i>   Recherche une filiére.......................</p>
                    </div>

                    <div class="h-12 flex items-center justify-between gap-3 ml-4">

                        <div class="w-10 h-10 flex items-center justify-center relative">
                            <i class="fa-solid fa-bell text-[18px] text-slate-950"></i>
                            <span class="absolute top-1 right-1 bg-red-600 text-white rounded-full text-[9px] w-3 h-3 flex items-center justify-center">3</span>
                        </div>

                        <div class="w-11 h-11 shrink-0 bg-[url(profil.jpg)] bg-cover bg-top rounded-full  ml-4"></div>

                        <div class="min-w-0">
                            <p class="text-[13px] font-bold text-gray-700">Abdou Diop</p>
                            <p class="text-[12px] text-gray-700">Administrateur</p>
                        </div>

                        <div class="w-10 h-10 flex items-center justify-center ">
                            <i class="fa-solid fa-check text-slate-950 ml-6"></i>
                        </div>

                    </div>
                </div>
            </div>

            <div class="w-full px-8 lg:px-11 mt-24 flex flex-wrap items-center justify-between gap-4">

                <div>
                    <h2 class="text-[22px] font-bold text-gray-800">Filières</h2>
                    <p class="text-[12px] text-gray-700">
                        Gérez les différentes filières de l’établissement
                    </p>
                </div>
                <a href="ajoutfiliére.php">
                     <button type="button" class="bg-red-800 hover:bg-red-700 text-white text-[12px] font-semibold px-4 py-2 rounded-lg flex items-center gap-2 cursor-pointer">
                    <i class="fa-solid fa-plus"></i>
                    Ajouter une filière
                </button>
                </a>

               

            </div> 

<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5 px-8 lg:px-11 mt-8 pb-8">

    <?php foreach ($_SESSION["filieres"] as $filiere) { ?>

        <div class="bg-white rounded-lg p-3 shadow-sm min-h-[170px] flex flex-col justify-between">

            <div class="flex gap-3">
                
                
                <div class="w-7 h-7 mt-1 shrink-0 rounded-full bg-red-200 flex items-center justify-center">
                     <?php
                     if ($filiere["code_filiere"] == "DEVWEB") {
                         echo '<i class="fa-solid fa-code text-red-800"></i>';
                     } elseif ($filiere["code_filiere"] == "RESEAU") {
                         echo '<i class="fa-solid fa-network-wired text-red-800"></i>';
                     } elseif ($filiere["code_filiere"] == "DATA") {
                         echo '<i class="fa-solid fa-database text-red-800"></i>';
                     } elseif ($filiere["code_filiere"] == "MOBILE"){
                         echo '<i class="fa-solid fa-mobile-screen-button text-red-800"></i>';
                     } elseif ($filiere["code_filiere"] == "UI UX"){
                         echo '<i class="fa-solid fa-pen-ruler text-red-800"></i>';
                     }  elseif ($filiere["code_filiere"] == "CYBER"){
                         echo '<i class="fa-solid fa-user-shield text-red-800"></i>';
                     } elseif ($filiere["code_filiere"] == "IA"){
                         echo '<i class="fa-solid fa-brain text-red-800"></i>';
                     } elseif ($filiere["code_filiere"] == "CLOUD"){
                         echo '<i class="fa-solid fa-cloud text-red-800"></i>';
                     }else {
                         echo '<i class="fa-solid fa-microchip  text-red-800"></i>';
                     }
                     ?>
                </div>

                <div class="min-w-0">

                    <p class="text-[15px] font-semibold text-gray-800">
                        <?= htmlspecialchars($filiere["code_filiere"]) ?>
                    </p>

                    <p class="text-[14px] font-medium text-gray-800">
                        <?= htmlspecialchars($filiere["nom_filiere"]) ?>
                    </p>

                    <p class="text-[13px] text-gray-700 mt-1">
                        Responsable :
                        <strong><?= htmlspecialchars($filiere["responsable"]) ?></strong>
                    </p>

                    <p class="text-[11px] leading-[15px] text-gray-700">
                        <?= htmlspecialchars($filiere["description"]) ?>
                    </p>

                </div>
            </div>

            <div class="flex gap-2 mt-3 px-0.5">

                <button type="button"
                        class="flex-1 border cursor-pointer border-indigo-900 text-indigo-950 rounded-md py-1 text-[11px]">
                    <i class="fa-solid fa-pen mr-2"></i>Modifier
                </button>

                <button type="button"
                        class="flex-1 border border-red-300 bg-red-200 cursor-pointer text-red-700 rounded-md py-1 text-[11px]">
                    Supprimer
                </button>

            </div>

        </div>

    <?php } ?>

</div>


        </div>
    </div>

</body>
</html>
