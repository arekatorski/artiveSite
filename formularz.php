<?php
    $title = "Formularz &bull; Artive";
    $desc = "Agencja kreatywna";
    $kw = "Strony, wordpress, socialmedia";
    require("./src/header.php");
?>
    <!-- main -->
    <div class="main">
        <img class="brief-text" src="./src/media/brief.svg" alt="brief">
        
        <div class="form">
            <header class="form-hero" data-aos="fade-up" data-aos-duration="800">
                <h1>Wyceń usługę za darmo</h1>
                <p>
                    Wypełnij formularz wy cenowy, a my odpiszemy w ciągu 24. <br>
                    Brakuje opcji? <a href="kontakt">Skontaktuj się z nami!</a>
                </p>
            </header>

            <form action="" method="POST" enctype="multipart/form-data">
                <label>
                    <h3>Dane kontaktowe</h3>
                    <input type="text" name="name" placeholder="Twoja firma lub imię">
                    <input type="email" name="email" placeholder="Adres emial">
                    <input type="text" name="mark" placeholder="Branża">
                </label>

                <label>
                    <h3>Potrzebuje usługa</h3>
                    <input type="text" name="service" placeholder="Zaprojektowanie i stworzenie strony interneowej" value="<?php if(isset($_GET['service'])) echo $_GET['service'] ?>">
                </label>

                <label>
                    <h3>Informacje dotyczące zlecenia</h3>
                    <input type="text" name="deathline" placeholder="Oczekiwany termin realizacji">
                </label>

                <label>
                    <h3>Usługi dodatkowe</h3>
                    <input type="text" name="hosting" placeholder="Hosting">
                </label>

                <?php if(isset($_GET['service']) && $_GET['service'] === "Strony_internetowe") :?>
                <label>
                    <h3>Certyfikat SSL</h3>
                    <input type="text" name="ssl" placeholder="Chce certyfikat SSL">
                </label>

                <label for="">
                    <h3>Domena</h3> 
                    <div class="domena-radio">
                        <label>
                            <input type="radio" name="domena">
                            <p>Chce domenę</p>
                        </label>
                        <label>
                            <input type="radio" name="domena">
                            Nie potrzebuje 
                        </label>
                    </div>
                </label>
                <?php endif ?>

                <label>
                    <h3>Budżet</h3>
                    <div class="price">
                        <span>
                            <input id="price_value" type="number" name="budget" max=10000 min="0" value="0"> 
                            ZŁ
                        </span>
                        <input id="price_range" max="10000" type="range" placeholder="Wpisz kwote" value="0">
                    </div>
                </label>

                <label>
                    <h3>Twoje uwagi</h3>
                    <input type="text" name="budget" placeholder="Uwagi">
                </label>
                
                <label>
                    <h3 style="margin-bottom: 12px;">Miejsce na załączniki</h3>
                    <input type="file" name="attachments" id="attachments" multiple>
                    <span class="attachments-text"></span>
                </label>

                <label for="">
                    <h3>Polityka prywatności i umowa</h3>
                    <label class="agree">
                        <input type="checkbox" name="agree1">
                        <p>
                            Wyrażam zgodę na przetwarzanie moich danych osobowych w celach obsługi wysłanego przeze mnie za 
                            pośrednictwem formularza wyceny. Przyjmuję do wiadomości, że administratorem danych osobowych
                            będzie Artive Agency oraz, że podanie przeze mnie danych jest dobrowolne i przysługuje mi prawo dostępu
                            do treści moich danych, ich poprawiania, wyrażenia sprzeciwu wobec ich przetwarzania oraz żądania ich
                            usunięcia. Więcej informacji w <a href="#">polityce prywatności.</a>
                        </p>
                    </label>

                    <label class="agree">
                        <input type="checkbox" name="agree2">
                        <p>Umowa zdalna</p>
                    </label>
                </label>

                <button type="submit" class="form-send">Wyślij</button>
            </form>
        </div>
    </div>

    <script>
        // price
        const price_value = document.querySelector("#price_value");
        const price_range = document.getElementById("price_range");

        price_range.addEventListener("input", () => {
            price_value.value = price_range.value;
        })

        price_value.addEventListener("input", () => {
            price_range.value = price_value.value;
        })

        // file
        const file = document.getElementById("attachments");
        file.addEventListener("change", (event) => {
           if(event.target.files.length > 0){

               for(let i = 0; i < event.target.files.length; i++){
                const item = document.createElement("span");
                item.innerHTML = event.target.files[i].name + " ";
                document.querySelector(".attachments-text").appendChild(item);
               }
           }
        })
    
    </script>

    <?php require("./src/footer.php") ?>
</body>
</html>