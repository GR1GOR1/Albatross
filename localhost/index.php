<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Добро пожаловать!</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <a href="Search_Sklad.php"><img src="images/albatros.jpg" width="140" height="68" alt="photo">
        </a>
          
            <div>
            <form action="Search.php" method="post">
                <input name="search" type="text" size="30" minlength="5" maxlength="5" placeholder="Уникальный код" />
                <input type="submit" value="Найти" />
            </form>
            <?php print ("$output");?>
        </div>
    </header>
    <script type="text/javascript">
        var images = new Array();
        var i = 0;
        images[0] = 'images/fly_1.jpg';
        images[1] = 'images/train_1.jpg';
        images[2] = 'images/car_1.jpg';
        function viewImages() {
            document.getElementById("img_main").src = images[i];
            i++;
            if (i == images.length) {
                i = 0;
            }
            setTimeout("viewImages()", 5000);
        }

    </script>
    <h1>Транспортная компания АЛЬБАТРОС</h1>
    <main>
        <img src="" id="img_main" width="80%" height="600px">
        <script scr="script.js">
            viewImages();

        </script>
    </main>
    <comp>
        <p text-indent="1.5em">Транспортная компания «Альбатрос» – один из лидеров по оказанию транспортно-логистических услуг на российском рынке. За годы работы мы накопили богатый опыт и зарекомендовали себя как надежный партнер в сфере грузоперевозок. </p>
        Нас выгодно отличают:
        <ol>
            <li> Широчайшая география присутствия - у нас более 200 региональных представительств на территории России.</li>
            <li> Краевая доставка - мы возим грузы туда, куда их не могут доставить другие.</li>
            <li> Уникальная система «Экспресс» - регулярная прямая доставка грузов между региональными пунктами, в пределах 700 км, на следующий, после отправки, день. </li>
            <li> Большой объем дополнительных услуг, среди которых: услуги по упаковке груза, услуги ответственного хранения и услуги по страхованию груза. </li>
        </ol>
        <p text-indent="1.5em">Для перевозки любых грузов, в том числе документации и посылок, услугами транспортной компании пользуются десятки тысяч предприятий малого и среднего бизнеса и индивидуальные предприниматели.</p>

        <p>Мы: </p>
        <ul>
            <li>Максимально экономим Ваши время и силы</li>
            <li>Принимаем груз к перевозке без участия грузоотправителя</li>
            <li>Производим доставку груза "от двери до двери"</li>
            <li>Приглашаем заключить договор на транспортно-экспедиторское обслуживание Вашего предприятия</li>
            <li>Вы можете быть уверены в том, что ваши партнеры получат груз точно в срок, а содержимое груза не пострадает.</li>
        </ul>

    </comp>
    <main_2>
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Краснодар')">Краснодар</button>
            <button class="tablinks" onclick="openCity(event, 'Москва')">Москва</button>
            <button class="tablinks" onclick="openCity(event, 'Новосибирск')">Новосибирск</button>
            <button class="tablinks" onclick="openCity(event, 'Санкт-Петербург')">Санкт-Петербург</button>
        </div>
    </main_2>
    <main>
        <div id="Краснодар" class="tabcontent">
            <h3>Краснодар</h3>
            <p>ул.Ставропольская д.8 тел: 8-800-555-55-65</p>
            <p>ул.Красноармейская д.75 тел: 8-800-555-75-90</p>
            <p>ул.Гагарина д.23 тел: 8-800-555-33-33</p>
        </div>
        <div id="Москва" class="tabcontent">
            <h3>Москва</h3>
            <p>ул.Красная д.3 тел: 8-454-323-45-45</p>
            <p>ул.Полтавская д.69 тел: 8-999-100-40-47</p>
        </div>
        <div id="Новосибирск" class="tabcontent">
            <h3>Новосибирск</h3>
            <p>ул.Мира д.16 тел: 8-565-333-56-78</p>
        </div>
        <div id="Санкт-Петербург" class="tabcontent">
            <h3>Санкт-Петербург</h3>
            <p>ул.Ленина д.36 тел: 8-995-233-11-10</p>
        </div>
    </main>
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

    </script>
    <footer>
        <p>г.Краснодар ул.Мира д.123 <br>
            тел: 8 - 800 - 555 - 35 - 35 <br>
            E-mail:
            adress@pochta.ru</p>

    </footer>
</body>

</html>
