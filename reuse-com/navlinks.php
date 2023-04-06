<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link click-scroll nav-link-ltr" id="navbarLightDropdownMenuLink"
                            href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll nav-link-ltr" id="navbarLightDropdownMenuLink"
                            href="Gallery.php">Gallery</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link click-scroll nav-link-ltr " href="#" id="navbarLightDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Deparment</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="bsc.php">BSC </a></li>
                            <li><a class="dropdown-item" href="bcom.php">B.com</a></li>
                            <li><a class="dropdown-item" href="ba.php">BA</a></li>
                          
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>