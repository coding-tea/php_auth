<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud application</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        .content{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .footer{
            font-size: 15px;
            padding: 20px 0;
            width: 100%;
            background-color: #f8f9fa;
            color:blank;
            text-align: center;
        }
        .footer a{
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 1px;
        }
        .cta{
            font-size: 30px;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .navbar{
            padding: 15px 200px;
        }
    </style>

</head>
<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">auth app</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Join us
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/php_crud_app/auth/login.php">login</a></li>
                    <li><a class="dropdown-item" href="/php_crud_app/auth/register.php">register</a></li>
                    <li><a class="dropdown-item" href="/php_crud_app/auth/logout.php">logout</a></li>
                </ul>
                </li>

            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>

    <div class="content">