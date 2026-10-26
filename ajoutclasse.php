<?php
require_once 'Data.php';


 if (isset($_POST["ajout"])){
     $classe = [
        "code_classe" => $_POST["code_classe"],
        "nom_classe" => $_POST["nom_classe"],
        "filiere" => $_POST["filiere"],
        "niveau" => $_POST["niveau"],
        "capacite" =>$_POST["capacite"]
    ];

    $_SESSION["classes"][] = $classe;
    header("Location: classe.php");
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
    <title>Formulaire Classe  Gestion Scolaire</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css">
</head>

<body class="bg-gray-100 m-0">

    <div class="w-full min-h-screen flex">

        <div class="w-60 shrink-0 bg-red-800 h-screen fixed left-0 top-0 overflow-hidden z-20">

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

            <a href="déconnexion.php" class="cursor-pointer block mx-4 md:mx-8">
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

            <div class="w-full px-5 md:px-8 lg:px-12 mt-24 pb-10">

                <div class="w-full flex items-center gap-3 text-gray-500 mb-4">

                    <i class="fa-solid fa-graduation-cap text-red-700 text-xl"></i>

                    <p class="text-sm">
                        Gestion scolaire / Classes / Ajout
                    </p>

                </div>

                <div class="w-full flex flex-col md:flex-row md:items-center justify-between gap-4 mb-10">

                    <div>
                        <h2 class="text-xl font-bold text-gray-800">
                            Ajouter une classe
                        </h2>

                        <p class="text-sm text-gray-500 mt-2">
                            Remplissez les informations ci-dessous pour créer une nouvelle classe.
                        </p>
                    </div>

                    <a href="classe.php" class="self-start md:self-auto">
                        <div class="min-h-8 px-4 bg-red-800 hover:bg-red-700 transition rounded-lg mt-2 flex items-center justify-center text-white text-xs font-bold gap-3">
                            <i class="fa-solid fa-arrow-left text-sm"></i>
                            Retour à la liste
                        </div>
                    </a>

                </div>

                <form action="ajoutclasse.php" method="POST" class="w-full bg-white border border-gray-300 rounded-2xl  shadow-sm p-5 md:p-8">

                    <div class="w-full flex items-center gap-4 mb-7">

                        <div class="w-10 h-12 shrink-0  rounded-xl flex items-center justify-center">
                            <i class="fa-solid fa-users text-red-700 text-2xl"></i>
                        </div>

                        <div>
                            <h3 class="text-lg md:text-sm font-bold text-gray-800">
                                Informations de la classe
                            </h3>

                            <p class="text-sm text-gray-500 ">
                                Les champs marqués d'une étoile sont obligatoires.
                            </p>
                        </div>

                    </div>

                    <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-x-5 gap-y-5">

                            <div class="w-full">
                            <label for="code_classe" class="block text-sm font-medium text-gray-800 mb-3">
                                Code de la classe <span class="text-red-600 font-bold">*</span>
                            </label>

                            <input
                                type="text"
                                id="code_classe"
                                name="code_classe"
                                placeholder="Ex : L1 Dev"
                                required
                                class="w-full h-10 border border-gray-300 rounded-xl px-4 text-sm text-gray-700 outline-none transition "
                            >
                        </div>

                        <div class="w-full">
                            <label for="nom_classe" class="block text-sm font-medium text-gray-800 mb-3">
                                Nom de la classe <span class="text-red-600 font-bold">*</span>
                            </label>

                            <input
                                type="text"
                                id="nom_classe"
                                name="nom_classe"
                                placeholder="Ex : Développement Web L1 - A"
                                required
                                class="w-full h-10 border border-gray-300 rounded-xl px-4 text-sm text-gray-700 outline-none transition "
                            >
                        </div>

                        <div class="w-full">
                            <label for="filiere" class="block text-sm font-medium text-gray-800 mb-3">
                                Filière <span class="text-red-600 font-bold">*</span>
                            </label>

                            <select
                                id="filiere"
                                name="filiere"
                                required
                                class="w-full h-10 border border-gray-300 rounded-xl px-4 text-sm text-gray-600 bg-white outline-none transition "
                            >
                                <option value="" selected disabled>Ex : Sélectionner une filière</option>
                                <option value="Développement Web et Mobile">Développement Web et Mobile</option>
                                <option value="Réseaux et Systèmes">Réseaux et Systèmes</option>
                                <option value="Développement Mobile">Développement Mobile</option>
                                <option value="Data Science">Data Science</option>
                                <option value="UI/UX Design">UI/UX Design</option>
                                <option value="Cybersécurité">Cybersécurité</option>
                                <option value="Intelligence Artificielle & Big Data">Intelligence Artificielle & Big Data</option>
                                <option value="Marketing Digital">Marketing Digital</option>

                            </select>
                        </div>

                        <div class="w-full ">
                            <label for="niveau" class="block text-sm font-medium text-gray-800 mb-3">
                                Niveau <span class="text-red-600 font-bold">*</span>
                            </label>

                            <select
                                id="niveau"
                                name="niveau"
                                required
                                class="w-full h-10 border border-gray-300 rounded-xl px-4 text-sm text-gray-600 bg-white outline-none transition "
                            >
                                <option value="" selected disabled>Ex : Sélectionner un niveau</option>
                                <option value="L1">Licence 1 (L1)</option>
                                <option value="L2">Licence 2 (L2)</option>
                                <option value="L3">Licence 3 (L3)</option>
                                <option value="M1">Master 1 (M1)</option>
                                <option value="M2">Master 2 (M2)</option>
                            </select>
                        </div>

                        <div class="w-full ">
                            <label for="capacite" class="block text-sm font-medium text-gray-800 mb-3">
                                Capacité <span class="text-red-600 font-bold">*</span>
                            </label>

                            <input
                                type="number"
                                id="capacite"
                                name="capacite"
                                placeholder="Ex : 30"
                                min="1"
                                required
                                class="w-full h-10 border border-gray-300 rounded-xl px-4 text-sm text-gray-700 outline-none transition "
                            >
                        </div>

                    </div>

                    <div class="w-full border-t border-gray-100 mt-4 mb-7"></div>

                    <div class="w-full flex flex-col-reverse sm:flex-row items-stretch sm:items-center justify-between gap-3">

                        <a href="classe.php" class="self-start sm:self-auto">
                            <div class="min-h-10 px-5 border border-gray-400 hover:bg-gray-100 transition rounded-xl flex items-center justify-center text-gray-700 text-sm gap-3">
                                <i class="fa-solid fa-xmark text-sm"></i>
                                Annuler
                            </div>
                        </a>

                        <button
                            type="submit"
                            name="ajout"
                            class="min-h-10 px-4 bg-red-800 hover:bg-red-700 transition rounded-xl flex items-center justify-center text-white text-sm font-bold gap-2 cursor-pointer"
                        >
                            <i class="fa-solid fa-plus text-sm"></i>
                            Ajouter une classe
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</body>
</html>
```