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
    <title>Etudiants - Gestion Scolaire</title>

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

        <div class="w-[calc(100%-15rem)] ml-60 min-w-0 min-h-screen">

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

            <div class="w-full px-4 md:px-8 lg:px-10 mt-25 pb-10">

                <div class="w-full flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-12    ">

                    <div>
                        <h2 class="text-[22px] font-bold text-gray-800">
                            Etudiants
                        </h2>

                        <p class="text-[12px] text-gray-600">
                            Gérez les différents étudiants de l'établissement.
                        </p>
                    </div>

                    <a href="ajoutetudiant.php" class="cursor-pointer">
                    <div class="min-h-8 px-3 bg-red-800 hover:bg-red-700 rounded-lg flex items-center justify-center text-white text-sm">
                        <i class="fa-solid fa-plus mr-2 text-[10px]"></i>
                        <button class="cursor-pointer font-bold text-[12px]">Ajouter un étudiant</button>
                    </div>
                </a>

                </div>

                <div class="w-full bg-white rounded-xl shadow-sm p-4 mt-5 md:p-5 overflow-hidden">

                    <div class="w-full overflow-x-auto">

                        <table class="w-full min-w-[900px] text-left">

                            <thead>
                                <tr class="bg-orange-100 text-red-800 text-sm">

                                    <th class="font-medium px-3 py-3 rounded-l-lg">Matricule</th>
                                    <th class="font-medium px-3 py-3">Nom</th>
                                    <th class="font-medium px-3 py-3">Prénom</th>
                                    <th class="font-medium px-3 py-3">Sexe</th>
                                    <th class="font-medium px-3 py-3">Classe</th>
                                    <th class="font-medium px-3 py-3">Filière</th>
                                    <th class="font-medium px-3 py-3">Niveau</th>
                                    <th class="font-medium px-3 py-3">Téléphone</th>
                                    <th class="font-medium px-3 py-3 text-center rounded-r-lg">Actions </th>

                                </tr>
                            </thead>

                            <tbody class="text-gray-800 text-xs">

    <?php foreach ($_SESSION["etudiants"] as $etudiant) { ?>

        <tr class="border-b border-gray-100 hover:bg-gray-50">

            <td class="px-3 py-4">
                <?php echo htmlspecialchars($etudiant["matricule"]); ?>
            </td>

            <td class="px-3 py-4">
                <?php echo htmlspecialchars($etudiant["nom"]); ?>
            </td>

            <td class="px-3 py-4">
                <?php echo htmlspecialchars($etudiant["prenom"]); ?>
            </td>

          <td class="px-3 py-4">
            <?php
            if ($etudiant["sexe"] == "Homme") {
                 echo '<span class="bg-blue-200 text-blue-700 px-2.5 h-10 rounded-full">';
             } else {
                 echo '<span class="bg-pink-200 text-pink-700 px-2.5 h-10 rounded-full">';
            }

            echo htmlspecialchars($etudiant["sexe"]);
              echo '</span>';
            ?>
         </td>

            <td class="px-3 py-4">
                <?php echo htmlspecialchars($etudiant["classe"]); ?>
            </td>

            <td class="px-3 py-4">
                <?php echo htmlspecialchars($etudiant["filiere"]); ?>
            </td>

            <td class="px-3 py-4">
                <?php echo htmlspecialchars($etudiant["niveau"]); ?>
            </td>

            <td class="px-3 py-4">
                <?php echo htmlspecialchars($etudiant["telephone"]); ?>
            </td>

            

            <td class="px-4 py-4">
    <div class="flex items-center justify-center gap-3">

        <a href="details_etudiant.php?matricule=<?= $etudiant['matricule'] ?>"
           class="text-blue-600  w-6 h-6 rounded-sm bg-blue-200"
           title="Voir les détails">
            <i class="fa-solid fa-eye ml-1.5 mt-1.5 text-[10px]"></i>
        </a>

        <a href="modifier_etudiant.php?matricule=<?= $etudiant['matricule'] ?>"
           class="w-6 h-6 rounded-sm border border-2-gray-400"
           title="Modifier">
            <i class="fa-solid fa-pen text-[10px] ml-1 mt-1.5 "></i>
        </a>

        <a href="supprimer_etudiant.php?matricule=<?= $etudiant['matricule'] ?>"
           class="text-red-600  w-6 h-6 rounded-sm bg-red-200"
           title="Supprimer">
            <i class="fa-solid fa-trash text-[10px] ml-1.5 mt-1.5"></i>
        </a>

    </div>
</td>
        </tr>


        



    <?php } ?>

</tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>
</html>
