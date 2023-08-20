<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown Navigation Menu</title>
    <link rel="stylesheet" href="dropnav.css">
</head>

<body>
    <div class="navigation">
        <div class="toggle"><span></span></div>
        <ul>
            <li> <a href="#home">Home</a></li>
            <li> <a href="#about">About</a></li>
            <li> <a href="#services">Services</a></li>
            <li> <a href="#works">Works</a></li>
            <li> <a href="#team">Team</a></li>
            <li> <a href="#contact">Contact</a></li>

        </ul>
    </div>
    <section id="home">
        <h2>Home</h2>
    </section>
    <section id="about">
        <h2>About</h2>
    </section>
    <section id="services">
        <h2>Services</h2>
    </section>
    <section id="works">
        <h2>Works</h2>
    </section>
    <section id="team">
        <h2>Team</h2>
    </section>
    <section id="contact">
        <h2>Contact</h2>
    </section>
    <script>
        const navigation = document.querySelector('.navigation');
        document.querySelector('.toggle').onclick = function() {
            this.classList.toggle('active');
            navigation.classList.toggle('active');
        }
    </script>

</body>

</html>