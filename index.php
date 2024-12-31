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
        <h1>Hi, Jovanka here!</h1>
        <p>
            I am Jovanka Alexandro,  a bachelor of computer science student 
        </p>
        <p>
            My passion for software lies with dreaming up ideas and making them come true with elegant interfaces. I take great care in experience, architecture, and code quality of the things I build.
        </p>
        <p>
            I am also an open-source enthusiast and maintainer. You can see <span class="highlight">list of my projects here</span>. I love how collaboration and knowledge sharing happens through open-source, and I am happy to see what I do could eventually feedback to the community and industry.
        </p>
        <p>
            Outside of programming, I enjoy reading books. I love the pleasure and excitement of gaining new knowledge other than programming from the books I read.
        </p>
        <hr>
        <p>
            If you like my work, consider sponsoring me on <a href="#" class="highlight">GitHub Sponsor</a> to keep it sustainable.
        </p>
        <br><br>
        <div class="footer">
            © 2020-PRESENT © Jovanka Alexandro
        </div>
        <br><br>
    </div>

<script src="bs/js/bootstrap.bundle.min.js"></script>
</body>
</html>
