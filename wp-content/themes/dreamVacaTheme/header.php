<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dream Vacations: <?php wp_title(); ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
</head>

<body>
    <header class="bg-dark">
        <div class="container bg-dark navContain">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid" id="theNav">
                    <a class="navbar-brand" href="/"><img class="theLogo" src="<?php echo get_template_directory_uri(); ?>/logo1.svg"
                            alt="DreamVacations LLC"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="searchBar input-group">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1">SEARCH</button>
                        <input type="text" class="form-control" placeholder=""
                            aria-label="Example text with button addon" aria-describedby="button-addon1">
                    </div>

                    <div>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <!-- <ul class="navbar-nav"> -->
                            <?php wp_nav_menu(array('menu' => 'primaryNav')) ?>


                            <!-- </ul> -->
                        </div>
                    </div>

                </div>
            </nav>
        </div>
    </header>
    <main>