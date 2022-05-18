<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joey Snel | Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body id="body">
    <?php include "nav.html" ?>
    <main>
        <section class="about">
            <img src="img/IMG_7302.jpeg">
            <div class="hello">
                <h1>Hallo, ik ben Joey</h1>
                <p>
                    Gedreven software developer in opleiding.
                </p>
            </div>
            <button><a href=""></a>Download mijn CV</button>
        </section>
        <section class="skills">
            <h2>Mijn Skills</h2>
            <label for="html">HTML</label>
            <div class="skill">
                <div id="html">90%</div>
            </div>

            <label for="css">CSS</label>
            <div class="skill">
                <div id="css">80%</div>
            </div>

            <label for="php">PHP</label>
            <div class="skill">
                <div id="php">70%</div>
            </div>

            <label for="js">Javascript</label>
            <div class="skill">
                <div id="js">70%</div>
            </div>
        </section>
        <section class="portfolio">
            <h2>Portfolio</h2>
            <p>Een aantal recente projecten waar ik trots op bent. Voorlopig zal deze enkel bestaan uit schoolprojecten,
                maar in de toekomst zal ik hier nog veel meer aan toevoegen.</p>
            <h3>Javascript game</h3>
            <video src="img/fighting-game-recording.mp4" controls autoplay></video>
        </section>
        <section class="contact">
            <h2>Contact</h2>
            <p>
                Voor de periode September 2022 - Januari 2023 ben ik op zoek naar een geschikte stageplek waarin ik
                mij
                kan verdiepen in programmeren; front-end zowel als back-end.<br>
                Is dit mogelijk bij uw bedrijf, stuur mij dan snel een bericht!</p>
            <form action="">
                <input type="text" name="name" id="name" placeholder="Naam" autocomplete="off" required>
                <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" required>
                <input type="text" name="subject" id="subject" placeholder="Onderwerp" autocomplete="off" required>
                <textarea name="message" id="message" placeholder="Bericht" autocomplete="off" required></textarea>
                <input type="submit" name="send" id="send" value="Verzenden">
            </form>
        </section>
    </main>
    <script src="index.js"></script>
</body>

</html>