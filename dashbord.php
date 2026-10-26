
<?php
session_start();

if (!isset($_SESSION["connecte"]) || $_SESSION["connecte"] !== true) {
    header("Location: connexion.php");
    exit;
}

require_once 'Data.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Gestion Scolaire</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css">
</head>

<body class="bg-gray-100 m-0">

    <div class="w-full min-h-screen">

         <aside id="sidebar"
            class="w-60 shrink-0 bg-red-800 h-screen fixed left-0 top-0 overflow-y-auto overflow-x-hidden z-40 transition-transform duration-300 -translate-x-full md:translate-x-0">

            <div class="w-45 h-15 mt-4 ml-9 flex justify-between">
                <div class="w-12 h-12 mt-1 bg-[url(images.jpg)] bg-cover bg-top rounded-xl shrink-0"></div>

                <div class="w-33 max-w-full min-h-[60px] ml-4">
                    <h1 class="text-white text-xl font-bold mt-1">ECOLE 221</h1>
                    <p class="text-orange-200 font-bold text-[10px]">GESTION SCOLAIRE</p>
                </div>
            </div>

            <a href="dashbord.php" class="cursor-pointer block mx-4 md:mx-8">
                <div class="w-42 min-h-8 ml-1 bg-orange-200 mt-12 rounded-[9px] flex items-center justify-center text-red-800 text-sm">
                    <i class="fa-solid fa-house" style="color: rgb(148, 3, 3);"></i>
                    <span class="font-bold ml-3">Tableau de bord</span>
                </div>
            </a>

            <a href="filiére.php" class="cursor-pointer block mx-4 md:mx-8">
                <div class="w-45 min-h-8 mt-4 rounded-[9px] flex items-center text-white text-sm">
                    <i class="fa-solid fa-sliders ml-5 rotate-90"></i>
                    <span class="font-bold ml-4">Filiéres</span>
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
                <div class="w-45 min-h-8 mt-30 mb-6 rounded-[9px] flex items-center text-white text-sm">
                    <i class="fa-solid fa-circle-arrow-left ml-5"></i>
                    <span class="font-bold ml-4">Se déconnecter</span>
                </div>
            </a>

        </aside>

        <div id="overlay" class="hidden fixed inset-0 bg-black/40 z-30 md:hidden"></div>

        <div class="w-full min-w-0 min-h-screen md:ml-60 md:w-[calc(100%-15rem)]">

            <header class="w-full md:w-[calc(100%-15rem)] h-17 bg-white border-b border-gray-200 flex items-center justify-between px-3 md:px-8 fixed top-0 left-0 md:left-60 z-20">

                <div class="flex items-center gap-3 min-w-0">

                    <button id="menuBurger" type="button"
                        class="md:hidden shrink-0 flex items-center justify-center w-10 h-10 text-red-800 text-xl"
                        aria-label="Ouvrir le menu"
                        aria-expanded="false">
                        <i class="fa-solid fa-bars"></i>
                    </button>

                    <div class="min-w-0">
                        <p class="text-base md:text-[20px] font-bold text-gray-800">Tableau de bord</p>
                        <p class="text-[11px] md:text-[12px] text-gray-800">Gestion scolaire</p>
                    </div>

                </div>

                <div class="flex items-center gap-2 md:gap-3 shrink-0">

                    <div class="w-8 md:w-10 h-10 flex items-center justify-center relative">
                        <i class="fa-solid fa-bell text-[16px] md:text-[18px] text-slate-950"></i>
                        <span class="absolute top-1 right-0 bg-red-600 text-white rounded-full text-[9px] w-3 h-3 flex items-center justify-center">3</span>
                    </div>

                    <div class="w-9 md:w-11 h-9 md:h-11 shrink-0 bg-[url(profil.jpg)] bg-cover bg-top rounded-full"></div>

                    <div class="hidden sm:block min-w-0">
                        <p class="text-[13px] font-bold text-gray-700">Abdou Diop</p>
                        <p class="text-[12px] text-gray-700">Administrateur</p>
                    </div>

                    <div class="hidden md:flex w-6 h-10 items-center justify-center">
                        <i class="fa-solid fa-check text-slate-950"></i>
                    </div>

                </div>

            </header>

            <main class="pt-24 px-4 sm:px-6 lg:px-8 pb-6">

                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">

                    <div>
                        <p class="text-[15px] font-bold text-gray-800">Bonjour, Abdou Diop</p>
                        <p class="text-[13px] text-gray-800 mt-1">
                            Voici un aperçu en temps réel de la gestion scolaire
                        </p>
                    </div>

                    <div>
                        <div class="w-fit min-h-8 px-4 py-2 shadow-sm bg-orange-200 rounded-[15px] flex items-center justify-center text-red-800 text-sm">
                            <span class="font-bold">Année 2026 - 2027</span>
                        </div>
                    </div>

                </div>

                <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-3 sm:gap-4 mt-7">

                    <div class="min-w-0 h-28 rounded-xl bg-white border border-gray-200 shadow-sm p-3">
                        <div class="w-10 h-10 rounded-[10px] bg-red-100 flex items-center justify-center">
                            <i class="fa-solid fa-sliders rotate-90" style="color: rgb(208, 25, 25);"></i>
                        </div>
                        <div class="mt-1 flex flex-wrap items-baseline gap-x-2">
                            <p class="font-bold text-gray-700 text-xl"><?php echo $totalfilieres; ?></p>
                            <p class="text-sm text-gray-700">Filières</p>
                        </div>
                        <p class="text-xs mt-1 text-green-500">Toutes actives</p>
                    </div>

                    <div class="min-w-0 h-28 rounded-xl bg-white border border-gray-200 shadow-sm p-3">
                        <div class="w-10 h-10 rounded-[10px] bg-red-100 flex items-center justify-center">
                            <i class="fa-solid fa-sliders" style="color: rgb(208, 25, 25);"></i>
                        </div>
                        <div class="mt-1 flex flex-wrap items-baseline gap-x-2">
                            <p class="font-bold text-gray-700 text-xl"><?php echo $totalniveaux; ?></p>
                            <p class="text-sm text-gray-700">Niveaux</p>
                        </div>
                        <p class="text-xs mt-1 text-green-500">De L1 à M2</p>
                    </div>

                    <div class="min-w-0 28 rounded-xl bg-white border border-gray-200 shadow-sm p-3">
                        <div class="w-10 h-10 rounded-[10px] bg-red-100 flex items-center justify-center">
                            <i class="fa-solid fa-users" style="color: rgb(208, 25, 25);"></i>
                        </div>
                        <div class="mt-1 flex flex-wrap items-baseline gap-x-2">
                            <p class="font-bold text-gray-700 text-xl"><?php echo $totalclasses; ?></p>
                            <p class="text-sm text-gray-700">Classes</p>
                        </div>
                        <p class="text-xs mt-1 text-green-500">Salles assignées</p>
                    </div>

                    <div class="min-w-0 h-28 rounded-xl bg-white border border-gray-200 shadow-sm p-3">
                        <div class="w-10 h-10 rounded-[10px] bg-red-100 flex items-center justify-center">
                            <i class="fa-solid fa-graduation-cap" style="color: rgb(208, 25, 25);"></i>
                        </div>
                        <div class="mt-1 flex flex-wrap items-baseline gap-x-2">
                            <p class="font-bold text-gray-700 text-xl"><?php echo $totalEtudiants; ?></p>
                            <p class="text-sm text-gray-700">Étudiants</p>
                        </div>
                        <p class="text-xs mt-1 text-green-500">Inscrits confirmés</p>
                    </div>

                    <div class="min-w-0 28 rounded-xl bg-white border border-gray-200 shadow-sm p-3">
                        <div class="w-10 h-10 rounded-[10px] bg-red-100 flex items-center justify-center">
                            <i class="fa-solid fa-graduation-cap" style="color: rgb(208, 25, 25);"></i>
                        </div>
                        <div class="mt-1 flex flex-wrap items-baseline gap-x-2">
                            <p class="font-bold text-gray-700 text-xl"><?php echo $totalFemmes; ?></p>
                            <p class="text-sm text-gray-700">Femmes</p>
                        </div>
                        <p class="text-xs mt-1 text-green-500">Effectif féminin</p>
                    </div>

                    <div class="min-w-0 28 rounded-xl bg-white border border-gray-200 shadow-sm p-3">
                        <div class="w-10 h-10 rounded-[10px] bg-red-100 flex items-center justify-center">
                            <i class="fa-solid fa-graduation-cap" style="color: rgb(208, 25, 25);"></i>
                        </div>
                        <div class="mt-1 flex flex-wrap items-baseline gap-x-2">
                            <p class="font-bold text-gray-700 text-xl"><?php echo $totalHommes; ?></p>
                            <p class="text-sm text-gray-700">Hommes</p>
                        </div>
                        <p class="text-xs mt-1 text-green-500">Effectif masculin</p>
                    </div>

                </div>

                <div class="w-full min-w-0 bg-white rounded-xl shadow-sm border border-gray-200 mt-6 mb-6">

                    <div class="min-h-13 flex items-center justify-between gap-3 px-4 sm:px-5 py-3">

                        <p class="text-sm font-bold text-gray-700">
                            Derniers étudiants inscrits
                        </p>

                        <a href="etudiant.php" class="shrink-0 text-red-700 text-xs flex items-center gap-2">
                            <span>Voir tout</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                    <div class="w-full overflow-x-auto px-3 pb-3">

                        <table class="w-full min-w-[650px] text-left border-collapse">

                            <thead>
                                <tr class="bg-red-100 text-red-800 text-xs">
                                    <th class="font-medium py-3 px-2 rounded-l-md">Prénom et nom</th>
                                    <th class="font-medium py-3 px-2">Matricule</th>
                                    <th class="font-medium py-3 px-2">Filière</th>
                                    <th class="font-medium py-3 px-2">Niveau</th>
                                    <th class="font-medium py-3 px-2">Classe</th>
                                    <th class="font-medium py-3 px-2 rounded-r-md">Téléphone</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($derniersEtudiants as $etudiant) { ?>
                                    <tr class="border-b border-gray-100 hover:bg-gray-50">

                                        <td class="px-3 py-4 text-gray-700 text-[13px]">
                                            <?php
                                            echo htmlspecialchars(
                                                $etudiant["prenom"] . " " . $etudiant["nom"]
                                            );
                                            ?>
                                        </td>

                                        <td class="py-2 px-3 text-center text-gray-700 text-[13px]">
                                            <?php echo htmlspecialchars($etudiant["matricule"]); ?>
                                        </td>

                                        <td class="px-3 py-2 text-gray-700 text-[13px]">
                                            <?php echo htmlspecialchars($etudiant["filiere"]); ?>
                                        </td>

                                        <td class="px-3 py-2 text-gray-700 text-[13px]">
                                            <?php echo htmlspecialchars($etudiant["niveau"]); ?>
                                        </td>

                                        <td class="px-3 py-2 text-gray-700 text-[13px]">
                                            <?php echo htmlspecialchars($etudiant["classe"]); ?>
                                        </td>

                                        <td class="px-3 py-2 text-gray-700 text-[13px]">
                                            <?php
                                            echo isset($etudiant["telephone"])
                                                ? htmlspecialchars($etudiant["telephone"])
                                                : "Non renseignée";
                                            ?>
                                        </td>

                                    </tr>
                                <?php } ?>
                            </tbody>

                        </table>

                    </div>

                </div>

            </main>

        </div>

    </div>

    <script>
        const menuBurger = document.getElementById("menuBurger");
        const sidebar = document.getElementById("sidebar");
        const overlay = document.getElementById("overlay");

        function ouvrirFermerMenu() {
            sidebar.classList.toggle("-translate-x-full");
            overlay.classList.toggle("hidden");

            const menuOuvert = !sidebar.classList.contains("-translate-x-full");

            menuBurger.setAttribute("aria-expanded", menuOuvert);
            menuBurger.setAttribute(
                "aria-label",
                menuOuvert ? "Fermer le menu" : "Ouvrir le menu"
            );

            menuBurger.innerHTML = menuOuvert
                ? '<i class="fa-solid fa-xmark"></i>'
                : '<i class="fa-solid fa-bars"></i>';
        }

        menuBurger.addEventListener("click", ouvrirFermerMenu);
        overlay.addEventListener("click", ouvrirFermerMenu);
    </script>

</body>
</html>
