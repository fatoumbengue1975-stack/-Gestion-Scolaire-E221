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
    <title>Statistiques - Gestion Scolaire</title>

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
                <div class="w-42 min-h-8 ml-1  mt-4 rounded-[9px] flex items-center  text-white text-sm">
                    <i class="fa-solid fa-graduation-cap ml-4"></i>
                    <button type="button" class="cursor-pointer font-bold ml-4">Etudiants</button>
                </div>
            </a>

            <a href="statistique.php" class="cursor-pointer block mx-4 md:mx-8">
                <div class="w-45 min-h-8 mt-4 bg-orange-200 rounded-[9px] flex items-center  text-red-800 text-sm">
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
                        <p class="text-gray-700 text-xs ml-3"><i class="fa-solid fa-magnifying-glass text-gray-500 "></i>   Recherche .......................</p>
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



            <main class="min-h-screen w-246 ml-5  p-4 md:p-5 mt-20">

                <div class="mb-10">
                    <h2 class="text-[22px] md:text-2xl font-bold text-slate-800">
                        Statistiques
                    </h2>

                    <p class="text-[12px] text-gray-500 mt-1">
                        Consultez les statistiques de l'établissement.
                    </p>
                </div>


                <div class="grid grid-cols-2 sm:grid-cols-3 xl:grid-cols-6 gap-2 mb-5 ">

                    <div class="bg-white rounded-lg p-3 shadow-sm">
                        <div class="w-8 h-8 rounded-lg bg-red-100 flex items-center justify-center">
                            <i class="fa-solid fa-sliders rotate-90 text-red-700 text-sm"></i>
                        </div>
                        <p class="text-xl font-bold mt-1"><?php echo $totalfilieres; ?></p>
                        <p class="text-xs mt-1">Filières</p>
                    </div>

                    <div class="bg-white rounded-lg p-3 shadow-sm">
                        <div class="w-8 h-8 rounded-lg bg-red-100 flex items-center justify-center">
                            <i class="fa-solid fa-sliders text-red-700 text-sm"></i>
                        </div>
                        <p class="text-xl font-bold mt-1"><?php echo $totalniveaux; ?></p>
                        <p class="text-xs mt-1">Niveaux</p>
                    </div>

                    <div class="bg-white rounded-lg p-3 shadow-sm">
                        <div class="w-8 h-8 rounded-lg bg-red-100 flex items-center justify-center">
                            <i class="fa-solid fa-users text-red-700 text-sm"></i>
                        </div>
                        <p class="text-xl font-bold mt-1"><?php echo $totalclasses; ?></p>
                        <p class="text-xs mt-1">Classes</p>
                    </div>

                    <div class="bg-white rounded-lg p-3 shadow-sm">
                        <div class="w-8 h-8 rounded-lg bg-red-100 flex items-center justify-center">
                            <i class="fa-solid fa-graduation-cap text-red-700 text-sm"></i>
                        </div>
                        <p class="text-xl font-bold mt-1"><?php echo $totalEtudiants; ?></p>
                        <p class="text-xs mt-1">Étudiants</p>
                    </div>

                    <div class="bg-white rounded-lg p-3 shadow-sm">
                        <div class="w-8 h-8 rounded-lg bg-red-100 flex items-center justify-center">
                            <i class="fa-solid fa-user text-red-700 text-sm"></i>
                        </div>
                        <p class="text-xl font-bold mt-1"><?php echo $totalFemmes; ?></p>
                        <p class="text-xs mt-1">Femmes</p>
                    </div>

                    <div class="bg-white rounded-lg p-3 shadow-sm">
                        <div class="w-8 h-8 rounded-lg bg-red-100 flex items-center justify-center">
                            <i class="fa-solid fa-graduation-cap text-red-700 text-sm"></i>
                        </div>
                        <p class="text-xl font-bold mt-1"><?php echo $totalHommes; ?></p>
                        <p class="text-xs mt-1">Hommes</p>
                    </div>

                </div>


                <div class="grid grid-cols-1 xl:grid-cols-2 gap-3 mb-6">

                    <div class="bg-white rounded-lg p-3 shadow-sm min-w-0">

                        <h3 class="text-xs font-bold mb-3">
                            Répartition des étudiants par filière
                        </h3>

                        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 ml-4">

                          
<?php
$totalPourGraphique = count($_SESSION["etudiants"]);

$couleurs = [
    "#406be1",
    "#59c67f",
    "#ff6d33",
    "#ffc720",
    "#cf0000",
    "#fd76b3",
    "#0891b2"
];

$debut = 0;
?>

<div class="flex flex-col sm:flex-row items-center justify-center gap-4 ">

    <div
        class="w-38 h-38 shrink-0 rounded-full flex items-center justify-center"
        style="background: conic-gradient(
            <?php
            $segments = [];
            $debut = 0;
            $index = 0;

            foreach ($etudiantsParFiliere as $filiere => $nombre) {
                $pourcentage = $totalPourGraphique > 0
                    ? ($nombre / $totalPourGraphique) * 100
                    : 0;

                $fin = $debut + $pourcentage;

                $couleur = $couleurs[$index % count($couleurs)];

                $segments[] = "$couleur $debut% $fin%";

                $debut = $fin;
                $index++;
            }

            echo implode(", ", $segments);

            if (empty($segments)) {
                echo "#e5e7eb 0% 100%";
            }
            ?>
        );"
    >

        <div class="w-18 h-18 rounded-full bg-white flex flex-col items-center justify-center">
            <p class="font-bold text-base">
                <?php echo $totalEtudiants; ?>
            </p>
            <p class="text-[10px]">Étudiants</p>
        </div>

    </div>

                          <div class="w-full min-w-0 space-y-2 ml-2">

                               <?php
                               $index = 0;

                               foreach ($etudiantsParFiliere as $filiere => $nombre) {

                                   $pourcentage = $totalPourGraphique > 0
                                       ? round(($nombre / $totalPourGraphique) * 100, 1)
                                       : 0;

                                   $couleur = $couleurs[$index % count($couleurs)];
                               ?>

                                   <div class="flex items-center justify-between gap-2 text-[10px]">

                                       <div class="flex items-center gap-2 min-w-0">
                                           <span
                                               class="w-2 h-2 rounded-full shrink-0"
                                               style="background-color: <?php echo $couleur; ?>;"
                                           ></span>

                                           <span><?php echo htmlspecialchars($filiere); ?></span>
                                       </div>

                                       <span class="text-gray-500 shrink-0 ml-4">
                                           <?php echo $pourcentage; ?>%
                                       </span>

                                   </div>

                               <?php
                                   $index++;
                               }
                               ?>

      

                           </div>

                       </div>


                        </div> 

                    </div>


                    <div class="bg-white rounded-lg p-3 shadow-sm min-w-0">

                        <h3 class="text-xs font-bold mb-3">
                            Nombre d'étudiants par niveau
                        </h3>

                        <div class="flex h-36 ml-4">                            

                          
                        <?php
                        $maxEtudiants = 0;

                        foreach ($etudiantsParNiveau as $nombre) {
                            if ($nombre > $maxEtudiants) {
                                $maxEtudiants = $nombre;
                            }
                        }

                        $echelle = max(10, ceil($maxEtudiants / 10) * 10);

                        $niveauxAffiches = ["L1", "L2", "L3", "M1", "M2"];

                        $couleursBarres = [
                            "bg-orange-300",
                            "bg-red-300",
                            "bg-cyan-300",
                            "bg-green-300",
                            "bg-purple-300"
                        ];
                        ?>

                        <div class="flex h-36 ml-4 w-90">

                            <div class="flex flex-col justify-between text-[9px] text-gray-500 pr-2 pb-5">
                                <?php for ($i = 5; $i >= 0; $i--) { ?>
                                    <div><?php echo round($echelle * $i / 5); ?></div>
                                <?php } ?>
                            </div>

                            <div class="flex-1 min-w-0 flex flex-col">

                                <div
                                    class="flex-1 flex items-end justify-around border-b border-gray-300"
                                    style="background-image: repeating-linear-gradient(to bottom, #e5e7eb 0px, #e5e7eb 1px, transparent 1px, transparent 20%);"
                                >

                                    <?php foreach ($niveauxAffiches as $index => $niveau) {

                                        $nombre = $etudiantsParNiveau[$niveau] ?? 0;

                                        $hauteur = ($nombre / $echelle) * 100;
                                    ?>

                                        <div class="flex flex-col items-center justify-end h-full w-7 sm:w-9">

                                            <span class="text-[9px] text-gray-600 mb-1">
                                                <?php echo $nombre; ?>
                                            </span>

                                            <div
                                                class="w-full rounded-t <?php echo $couleursBarres[$index]; ?>"
                                                style="height: <?php echo $hauteur; ?>%;"
                                            ></div>

                                        </div>

                                    <?php } ?>

                                </div>

                                <div class="flex justify-around text-[9px] mt-1">
                                    <?php foreach ($niveauxAffiches as $niveau) { ?>
                                        <span><?php echo $niveau; ?></span>
                                    <?php } ?>
                                </div>

                            </div>

                        </div>


                        </div>

                    </div>

                </div>


                <div class="bg-white rounded-lg shadow-sm p-3">

                    <h3 class="text-sm font-bold mb-3">
                        Classe ayant le plus d'étudiants
                    </h3>

                    <div class="w-full overflow-x-auto">

                        <table class="w-full min-w-[600px] text-xs text-left ">

                            <thead class="bg-red-100 text-red-700">
                                <tr>
                                    <th class="px-3 py-2 font-semibold rounded-l-lg">Rang</th>
                                    <th class="px-3 py-2 font-semibold">Classe</th>
                                    <th class="px-3 py-2 font-semibold">Filière</th>
                                    <th class="px-3 py-2 font-semibold">Niveau</th>
                                    <th class="px-3 py-2 font-semibold rounded-r-lg">Nombre d'étudiants</th>
                                </tr>
                            </thead>

                            
<?php
$rang = 1;

foreach ($topClasses as $nomClasse => $infos) {
?>
    <tr class="border-b border-gray-100 hover:bg-gray-50">

        <td class="px-3 py-2">
            <span class="w-5 h-5 rounded-full bg-red-200 mt-1 text-red-700 flex items-center justify-center text-[10px] font-bold">
                <?php echo $rang; ?>
            </span>
        </td>

        <td class="px-3 py-2 font-medium">
            <?php echo htmlspecialchars($nomClasse); ?>
        </td>

        <td class="px-3 py-2">
            <?php echo htmlspecialchars($infos["filiere"]); ?>
        </td>

        <td class="px-3 py-2">
            <?php echo htmlspecialchars($infos["niveau"]); ?>
        </td>

        <td class="px-3 py-2 font-bold">
            <?php echo $infos["nombre"]; ?>
        </td>

    </tr>
<?php
    $rang++;
}
?>

<?php if (empty($topClasses)) { ?>
    <tr>
        <td colspan="5" class="px-3 py-4 text-center text-gray-500">
            Aucune classe avec des étudiants enregistrés.
        </td>
    </tr>
<?php } ?>


                        </table>

                    </div>

                </div>


            </main>

        </div>

    </div>

</body>
</html>
