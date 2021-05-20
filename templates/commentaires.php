<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
    <title>DevBlog Fullstack 2021</title>
</head>

<body>
    <section class="hero is-medium is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <span class="icon is-large">
                    <i class="fab fa-dev fa-3x"></i>
                </span>
                <h1 class="title">
                    DevBlog : A Blog for Developpers
                </h1>
                <h2 class="subtitle">
                    Engineered at Talis Business School
                </h2>
                <p>En construction@Fullstack 2021</p>
            </div>
        </div>
    </section>
    <?php
    foreach ($comments as $comment) {
        ?>
    <article class="media">
        <figure class="media-left mt-3">
            <p class="image is-128x128">
                <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
            </p>
        </figure>
        <div class="media-content">
            <div class="content">
                <p>
                <h2><?php echo $comment->getComment(); ?></h2>
               
               <?php echo $comment->getCreatedAt(); ?>
                
                <br>
                <?php echo $comment->getAuteur(); ?>
                              <br>
                <?php echo $comment->getNom(); ?>
                <br>
                <?php echo $comment->getEmail(); ?>
                <br>
                <?php echo $comment->getComment(); ?>
                <br>
                
                </p>
            </div>
        </div>
        <div class="media-right">
            <small>
                <p>Crée le : <?php echo $comment->getCreatedAt(); ?>
                </p>
            </small>
        </div>
    </article>
    <?php
    }
    ?>
</body>
