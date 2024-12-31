<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bs/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }
        h4 {
            text-align: center;
        }

        .navbar-toggler {
            position: absolute;
            right: 0;
        }

         .container {
            width: 40%;
            margin: 50px auto;
            border-radius: 8px;
        }
        h1 {
            font-size: 2.5em;
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            margin-bottom: 15px;
        }
        .highlight {
            font-weight: bold;
            text-decoration: underline;
            color: #0073e6;
        }
        hr {
            border: 0;
            height: 1px;
            background: #ccc;
            margin: 30px 0;
        }
        .footer {
            text-align: center;
            font-size: 0.9em;
            color: #666;
        }
        .footer a {
            color: #0073e6;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
    .container {
        width: 80%;
    }

    h1 {
        font-size: 2em;
    }

    p {
        font-size: 0.9em;
    }

    .footer {
        font-size: 0.8em;
    }

    .navbar-nav a {
        font-size: 0.9em;
    }
}

.container{
    width: 40%;
    margin: 30px auto;
}
.header-content{
    display: flex;
}
.header-content a{
    text-decoration: none;
    color:black;
}

.header-content a:hover{
    color: #333;;
}

.bahasa {
    margin:0 20px 0 0;
    color: grey;
}
.tanggal{
    margin: 0 0 0 45px;
}
.tanggal p{
    color:grey;
}

@media (max-width: 768px) {
    .container {
        width: 80%;
    }
}
    </style>
</head>
<body>
<!-- Header untuk "Jovanka" -->
<div class="container-header">
    <div class="name-jovan">
        <h4>Jovanka</h4>
    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid d-flex justify-content-between position-relative">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="d-flex justify-content-center flex-grow-1">
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
          <div class="navbar-nav text-center">
            <a class="nav-link active" aria-current="page" href="index.php">About</a>
            <a class="nav-link" href="penghargaan.php">Achievement</a>
            <a class="nav-link" href="project.php">Project</a>
            <a class="nav-link" href="blog.php">Blog</a>
          </div>
        </div>
      </div>
    </nav>
</div>

<div class="container">
    <div class="box">
        <div class="header-content">
            <h5 class="bahasa">EN</h5>
            <a href="journey-2024.php"><h5>Roadmap to 2024, A Journey to My Best Self</h5></a>
        </div> 

        <div class="tanggal">
            <p>31 Desember 2024</p>
        </div> 
    </div>

    <div class="box">
        <div class="header-content">
            <h5 class="bahasa">EN </h5>
            <a href="donation.php"><h5>How Daily Donations Transformed My Life</h5></a>
        </div> 

        <div class="tanggal">
            <p>31 Desember 2024</p>
        </div> 
    </div>
</div>



<script src="bs/js/bootstrap.bundle.min.js"></script>
</body>
</html>