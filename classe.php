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
    <title>Classes - Gestion Scolaire</title>

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
                <div class="w-45 min-h-8 mt-12 rounded-[9px] flex items-center text-white text-sm">
                    <i class="fa-solid fa-house ml-5"></i>
                    <button class="cursor-pointer font-bold ml-4">Tableau de bord</button>
                </div>
            </a>

            <a href="filiére.php" class="cursor-pointer block mx-4 md:mx-8">
                <div class="w-45 min-h-8 mt-4 rounded-[9px] flex items-center text-white text-sm">
                    <i class="fa-solid fa-sliders ml-5 rotate-90"></i>
                    <button class="cursor-pointer font-bold ml-4">Filières</button>
                </div>
            </a>

            <a href="niveau.php" class="cursor-pointer block mx-4 md:mx-8">
                <div class="w-45 min-h-8 mt-4 rounded-[9px] flex items-center text-white text-sm">
                    <i class="fa-solid fa-sliders ml-5"></i>
                    <button class="cursor-pointer font-bold ml-4">Niveaux</button>
                </div>
            </a>

            <a href="classe.php" class="cursor-pointer block mx-4 md:mx-8">
                <div class="w-42 min-h-8 ml-1 bg-orange-200 mt-4 rounded-[9px] flex items-center  text-red-800 text-sm">
                    <i class="fa-solid fa-users ml-4"></i>
                    <button class="cursor-pointer font-bold ml-4">Classes</button>
                </div>
            </a>

            <a href="etudiant.php" class="cursor-pointer block mx-4 md:mx-8">
                <div class="w-45 min-h-8 mt-4 rounded-[9px] flex items-center text-white text-sm">
                    <i class="fa-solid fa-graduation-cap ml-5"></i>
                    <button class="cursor-pointer font-bold ml-4">Etudiants</button>
                </div>
            </a>

            <a href="statistique.php" class="cursor-pointer block mx-4 md:mx-8">
                <div class="w-45 min-h-8 mt-4 rounded-[9px] flex items-center text-white text-sm">
                    <i class="fa-solid fa-chart-line ml-5"></i>
                    <button class="cursor-pointer font-bold ml-4">Statistiques</button>
                </div>
            </a>

            <a href="deconnexion.php" class="cursor-pointer block mx-4 md:mx-8">
                <div class="w-45 min-h-8 mt-30 rounded-[9px] flex items-center text-white text-sm">
                    <i class="fa-solid fa-circle-arrow-left ml-5"></i>
                    <button class="cursor-pointer font-bold ml-4">Se déconnecter</button>
                </div>
            </a>

        </div>

        <div class="w-[calc(100%-15rem)] ml-60 min-w-0 min-h-screen">

             <div class="w-[calc(100%-15rem)] h-17 bg-white border-b border-gray-200 flex items-center justify-between px-8 fixed top-0 left-60 z-10">

               <div class="w-full max-w-[960px] h-12 flex items-center justify-between px-5  ">

                    <div class="w-80 h-7 flex flex-col justify-center  border border-gray-300 rounded-full bg-gray-100">
                        <p class="text-gray-700 text-xs ml-3"><i class="fa-solid fa-magnifying-glass text-gray-500 "></i>   Recherche une classe.......................</p>
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


             <div class="w-full px-10 mt-24 flex items-center justify-between">

                <div>
                    <h2 class="text-[22px] font-bold text-gray-800">Classes</h2>
                    <p class="text-[12px] text-gray-600"> Gérez les différentes classes de l'établissement</p>
                </div>

                <a href="ajoutclasse.php" class="cursor-pointer">
                    <div class="min-h-8 px-3 bg-red-800 hover:bg-red-700 rounded-lg flex items-center justify-center text-white text-sm">
                        <i class="fa-solid fa-plus mr-2 text-[10px]"></i>
                        <button class="cursor-pointer font-bold text-[12px]">Ajouter une classe</button>
                    </div>
                </a>

            </div>

       
<div class="w-full px-10 mt-10 pb-8 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5">

    <?php foreach ($_SESSION["classes"] as $classe) { ?>

        <div class="w-full min-h-[148px] bg-white rounded-lg border border-gray-100 p-3">

            <div class="flex items-start justify-between gap-2">

                <div class="flex items-center gap-2 min-w-0">
                    <div class="w-9 h-9 shrink-0 bg-red-200 rounded-full flex items-center justify-center">
                        <i class="fa-solid fa-users text-red-800 text-sm"></i>
                    </div>

                    <div class="min-w-0">
                        <h3 class="text-[12px] font-bold text-gray-800">
                            <?php echo htmlspecialchars($classe["code_classe"]); ?>
                        </h3>

                        <p class="text-[11px] text-gray-600">
                            <?php echo htmlspecialchars($classe["nom_classe"]); ?>
                        </p>
                    </div>
                </div>

                <span class="bg-red-100 text-red-800 text-[9px] rounded-full  py-1 shrink-0">
                    <p class="w-15 ml-2 ">Capacité : <?php echo htmlspecialchars($classe["capacite"]); ?></p>
                    <p>
                        
                    </p>
                </span>

            </div>

            <div class="mt-4 text-[15px] text-gray-700 space-y-1">
                <div class="flex">
                    <p class="w-22 ">filiére</p>
                    <p class="font-semibold text-[13px] ">
                        <?php echo htmlspecialchars($classe["filiere"]); ?>
                    </p>
                </div>

                <div class="flex">
                    <p class="w-22">Niveau</p>
                    <p class="font-semibold">
                        <?php echo htmlspecialchars($classe["niveau"]); ?>
                    </p>
                </div>
            </div>

            <div class="border-t border-gray-200 mt-3 pt-3 flex flex-wrap gap-1 justify-between">

                <a href="classe.php"
                   class="bg-blue-100 hover:bg-blue-200 text-blue-700 rounded-md px-3.5 py-1.5 text-[9px]">
                    <i class="fa-solid fa-eye mr-1"></i>Voir détails
                </a>

                <a href="modifier_niveau.php"
                   class="border border-gray-300 hover:bg-gray-100 text-gray-800 rounded-md px-4 py-1.5 text-[9px]">
                    <i class="fa-solid fa-pen mr-1"></i>Modifier
                </a>

                <button type="button"
                        class="bg-red-100 hover:bg-red-200 text-red-700 rounded-md px-3.5 py-1.5 text-[9px] cursor-pointer">
                    <i class="fa-solid fa-trash mr-1"></i>Supprimer
                </button>

            </div>

        </div>

    <?php } ?>

</div>


        </div>

    </div>

</body>
</html>