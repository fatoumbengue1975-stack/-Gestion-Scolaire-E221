<?php 
   require_once 'Data.php';

   if (isset($_POST["ajout"])) {

   $etudiant = [
        "matricule" => $_POST["matricule"],
        "sexe" => $_POST["sexe"],
        "nom" => $_POST["nom"],      
        "prenom" => $_POST["prenom"], 
        "date_naissance" => $_POST["date_naissance"],
        "telephone" => $_POST["telephone"],      
        "filiere" => $_POST["filiere"], 
        "classe" => $_POST["classe"],           
        "adresse" => $_POST["adresse"],
        "niveau" => $_POST["niveau"]               
   ];

    $_SESSION["etudiants"][] = $etudiant;
    header("Location: etudiant.php");
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
    <title>Ajouter un étudiant - Gestion Scolaire</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css">
</head>

<body class="m-0 bg-gray-100 text-slate-800">

    <div class="min-h-screen">

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
                    <button type="button" class="cursor-pointer font-bold ml-4">Tableau de bord</button>
                </div>
            </a>

            <a href="filiére.php" class="cursor-pointer block mx-4 md:mx-8">
                <div class="w-45 min-h-8 mt-4 rounded-[9px] flex items-center text-white text-sm">
                    <i class="fa-solid fa-sliders ml-5 rotate-90"></i>
                    <button type="button" class="cursor-pointer font-bold ml-4">Filières</button>
                </div>
            </a>

             <a href="niveau.php" class="cursor-pointer block mx-4 md:mx-8">
                <div class="w-45 min-h-8 mt-4 rounded-[9px] flex items-center text-white text-sm">
                    <i class="fa-solid fa-sliders ml-5"></i>
                    <button type="button" class="cursor-pointer font-bold ml-4">Niveaux</button>
                </div>
            </a>

            <a href="classe.php" class="cursor-pointer block mx-4 md:mx-8">
                <div class="w-45 min-h-8 mt-4 rounded-[9px] flex items-center text-white text-sm">
                    <i class="fa-solid fa-users ml-5"></i>
                    <button type="button" class="cursor-pointer font-bold ml-4">Classes</button>
                </div>
            </a>

             <a href="etudiant.php" class="cursor-pointer block mx-4 md:mx-8">
                <div class="w-42 min-h-8 ml-1 bg-orange-200 mt-4 rounded-[9px] flex items-center  text-red-800 text-sm">
                    <i class="fa-solid fa-graduation-cap ml-4"></i>
                    <button type="button" class="cursor-pointer font-bold ml-4">Etudiants</button>
                </div>
            </a>

            <a href="statistique.php" class="cursor-pointer block mx-4 md:mx-8">
                <div class="w-45 min-h-8 mt-4 rounded-[9px] flex items-center text-white text-sm">
                    <i class="fa-solid fa-chart-line ml-5"></i>
                    <button type="button" class="cursor-pointer font-bold ml-4">Statistiques</button>
                </div>
            </a>

             <a href="déconnexion.php" class="cursor-pointer block mx-4 md:mx-8">
                <div class="w-45 min-h-8 mt-30 rounded-[9px] flex items-center text-white text-sm">
                    <i class="fa-solid fa-circle-arrow-left ml-5"></i>
                    <button type="button" class="cursor-pointer font-bold ml-4">Se déconnecter</button>
                </div>
            </a>


        </div>

 
        <div class="min-w-0 md:ml-60">

            <div class="w-[calc(100%-15rem)] h-17 bg-white border-b border-gray-200 flex items-center justify-between px-8 fixed top-0 left-60 z-10">

               <div class="w-full max-w-[960px] h-12 flex items-center justify-between px-5  ">

                    <div class="w-80 h-7 flex flex-col justify-center  border border-gray-300 rounded-full bg-gray-100">
                        <p class="text-gray-700 text-xs ml-3"><i class="fa-solid fa-magnifying-glass text-gray-500 "></i>   Recherche un etudiant.......................</p>
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


            <main class="min-h-[calc(100vh-4rem)] bg-slate-50 p-4 sm:p-6 md:p-8 lg:p-10">

                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mt-12 mb-8">

                    <div>
                        <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                            <i class="fa-solid fa-graduation-cap text-red-700"></i>
                            <span>Gestion scolaire / Étudiants / Ajout</span>
                        </div>

                        <h2 class="text-[22px] font-bold text-slate-800">
                            Ajouter un étudiant
                        </h2>

                        <p class="text-[14px] text-gray-500 mt-1">
                            Renseignez les informations du nouvel étudiant
                        </p>
                    </div>

                   <a href="etudiant.php" class="shrink-0">
                    <div class="min-h-8 px-4 bg-red-800 hover:bg-red-700 transition rounded-lg flex items-center justify-center text-white text-[12px] mt-4 font-bold">
                        <i class="fa-solid fa-arrow-left mr-2"></i>
                        Retour à la liste
                    </div>
                </a>

                </div>


                <form action="" method="post" class="w-full bg-white border border-slate-300 rounded-2xl shadow-sm p-5 sm:p-6 md:p-8">

                    <div class="flex items-center gap-4 mb-4">

                        <div class="w-12 h-12 rounded-xl  text-red-700 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-user-graduate text-2xl"></i>
                        </div>

                        <div>
                            <h3 class="text-lg md:text-sm font-bold">
                                Informations de l'étudiant
                            </h3>

                            <p class="text-sm text-gray-500 ">
                                Les champs marqués d'une étoile sont obligatoires.
                            </p>
                        </div>

                    </div>


                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-5">

                        <div>
                            <label for="matricule" class="block text-sm font-semibold mb-2">
                                Matricule <span class="text-red-600">*</span>
                            </label>

                            <input
                                type="text"
                                id="matricule"
                                name="matricule"
                                placeholder="Ex : E221001"
                                required
                                class="w-full h-10 border border-slate-300 rounded-lg px-4 text-sm outline-none focus:border-red-700 focus:ring-2 focus:ring-red-100"
                            >
                        </div>


                        <div>
                            <label for="sexe" class="block text-sm font-semibold mb-2">
                                Sexe <span class="text-red-600">*</span>
                            </label>

                            <select
                                id="sexe"
                                name="sexe"
                                required
                                class="w-full h-10 border border-slate-300 rounded-lg px-4 text-sm bg-white outline-none focus:border-red-700 focus:ring-2 focus:ring-red-100"
                            >
                                <option value="">Sélectionner un sexe</option>
                                <option value="Homme">Homme</option>
                                <option value="Femme">Femme</option>
                            </select>
                        </div>


                        <div>
                            <label for="nom" class="block text-sm font-semibold mb-2">
                                Nom <span class="text-red-600">*</span>
                            </label>

                            <input
                                type="text"
                                id="nom"
                                name="nom"
                                placeholder="Ex : Diop"
                                required
                                class="w-full h-10 border border-slate-300 rounded-lg px-4 text-sm outline-none focus:border-red-700 focus:ring-2 focus:ring-red-100"
                            >
                        </div>


                        <div>
                            <label for="prenom" class="block text-sm font-semibold mb-2">
                                Prénom <span class="text-red-600">*</span>
                            </label>

                            <input
                                type="text"
                                id="prenom"
                                name="prenom"
                                placeholder="Ex : Amadou"
                                required
                                class="w-full h-10 border border-slate-300 rounded-lg px-4 text-sm outline-none focus:border-red-700 focus:ring-2 focus:ring-red-100"
                            >
                        </div>


                        <div>
                            <label for="date_naissance" class="block text-sm font-semibold mb-2">
                                Date de naissance <span class="text-red-600">*</span>
                            </label>

                            <input
                                type="date"
                                id="date_naissance"
                                name="date_naissance"
                                required
                                class="w-full h-10 border border-slate-300 rounded-lg px-4 text-sm bg-white outline-none focus:border-red-700 focus:ring-2 focus:ring-red-100"
                            >
                        </div>


                        <div>
                            <label for="telephone" class="block text-sm font-semibold mb-2">
                                Téléphone <span class="text-red-600">*</span>
                            </label>

                            <input
                                type="tel"
                                id="telephone"
                                name="telephone"
                                placeholder="Ex : 77 777 77 77"
                                required
                                class="w-full h-10 border border-slate-300 rounded-lg px-4 text-sm outline-none focus:border-red-700 focus:ring-2 focus:ring-red-100"
                            >
                        </div>


                        <div>
                            <label for="filiere" class="block text-sm font-semibold mb-2">
                                Filière <span class="text-red-600">*</span>
                            </label>

                            <select
                                id="filiere"
                                name="filiere"
                                required
                                class="w-full h-10 border border-slate-300 rounded-lg px-4 text-sm bg-white outline-none focus:border-red-700 focus:ring-2 focus:ring-red-100"
                            >
                                 <option value="" selected disabled>Ex : Sélectionner une filière</option>
                                <option value="Développement Web et Mobile">Développement Web et Mobile</option>
                                <option value="Réseaux et Systèmes">Réseaux et Systèmes</option>
                                <option value="Développement Mobile">Développement Mobile</option>
                                <option value="Data Science">Data Science</option>
                                <option value="UI/UX Design">UI/UX Design</option>
                                <option value="Cybersécurité">Cybersécurité</option>
                                <option value="Intelligence Artificielle & Big Data">Intelligence Artificielle & Big Data</option>
                                <!-- <option value="Marketing Digital">Marketing Digital</option> -->

                            </select>
                        </div>


                        <div>
                            <label for="classe" class="block text-sm font-semibold mb-2">
                                Classe <span class="text-red-600">*</span>
                            </label>

                            <select
                                id="classe"
                                name="classe"
                                required
                                class="w-full h-10 border border-slate-300 rounded-lg px-4 text-sm bg-white outline-none focus:border-red-700 focus:ring-2 focus:ring-red-100"
                            >
                                <option value="">Sélectionner une classe</option>
                                <option value="L1-DEVWEB">L1 - DEVWEB</option>
                                <option value="L1-REFDIG">L1 - REFDIG</option>
                                <option value="L1-MOBILE">L1 - MOBILE</option>
                                <option value="L2-DEVWEB">L2 - DEVWEB</option>
                                <option value="L2-MOBILE">L2 - MOBILE</option>
                                <option value="L3-DEVWEB">L3 - DEVWEB</option>
                                <option value="M1-MOBILE">M1 - MOBILE</option>
                                <option value="M2-DEVWEB">M2 - DEVWEB</option>
                            </select>
                        </div>


                        <div class="">
                            <label for="adresse" class="block text-sm font-semibold mb-2">
                                Adresse <span class="text-red-600">*</span>
                            </label>

                            <input
                                type="text"
                                id="adresse"
                                name="adresse"
                                placeholder="Ex : Dakar, région de Dakar"
                                required
                                class="w-full h-10 border border-slate-300 rounded-lg px-4 text-sm outline-none focus:border-red-700 focus:ring-2 focus:ring-red-100"
                            >
                        </div>

                         <div class=" mb-7">

                            <label for="niveau" class="block text-[13px] h-5 font-semibold text-gray-700 mb-2">
                                Code du niveau <span class="text-red-600">*</span>
                            </label>

                            <div class="w-full flex items-center border border-gray-400 rounded-lg px-3 h-10 bg-white ">

                                <input
                                    type="text"
                                    id="code_niveau"
                                    name="niveau"
                                    placeholder="Ex : L1, L2, L3, M1, M2"
                                    required
                                    class="w-full h-11 px-3 outline-none  text-[13px] text-gray-700">
                            </div>

                        </div> 

                    </div>


                    <div class="flex flex-col-reverse sm:flex-row sm:items-center sm:justify-between gap-3 border-t border-gray-100 mt-6 pt-6">

                        <a href="etudiant.php"
                           class="inline-flex items-center justify-center gap-2 border border-slate-400 hover:bg-gray-100 text-slate-700 px-4 py-2 rounded-lg text-sm font-semibold">
                            <i class="fa-solid fa-xmark"></i>
                            Annuler
                        </a>

                        <button
                            type="submit"
                            name="ajout"
                            class="inline-flex items-center justify-center gap-2 bg-red-800 hover:bg-red-700 text-white px-3 py-2 rounded-lg text-sm font-semibold shadow-sm"
                        >
                            <i class="fa-solid fa-plus text-xs"></i>
                            Ajouter un étudiant
                        </button>

                    </div>

                </form>

   

            </main>

        </div>

    </div>

</body>
</html>
