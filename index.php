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
    <script src="/public/scripts/cursor.js" defer></script>
    <script src="/public/scripts/randomColor.js" defer></script>
    <link rel="icon" type="png" href="../img/favicon16x16m.png">
    <title>Portfolio | Inju Michorius</title>
</head>

<body>
    <?php include './public/header.php'; ?>
    <main>
        <svg id="Laag_1" data-name="Laag 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 528 416" class="logo">
            <path class="path" stroke-width="4" d="M160,0V304.41A111.12,111.12,0,0,1,140,368.13a111.84,111.84,0,0,1-91.86,48.08h-.1v-320A48.17,48.17,0,0,0,0,48.07V0ZM319.86,0a111.79,111.79,0,0,0-111.8,111.8V416.21h.08A111.81,111.81,0,0,0,320,304.41V0ZM479.93,320V0h-.08A111.79,111.79,0,0,0,368,111.8V416.21H528V368.13A48.16,48.16,0,0,1,479.93,320Z" />
        </svg>
        <div class="wrapper">
            <h1 class="banner_title">Inju Michorius is a Frontend Designer based in the Netherlands</h1>
            <p class="banner_text">A last year communication and Multimedia Design student, learning to become a front-end developer with UI/UX skills</p>
        </div>
        <section class="section_projects">
            <article class="project">
                <img class="project__img" src="/img/projectTWY.jpg" alt="">
                <a href="/public/twy.php" class="project__text_overlay">
                    <h2>TWY</h2>
                    <p>Thunderboom Records</p>
                </a>
            </article>
            <article class="project">
                <img class="project__img" src="/img/projectTWY.jpg" alt="">
                <a href="/public/twy.php" class="project__text_overlay">
                    <h2>Redesign</h2>
                    <p>HvanA</p>
                </a>
            </article>
            <article class="project">
                <img class="project__img" src="/img/projectTWY.jpg" alt="">
                <a href="/public/twy.php" class="project__text_overlay">
                    <h2>Visual Interface Design</h2>
                    <p>Biblion</p>
                </a>
            </article>
        </section>
    </main>
</body>

</html>