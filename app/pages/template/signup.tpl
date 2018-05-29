<script type="text/javascript" src="public/js/inscription.js"></script>

<form method="post" action="signup">
  <label for="username" >Nom d'utilisateur</label>
  <input id="username" name="username" type="text" required>

  <label for="password" >Mot de passe</label>
  <input id="password" name="password" type="password" required>

  <label for="password-confirm" >Confirmation du mot de passe</label>
  <input id="password-confirm" name="password-confirm" type="password" required oninput="check(this)">

  <input type="submit" value="S'enregistrer">
</form>
