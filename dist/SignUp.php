<?php
include'db_conn.php';
?> <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <link rel="stylesheet" href="all.min.css">
        <link rel="stylesheet" href="output.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body class=" flex justify-center ">
        <div class="main-container mt-24">
            <div class="card card2 bg-gray-900 rounded-3xl ">
                <div class="flex flex-col gap-2 relative top-7">
                    <h1 class="text-3xl text-center text-white ">
                        Sign Up
                    </h1>
                    <p class="text-white text-center">
                        create a free account with your email
                    </p>
                </div>
                <form class="flex items-center text-white flex-col gap-5 mt-14" action="signUpCode.php" method="POST">
                    <input class="bg-gray-900 border border-gray-500 text-center w-80 h-10 rounded-xl" required type="text" name="username" id="" placeholder="Username">
                    <input class="bg-gray-900 border border-gray-500 text-center w-80 h-10 rounded-xl" required type="email" name="email" id="" placeholder="Email">
                    <input class="bg-gray-900 border border-gray-500 text-center w-80 h-10 rounded-xl" required type="password" name="mdp" id="" placeholder="Password">
                    <!-- <input class="bg-gray-900 border border-gray-500 text-center w-80 h-10 rounded-xl" required type="password" name="" id="" placeholder="Confirm the Password"> -->
                    <input class="bg-blue-700 border border-gray-500 text-center w-40 h-10 rounded-xl cursor-pointer" required type="submit" name="signup" id="" value="Sign Up">
                    <input type="hidden" name="SignUp" value="true">
                </form>
                <div class="flex justify-center mt-3">
                    <h1 class="text-white">You have an account ? 
                        <a class="text-blue-500 " href="index.php">
                            Sign in
                        </a>
                    </h1>
                </div>
            </div>
        </div>
    </body>
    </html>