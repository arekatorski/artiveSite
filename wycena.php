<?php
    $title = "Wycena &bull; Artive";
    $desc = "Agencja kreatywna";
    $kw = "Strony, wordpress, socialmedia";
    require("./src/header.php");
?>
    <!-- main -->
    <div class="pre-form">
        <h1>Wybierz co Ciebie interesuje?</h1>
        <div class="pre-form-content">
            <a href="formularz?service=Film" class="card">Film i animacja</a>
            <a href="formularz?service=Retusz zdjęć" class="card">Retusz zdjęć</a>
            <a href="formularz?service=Strony_internetowe" class="card">Strony internetowe</a>
            <a href="formularz?service=Branding" class="card">Branding</a>
            <a href="formularz?service=UX/UI" class="card">UX/UI</a>
            <a href="formularz?service=Marketing" class="card">Marketing</a>
            <a href="formularz?service=Socialmedia" class="card">Social media</a>
        </div>
    </div>
<?php require("./src/footer.php") ?>
