<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="icon" href="app/images/tab_icon.png">
    <link rel="stylesheet" href="app/css/stil.css">
    <title>Kariplast - {{title}}</title>
</head>

<body class='firstBody'>

    <nav class="navbar sticky-top navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-secondary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <img src="app/images/logo.png" alt="logo">
            <button class="navbar-toggler border" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active ms-5" aria-current="page" href="?page=acasa">Acasa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=despre_noi">Despre Noi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Produse
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="?page=usi">Usi</a></li>
                            <li><a class="dropdown-item" href="?page=geamuri">Geamuri</a></li>
                            <li><a class="dropdown-item" href="?page=feronerie">Feronerie</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Portofoliu
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="?page=case">Case</a></li>
                            <li><a class="dropdown-item" href="?page=blocuri">Blocuri</a></li>
                            <li><a class="dropdown-item" href="?page=balcoane">Balcoane</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=contact">Contact</a>
                    </li>

                </ul>
                <nav class="navbar navbar-dark bg-dark ms-auto">
                    <div class="container-fluid">
                        <button type="button" id="butonLogin" class="btn btn-primary ms-auto .bg-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Login
                        </button>
                        <button type="button" id="butonSignUp" class="btn btn-primary ms-2" data-bs-toggle="modal" data-bs-target="#exampleModalSignUp">
                            Sign-Up
                        </button>
                    </div>
                </nav>
            </div>
    </nav>


    <div class="container mt-5">
        <div class="row">
            <main>
                {{mainContent}}
            </main>
        </div>
    </div>


    <footer class="container-fluid text-light bg-dark border-bottom border-secondary border-top border-secondary">
        <div class="d-flex justify-content-around">
            <p class="col-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum id magni voluptatum,
                suscipit, laborum
                provident atque minus molestias dolor tenetur nam minima nulla vel aliquid quae pariatur doloribus
                expedita error!</p>
            <p class="col-3">Magnam itaque doloremque laborum quia voluptatum hic culpa eum quaerat non suscipit magni
                aspernatur
                officia in quisquam dolores autem reprehenderit, unde eos nobis soluta voluptas ducimus iusto molestias?
                Dolorum, maiores.</p>
            <p class="col-3">Nihil, fugit! Quidem, autem vitae reiciendis harum accusantium qui dolor quas quis magnam
                voluptates,
                doloremque obcaecati a neque vero. Sunt et blanditiis ducimus facere. Praesentium laborum quos tenetur
                minima laudantium.</p>
        </div>
    </footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="app/js/signUp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>