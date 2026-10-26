
<?php
require_once 'Data.php';

if (isset($_POST["ajout"])) {

    $niveau = [
        "code_niveau" => $_POST["code_niveau"],
        "libelle_niveau" => $_POST["libelle_niveau"]
        
    ];

    $_SESSION["niveaux"][] = $niveau;
    header("Location: niveau.php");
    exit; 
}
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
    <title>Ajouter un niveau - Gestion Scolaire</title>

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
                <div class="w-42 min-h-8 ml-1 bg-orange-200 mt-4 rounded-[9px] flex items-center  text-red-800 text-sm">
                    <i class="fa-solid fa-sliders ml-4"></i>
                    <button class="cursor-pointer font-bold ml-4">Niveaux</button>
                </div>
            </a>

            <a href="classe.php" class="cursor-pointer block mx-4 md:mx-8">
                <div class="w-45 min-h-8 mt-4 rounded-[9px] flex items-center text-white text-sm">
                    <i class="fa-solid fa-users ml-5"></i>
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
                        <p class="text-gray-700 text-xs ml-3"><i class="fa-solid fa-magnifying-glass text-gray-500 "></i>   Recherche un niveau.......................</p>
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


            <div class="flex items-center gap-2 mt-20 ml-8">
                        <div class="w-8 h-8  rounded-lg flex items-center justify-center">
                            <i class="fa-solid fa-graduation-cap text-red-700"></i>
                        </div>
                        <span class="text-xs text-gray-500">Gestion scolaire / Filières / Ajout</span>
                    </div>

            <div class="w-full px-10 mt-2 flex items-center justify-between gap-4">

                <div>
                    <h2 class="text-[22px] font-bold text-gray-800">Ajouter un niveau</h2>
                    <p class="text-[12px] text-gray-600 mt-1">
                        Remplissez les informations ci-dessous pour créer un nouveau niveau d'études.
                    </p>
                </div>

                <a href="niveau.php" class="shrink-0">
                    <div class="min-h-8 px-4 bg-red-800 hover:bg-red-700 transition rounded-lg flex items-center justify-center text-white text-[12px] mt-4 font-bold">
                        <i class="fa-solid fa-arrow-left mr-2"></i>
                        Retour à la liste
                    </div>
                </a>

            </div>

            <div class="w-full px-10  mt-12">

                <div class="w-full bg-white h-88 border border-gray-400 rounded-xl shadow-sm  md:p-8">

                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-10 h-10 rounded-lg  flex items-center justify-center">
                            <i class="fa-solid fa-graduation-cap text-red-700 text-lg"></i>
                        </div>

                        <div>
                            <h3 class="text-[15px] font-bold text-gray-800">Informations du niveau</h3>
                            <p class="text-[11px] text-gray-500 mt-1">Les champs marqués d'une étoile sont obligatoires.</p>
                        </div>
                    </div>
               
                    <form action="ajoutniveaux.php" method="POST">

                        <div class="w-full mb-7">

                            <label for="code_niveau" class="block text-[13px] h-5 font-semibold text-gray-700 mb-2">
                                Code du niveau <span class="text-red-600">*</span>
                            </label>

                            <div class="w-full flex items-center border border-gray-400 rounded-lg px-3 h-10 bg-white ">

                                <input
                                    type="text"
                                    id="code_niveau"
                                    name="code_niveau"
                                    placeholder="Ex : L1, L2, L3, M1, M2"
                                    required
                                    class="w-full h-11 px-3 outline-none  text-[13px] text-gray-700">
                            </div>

                        </div>

                        <div class="w-full mb-3">

                            <label for="libelle_niveau" class="block text-[13px] font-semibold text-gray-700 mb-2">
                                Libellé du niveau <span class="text-red-600">*</span>
                            </label>

                            <div class="w-full flex items-center border border-gray-400 rounded-lg px-3 h-10 bg-white  ">

                                <input
                                    type="text"
                                    id="libelle_niveau"
                                    name="libelle_niveau"
                                    placeholder="Ex : Premiére année , Deuxiéme année , Troixiéme année , Master 1 , Master 2 "
                                    required
                                    class="w-full h-11 px-3 outline-none bg-transparent text-[13px] text-gray-700">
                            </div>

                        </div>

                        <div class="w-full flex flex-col-reverse sm:flex-row items-stretch sm:items-center justify-between gap-3 border-t border-gray-100 pt-5">

                            <a href="niveau.php" class="border border-gray-400 hover:bg-gray-100 transition rounded-lg px-5 h-10 flex items-center justify-center text-gray-700 text-[12px] font-semibold">
                                <i class="fa-solid fa-xmark mr-2"></i>
                                Annuler
                            </a>

                             
                            <button
                                type="submit"
                                name="ajout"
                                class="bg-red-700 hover:bg-red-800 transition rounded-lg px-5 h-10 flex items-center justify-center text-white text-[12px] font-semibold cursor-pointer">
                                <i class="fa-solid fa-plus mr-2"></i>
                                Ajouter un niveau
                            </button>

                        </div>

                    </form>


                </div>

            </div>

        </div>

    </div>

</body>
</html>