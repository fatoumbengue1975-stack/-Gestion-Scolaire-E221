<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $mot_de_passe = $_POST["mot_de_passe"];

    if ($email == "secretariat@ecole221.sn" && $mot_de_passe == "Ecole221!") {

        $_SESSION["connecte"] = true;

        header("Location: dashbord.php");
        exit;

    } else {
        echo "E-mail ou mot de passe incorrect";
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion Gestion Scolaire</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css">
</head>

<body class="bg-gray-200">

    <div class="w-[95%] max-w-[800px] min-h-[520px] bg-white rounded-2xl shadow flex flex-col md:flex-row mx-auto mt-4 md:mt-5 mb-4 overflow-hidden">

        <div class="w-full md:w-[49%] min-h-[230px] md:min-h-[520px] bg-red-800 rounded-tr-[50%] md:rounded-tr-[50%] rounded-bl-[25%] rounded-tl-[3%] flex items-center justify-center">

            <div class="w-50 h-15   flex items-center justify-center md:mt-12">
                <div class="w-15 h-14 mt-1 bg-[url(images.jpg)] bg-cover bg-top rounded-xl"></div>

                <div class="w-33 h-15 ml-4">
                    <h1 class="text-white text-2xl font-bold mt-1">ECOLE 221</h1>
                    <p class="text-white text-xs mt-1">GESTION SCOLAIRE</p>
                </div>
            </div>

        </div>

        <div class="w-full md:w-[51%] bg-white md:ml-1 rounded-r-[3%] pb-5">

            <div class="w-full min-h-[108px] flex justify-between">

                <div class="w-[65%] min-h-20 mt-8 md:mt-13 ml-5">
                    <p class="text-red-800 ml-3 text-sm">ECOLE 211</p>

                    <h1 class="text-2xl ml-3 mt-2 font-bold text-bleu-800">Bienvenue !</h1>
                </div>

                <div class="w-[35%] h-25 bg-white rounded-bl-[100%] rounded-tr-[13%] md:bg-red-800"></div>

            </div>

            <p class="text-xs mx-6 md:ml-8  text-bleu-800">
                Connectez-vous à votre espace de gestion scolaire.
            </p>

            <div class="w-auto mx-6 md:mx-8 mt-8 md:mt-10">

                <form action="connexion.php" method="POST">

                    <label for="email" class="text-sm font-semibold text-bleu-800">Adress e-mail</label>
                    <br>

                    <div class="w-full min-h-8 border border-bleu-800 rounded-sm text-xs text-gray-700 mt-4 flex items-center">
                        <i class="fa-regular fa-envelope ml-3 shrink-0" style="color: rgb(95, 96, 99);"></i>

                        <input type="email" name="email" id="email" placeholder=" mailto:exemple@ecole221.sn " class="w-full min-w-0 outline-none px-2 bg-transparent">
                    </div>

                    <br>

                    <label for="mot-de-passe" class="text-sm font-semibold text-bleu-800">Mot de passe</label>
                    <br>

                    <div class="w-full min-h-8 border border-bleu-800 rounded-sm text-xs text-gray-700 mt-4 flex items-center">
                        <i class="fa-solid fa-lock ml-3 shrink-0" style="color: rgb(95, 96, 99);"></i>

                        <input type="text" name="mot_de_passe" id="mot-de-passe" placeholder="••••••••" class="flex-1 min-w-0 outline-none px-2 bg-transparent">

                        <i class="fa-solid fa-eye mr-3 shrink-0" style="color: rgb(95, 96, 99);"></i>
                    </div>


                      <div class="w-full mt-4 min-h-5 flex flex-wrap items-center justify-between gap-2">

                    <div class="flex items-center">
                        <div class="w-4 h-4 border border2-bleu-800 rounded-sm shrink-0"></div>

                        <div class="text-bleu-800 text-xs ml-2">
                            <p>Se souvenir de moi</p>
                        </div>
                    </div>

                    <div class="text-red-800 text-xs font-bold">
                        <p>Mot de passe oublier ?</p>
                    </div>

                </div>

                    <div class="w-full min-h-8 bg-red-800 mt-4 rounded-sm flex items-center justify-center text-white text-sm">
                        <button type="submit">Se connecter</button>
                        <i class="fa-solid fa-arrow-right ml-2 mt-1" style="color: rgb(255, 255, 255);"></i>
                    </div>

                </form>

              


           

                <div class="w-full mt-8 border border-gray-300"></div>

                <div class="w-full min-h-4 mt-4 text-xs text-gray-400">
                    <p>
                        <i class="fa-solid fa-lock text-xs ml-1 md:ml-4" style="color: rgb(127, 127, 123);"></i>
                        Accès réservé au personnel autorisé de l’École 221.
                    </p>
                </div>

            </div>
        </div>

    </div>

</body>
</html>
