<?php
    $title = "Kontakt &bull; Artive";
    $desc = "Agencja kreatywna";
    $kw = "Strony, wordpress, socialmedia";
    require("./src/header.php");
?>
    <!-- main -->
    <div class="main">
        <div class="hero-contact">
            <div class="hero-content" data-aos="fade-up" data-aos-duration="800">
                <h1>Dane kontaktowe</h1>
                <ul>
                    <li>tel. Twoja stara</li>
                    <li>emial: artiveagency@gmail.com</li>
                    <li>Godziny otwarcia: 6:00-6:00 (pn. - ndz.)</li>
                </ul>
            </div>
        </div>

        <div class="contact-form">
            <form action="./src/mail.php" method="POST">
                <h2>Formularz kontaktowy</h2>
                <input type="text" placeholder="Imię i nazwisko" name="name">
                <input type="email" name="email" placeholder="Adres email" required>
                <input type="tel" name="tel" placeholder="Numer telefonu">

                <div class="message" required>
                    <textarea name="message" id="message" placeholder="Wiadomość" maxlength="250"></textarea>
                    <span class="message-count-text"></span>
                </div>

                <label class="agree">
                    <input type="checkbox" name="agree1">
                    <p>
                        Wyrażam zgodę na przetwarzanie moich danych osobowych w celach obsługi wysłanego przeze mnie za pośrednictwem formularza wyceny. Przyjmuję do wiadomości, że administratorem danych osobowych będzie Artive Agency oraz, że podanie przeze mnie danych jest dobrowolne i przysługuje mi prawo dostępu do treści moich danych, ich poprawiania, wyrażenia sprzeciwu wobec ich przetwarzania oraz żądania ich usunięcia. Więcej informacji w <a href="#">polityce prywatności.</a>
                    </p>
                </label>

                <button type="submit">Wycena</button>
            </form>
        </div>
    </div>

<?php require("./src/footer.php")?>

<script src="./src/js/message_count.js"></script>
</body>
</html>