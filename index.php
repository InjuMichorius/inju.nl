<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/styles/main.css">
    <link rel="stylesheet" href="/public/styles/header.css">
    <link rel="stylesheet" href="/public/styles/projects.css">
    <link rel="stylesheet" href="/public/styles/cursor.css">
    <script src="./cursor.js" defer></script>
    <link rel="icon" type="png" href="../img/favicon16x16m.png">
    <title>Portfolio Inju Michorius</title>
</head>

<body>
    <?php include './public/header.php'; ?>
    <main>
        <h1 class="banner_title">Inju Michorius is a Frontend Designer based in the Netherlands</h1>
        <p class="banner_text">I’m a last year communication and Multimedia Design student, learning to become a front-end developer with UI/UX skills</p>
        <section class="section_projects">
            <article class="project">
                <img class="project__img" src="/img/projectTWY.jpg" alt="">
                <a href="twy.php" class="project__text_overlay">
                    <h2>TWY</h2>
                    <p>Thunderboom Records</p>
                </a>
            </article>
            <article class="project">
                <img class="project__img" src="/img/projectTWY.jpg" alt="">
                <a href="https://google.nl" class="project__text_overlay">
                    <h2>Redesign</h2>
                    <p>HvanA</p>
                </a>
            </article>
            <article class="project">
                <img class="project__img" src="/img/projectTWY.jpg" alt="">
                <a href="https://google.nl" class="project__text_overlay">
                    <h2>Visual Interface Design</h2>
                    <p>Biblion</p>
                </a>
            </article>
        </section>
    </main>
</body>

</html>