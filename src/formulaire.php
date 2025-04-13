<?php

    require "./header.php";

?>


<div class="container__contact">
    <form action="formulaire.php" method="POST" class="contact__form">
        <h1>Contact Us</h1>
        <input type="text"  name="nom" class="contact-form__input" placeholder="Nom"><br><br>

        <input type="email"  name="email" class="contact-form__input" placeholder="Email"><br><br>

        <input type="text"  name="objet" class="contact-form__input" placeholder="Objet"><br><br>

        <textarea class="contact-form__textarea" id="message" name="message" placeholder="Message"></textarea>

        <button class="contact-form__btn" type="submit">Envoyer</button>
    </form>
</div>




<?php

    require "./footer.php";

?>