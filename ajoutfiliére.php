<?php
require_once 'Data.php';

if (isset($_POST["ajout"])) {

    $filiere = [
        "code_filiere" => $_POST["code"],
        "nom_filiere" => $_POST["nom"],
        "responsable" => $_POST["responsable"],
        "description" => $_POST["description"]
    ];

    $_SESSION["filieres"][] = $filiere;
    header("Location: filiére.php");
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
    <title>Ajouter une filière - Ecole 221</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css">
</head>

<body class="bg-[#f4f7fb] m-0 text-slate-800">

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

            <div class="px-6 lg:px-9 pt-20 pb-5 flex flex-wrap items-center justify-between gap-4">

                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <div class="w-8 h-8  rounded-lg flex items-center justify-center">
                            <i class="fa-solid fa-graduation-cap text-red-700"></i>
                        </div>
                        <span class="text-xs text-gray-500">Gestion scolaire / Filières / Ajout</span>
                    </div>

                    <h2 class="text-xl font-bold text-gray-800">
                        Ajouter une filière
                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        Remplissez les informations pour créer une nouvelle filière d'études.
                    </p>
                </div>

                <a href="filiére.php"
                   class="bg-red-800  hover:bg-red-700 text-white text-xs mt-10 font-semibold px-4 py-2 rounded-lg flex items-center gap-2 shadow-sm">
                    <i class="fa-solid fa-arrow-left"></i>
                    Retour à la liste
                </a>

            </div>

            <div class="px-5 sm:px-8 pb-10">

                <div class="max-w-[720px] mx-auto bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden mt-6">

                    <div class="px-6 sm:px-8 py-2 border-b border-gray-100 flex items-center gap-4">

                        <div class="w-12 h-12 shrink-0  rounded-xl flex items-center justify-center">
                            <i class="fa-solid fa-file-circle-plus text-red-700 text-xl"></i>
                        </div>

                        <div>
                            <h3 class="text-base font-bold text-gray-800">
                                Informations de la filière
                            </h3>
                            <p class="text-xs text-gray-500 mt-1">
                                Les champs marqués d'un astérisque sont obligatoires
                            </p>
                        </div>

                    </div>

                    <form action="ajoutfiliére.php" method="POST" class="px-6 sm:px-8 py-5">

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-5 gap-y-5">

                            <div>
                                <label for="code" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Code de la filière <span class="text-red-600">*</span>
                                </label>

                                <div class="flex items-center border border-gray-300 rounded-lg px-5 h-10  bg-white ">
                                    <input type="text"
                                           id="code"
                                           name="code"
                                           placeholder="Ex. : DEVWEB"
                                           required
                                           class="w-full py-3 px-3 text-sm outline-none bg-transparent placeholder:text-gray-400">
                                </div>

                               
                            </div>

                            <div>
                                <label for="nom" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Nom de la filière <span class="text-red-600">*</span>
                                </label>

                                <div class="flex items-center border border-gray-300 rounded-lg px-3 h-10  bg-white ">
                                    <input type="text"
                                           id="nom"
                                           name="nom"
                                           placeholder="Ex. : Développement Web et Mobile"
                                           required
                                           class="w-full py-3 px-3 text-sm outline-none bg-transparent placeholder:text-gray-400">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="responsable" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Responsable <span class="text-red-600">*</span>
                                </label>

                                <div class="flex items-center border border-gray-300 rounded-lg px-3 h-10 bg-white">
                                    <input type="text"
                                           id="responsable"
                                           name="responsable"
                                           placeholder="Ex. : Mme Diop"
                                           required
                                           class="w-full py-3 px-3 text-sm outline-none bg-transparent placeholder:text-gray-400">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Description <span class="text-red-600">*</span>
                                </label>

                                <textarea id="description"
                                          name="description"
                                          rows="3"
                                          required
                                          placeholder="Décrivez brièvement les objectifs, les compétences et les enseignements de cette filière..."
                                          class="w-full border border-gray-300 rounded-lg p-3 text-sm outline-none resize-y placeholder:text-gray-400"></textarea>

                                
                            </div>

                        </div>

                        <div class="mt- p-4   flex items-start gap-3">
                            <i class="fa-solid fa-circle-info text-red-700 mt-0.5"></i>
                            <p class="text-xs text-gray-600 leading-5">
                                Vérifiez les informations saisies avant de créer la filière.
                                Les champs obligatoires doivent être renseignés.
                            </p>
                        </div>

                        <div class="flex flex-col-reverse sm:flex-row items-center justify-between gap-3 pt-5 border-t border-gray-100">

                            <a href="filiére.php"
                               class="w-full sm:w-auto text-center border border-gray-300 hover:bg-gray-50 text-gray-700 text-sm font-medium px-5 py-2 rounded-lg">
                                <i class="fa-solid fa-xmark mr-2"></i>
                                Annuler
                            </a>

                            <button type="submit"
                            name="ajout"
                                    class="w-full sm:w-auto bg-red-800 hover:bg-red-700 text-white text-xs font-semibold px-4 py-2 rounded-lg shadow-sm flex items-center justify-center gap-2">
                                <i class="fa-solid fa-plus"></i>
                                Ajouter la filière
                            </button>

                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>

</body>
</html>
