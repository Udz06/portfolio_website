<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Portfolio Website</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            border: none;
            outline: none;
            font-family: 'Poppins', sans-serif;
        }

        html {
            font-size: 62.5%;
        }

        body {
            width: 100%;
            height: 100vh;
            overflow-x: hidden;
            background-color: black;
            color: white;
        }

        header {
            margin-top: 20px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 1rem 9%;
            background-color: transparent;
            filter: drop-shadow(10px);
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
        }

        .logo {
            font-size: 3rem;
            color: #b74b4b;
            font-weight: 800;
            cursor: pointer;
            transition: 0.5s ease;
        }

        .logo:hover {
            transform: scale(1.1);
        }

        nav {
            display: flex;
        }

        nav a {
            font-size: 1.8rem;
            color: white;
            margin-left: 4rem;
            font-weight: 500;
            transition: 0.3s ease;
            border-bottom: 3px solid transparent;
        }

        nav a:hover,
        nav a.active {
            color: #b74b4b;
            border-bottom: 3px solid #b74b4b;
        }

        @media (max-width: 995px) {
            nav {
                position: absolute;
                display: none;
                top: 0;
                right: 0;
                width: 40%;
                border-left: 3px solid #b74b4b;
                border-bottom: 3px solid #b74b4b;
                border-bottom-left-radius: 2rem;
                padding: 1rem;
                background-color: #161616;
                border-top: 0.1rem solid rgba(0,0,0,0.1);
            }

            nav.active {
                display: block;
            }

            nav a {
                display: block;
                font-size: 2rem;
                margin: 3rem 0;
            }

            nav a:hover,
            nav a.active {
                padding: 1rem;
                border-radius: 0.5rem;
                border-bottom: 0.5rem solid #b74b4b;
            }
        }

        section {
            min-height: 100vh;
            padding: 5rem 9% 5rem;
        }

        @media (max-width: 1000px) {
            section {
                padding: 5rem 4%;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="#" class="logo">Justin</a>
        <nav>
            <a href="?page=home" class="<?php echo (!isset($_GET['page']) || $_GET['page'] === 'home') ? 'active' : ''; ?>">Home</a>
            <a href="?page=project" class="<?php echo (isset($_GET['page']) && $_GET['page'] === 'project') ? 'active' : ''; ?>">Project</a>
            <a href="?page=skills" class="<?php echo (isset($_GET['page']) && $_GET['page'] === 'about') ? 'active' : ''; ?>">about</a>
        </nav>
    </header>

    <section id="content">
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
        switch ($page) {
            case 'home':
                include('home.php');
                break;
            case 'project':
                include('project.php');
                break;
            case 'about':
            default:
                include('about.php');
                break;
        }
        ?>
    </section>
</body>
</html>
