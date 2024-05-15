<?php
include'db_conn.php';
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign In</title>
        <link rel="stylesheet" href="all.min.css">
        <link rel="stylesheet" href="output.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="flex justify-center">
        <div class="main-container mt-24">

            <div class="card bg-gray-900 rounded-3xl">

                <div class="flex flex-col gap-2 relative top-7">
                    <h1 class="text-3xl text-center text-white ">
                        Sign in
                    </h1>
                </div>

                <form class="flex items-center text-white flex-col gap-2 mt-14" action="signIN.php" method="POST">
                    <label class="my-text" for="">Username</label>
                    <input class="bg-gray-900 border border-gray-500 text-center w-80 h-10 rounded-xl" required type="text" name="username" id="">
                    <label class="my-text" for="">Password</label>
                    <input class="bg-gray-900 border border-gray-500 text-center w-80 h-10 rounded-xl" required type="password" name="mdp" id="">
                    <a class="link-txt" href="">forgot password ?</a>
                    <input class="bg-blue-700  border border-gray-500 text-center w-40 h-10 rounded-xl cursor-pointer" required type="submit"  id="" value="Sign in">
                    <input type="hidden" name="signin" value="true">
                </form>
                <h1 class="c-txt text-center mt-5 ">Login with Social media accounts</h1>
                <div class="mt-5 icons text-2xl flex justify-center  text-white">
                    <a href="">
                        <i class="fa-brands fa-google"></i>
                    </a>
                    <a href="">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="">
                        <i class="fa-brands fa-github"></i>
                    </a>
                    
                    

                </div>

                <div class="flex justify-center mt-3">
                    <h1 class="text-white">Don't you have an account ? 
                        <a class="text-blue-500 " href="SignUp.php">
                            Sign Up
                        </a>
                    </h1>
                </div>
            </div>
            


        </div>
    </body>
    </html>