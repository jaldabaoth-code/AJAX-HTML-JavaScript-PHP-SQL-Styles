<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* head included */
            include '../includes/head.html';
        ?>
        <link rel="stylesheet" href="style.css">
        <title>CSS</title>
    </head>
    <?php
        /* navbar included */
        include '../includes/navbar.php';
    ?>
    <body>
        <header>
            <nav>
                <a href="#">Home</a>
                <a href="#">Main</a>
                <a href="#">Other</a>
            </nav>
        </header>
        <main>
            <h1>Welcome wilder</h1>
            <section class="container">
                <h2>First section</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni cum sapiente dolor ipsum sed enim
                    pariatur perferendis reiciendis odio dolorem quia beatae sunt aspernatur corrupti repudiandae totam,
                    numquam consequuntur sequi!
                </p>
            </section>
            <img class="full-width" src="https://picsum.photos/800/300" alt="">
            <section class="container">
                <h2>Second section</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni cum sapiente dolor ipsum sed enim
                    pariatur perferendis reiciendis odio dolorem quia beatae sunt aspernatur corrupti repudiandae totam,
                    numquam consequuntur sequi!
                </p>
            </section>
            <section class="cards">
                <div>
                    <figure></figure>
                </div>
                <figure>
                    <img src="https://picsum.photos/400" alt="">
                    <figcaption>Title</figcaption>
                </figure>
                <figure>
                    <img src="https://picsum.photos/400" alt="">
                    <figcaption>Title</figcaption>
                </figure>
                <figure>
                    <img src="https://picsum.photos/400" alt="">
                    <figcaption>Title</figcaption>
                </figure>
                <figure>
                    <img src="https://picsum.photos/400" alt="">
                    <figcaption>Title</figcaption>
                </figure>
                <figure>
                    <img src="https://picsum.photos/400" alt="">
                    <figcaption>Title</figcaption>
                </figure>
                <figure>
                    <img src="https://picsum.photos/400" alt="">
                    <figcaption>Title</figcaption>
                </figure>
                <figure>
                    <img src="https://picsum.photos/400" alt="">
                    <figcaption>Title</figcaption>
                </figure>
                <figure>
                    <img src="https://picsum.photos/400" alt="">
                    <figcaption>Title</figcaption>
                </figure>
                <figure>
                    <img src="https://picsum.photos/400" alt="">
                    <figcaption>Title</figcaption>
                </figure>
            </section>
        </main>
        <footer>
            <a href="#">Legal mentions</a>
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
        </footer>
    </body>
</html>
