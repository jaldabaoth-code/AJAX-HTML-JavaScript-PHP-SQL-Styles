<!DOCTYPE html>
<html lang="en">
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="#">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="../../assets/styles/navbar.css">
        <link rel="stylesheet" href="style.css">
        <title>CSS</title>
    </head>
    <?php
        /* Navbar included */
        include '../../includes/navbar.php';
        include '../includes/bottomNavbar.php';
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
