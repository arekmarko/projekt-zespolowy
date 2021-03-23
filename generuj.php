<html>
    <head>
        <title>Generuj plan</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <ul class="navbar">
            <li id=home><a href="index.php">PSK</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Znajdź grupę</a>
                <div class="dropdown-content">
                    <a href="#">1ID11A</a>
                    <a href="#">1ID11B</a>
                    <a href="#">2ID11A</a>
                    <a href="#">2ID11B</a>
                    <a href="#">3ID11A</a>
                    <a href="#">3ID11B</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Znajdź wykładowcę</a>
                <div class="dropdown-content">
                    <a href="#">dr inż. Aneta Bugajska</a>
                    <a href="#">dr inż. Arkadiusz Chrobot</a>
                    <a href="#">dr inż. Grzegorz Łukawski</a>
                    <a href="#">mgr Nina Kacperczyk</a>
                    <a href="#">mgr inż. Daniel Kaczmarski</a>
                    <a href="#">dr inż. Adam Krechowicz</a>
                    <a href="#">dr inż. Andrzej Kułakowski</a>
                    <a href="#">mgr inż. Paweł Pięta</a>
                    <a href="#">dr inż. Jarosław Wikarek</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Znajdź przedmiot</a>
                <div class="dropdown-content">
                    <a href="#">Inżynieria programowania</a>
                    <a href="#">Język obcy 4</a>
                    <a href="#">Grafika komputerowa</a>
                    <a href="#">Metody obliczeniowe</a>
                    <a href="#">Programowanie współbieżne</a>
                    <a href="#">Projektowanie aplikacji internetowych 1</a>
                </div>
            </li>
            <li class="zalbtn" style="float:right";><a href="login.php">Wyloguj się</a></li>
        </ul>
        <div class="generator">
        <form action="">
            <select name="grupa" id="grupa">
                <option value="1">3ID11A</option>
                <option value="2">3ID11B</option>
            </select>
            <input type="text" placeholder="Dodaj grupę" id="grupatxt">
            <input type="submit" value="Dodaj"><br>
            <select name="wykladowca" id="wykladowca">
                <option value="1">dr inż. Arkadiusz Chrobot</option>
                <option value="2">dr inż. Andrzej Kułakowski</option>
            </select>
            <input type="text" placeholder="Dodaj wykładowce">
            <input type="submit" value="Dodaj"><br>
            <select name="przedmiot" id="przedmiot">
                <option value="1">Grafika komputerowa</option>
                <option value="2">Inżynieria programowania</option>
            </select>
            <input type="text" placeholder="Dodaj przedmiot">
            <input type="submit" value="Dodaj"><br>
            <input type="submit" value="Generuj"><br>
        </form>
        </div>
    </body>
</html>