<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joey Snel | Software Developer</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <?php include "nav.html" ?>
        <h1>Joey Snel</h1>
        <h2>Portfolio</h2>
    </header>
    <main>
        <section>
            <article class="about">
                <h3>About</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab labore cum, porro reprehenderit
                    quibusdam
                    odit
                    magni perferendis enim delectus voluptas veniam rerum qui dignissimos atque beatae, eos pariatur,
                    voluptatibus reiciendis!</p>
                <img src="#">
            </article>
            <article class="work">
                <img src="#">
                <a href="">Bezoek website</a>
                <img src="#">
                <a href="">Bezoek website</a>
            </article>
            <articel class="skills">
                <h3>Skills</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates, odio repudiandae labore quos
                    neque
                    praesentium facilis asperiores doloremque blanditiis sint ipsa eius dignissimos animi obcaecati
                    eveniet,
                    libero dolorum debitis sit.</p>
            </articel>
            <article class="contact">
                <h3>Contact</h3>
                <form>
                    <input type="text" name="mail" placeholder="E-mail">
                    <input type="text" name="name" placeholder="Naam">
                    <textarea class="txtarea" name="message" placeholder="Typ hier uw bericht"></textarea>
                    <button type="submit" name="send">Verzenden</button>
                </form>
            </article>
        </section>
    </main>
    <?php include "footer.html"; ?>

</body>

</html>