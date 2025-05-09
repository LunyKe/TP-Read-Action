<?php

ob_start();

include("./partials/header.php");
include "./config/pdo.php";

if (($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST["email"]) && isset($_POST["password"])) {
    if (empty($_POST["email"]) || empty($_POST["password"])) {
        echo "Veuillez remplir tous les champs";
    } else {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);
        $result = $stmt->fetch();

        if ($result) {
            $password_hash = $result["mot_de_passe"];
            if (password_verify($password, $password_hash)) {
                session_start();
                $_SESSION = $result;
                header("Location: librairie.php");
                ob_flush();
            } else {
                echo "Mot de passe incorrect";


            }
        }
    }
}
?>

<img src="https://thebestmods.com/wp-content/uploads/2023/06/Underground_Library_in_Minecraft-transformed.jpeg"alt="" class="top-0 bg-cover mt-100 fixed w-full h-full -z-50">

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 ">
    <div class="flex-col justify-center border bg-white w-96 mx-auto p-8 rounded-lg shadow-lg">

        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto"
                src="https://th.bing.com/th/id/OIP.yIrm_GQ-TJ1Ta9S_oPyS4AAAAA?rs=1&pid=ImgDetMain" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Sign in to your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="#" method="POST">
                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input type="email" name="email" id="email" autocomplete="email" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 border">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input type="password" name="password" id="password" autocomplete="current-password" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 border">
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-amber-950 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                        in</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm/6 text-gray-500">
                Don't have account?
                <a href="signup.php" class="font-semibold text-indigo-600 hover:text-indigo-500">Create here</a>
            </p>
        </div>
    </div>
</div>

<?php

include "./partials/footer.php";

?>

