<?php 

    require "./header.php"

?>

<div class="container__login">
      <!-- formulaire de login -->
      <form action="login.php" method="POST" class="loginForm connection">
        <h1>Login</h1>
        <input type="email"  name="email" class="connectionForm" placeholder="Email"><br><br>

        <input type="password"  name="password" class="connectionForm" placeholder="password"required><br><br>

        <button class="myButton login" type="submit">Se connecter</button>
    </form>

    <!-- formulaire d'inscription -->
    <form action="login.php" method="POST" class="loginForm inscription">
        <h1>Inscription</h1>
        <input type="text"  name="prenom" class="connectionForm" placeholder="Prenom"required><br><br>

        <input type="text" name="nom" class="connectionForm" placeholder="Nom" required><br><br>

        <input type="date" name="dateNaissance" class="connectionForm"  required><br><br>

        <input type="email"  name="emailInscription" class="connectionForm" placeholder="Email" required><br><br>

        <input type="password"  name="passwordInscription" class="connectionForm" placeholder="password" required><br><br>

        <select  name="ville" class="connectionForm" required>
            <option value="">Ville</option>
            <option value="1">Bruxelles</option>
            <option value="2">Venise</option>
            <option value="3">Berlin</option>
            <option value="4">Porto</option>
            <option value="5">Kyoto</option>
            <option value="6">Salvador</option>
            <option value="7">Manchester</option>
            <option value="9">Ibiza</option>
            <option value="10">Helsinki</option>
            <option value="11">Toronto</option>
        </select><br><br>

        <button class="myButton inscription" type="submit">S'enregistrer</button>
    </form><br>

    <div class="formInscription">
        <p>Vous n'avez pas de compte ?</p>
        <button type="button" class="btnFormInscri">Inscrivez-vous</button>
    </div>
</div>


<?php 

    require "./footer.php"

?>