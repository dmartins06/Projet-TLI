<nav>
    <ul>
        <li><a href="/">Accueil</a></li>
<<<<<<< HEAD
        <li><a href="/liste">Liste pathologies</a></li>
        <li><a href="/contact">Contact</a></li>
            {if $smarty.session.username}
                <li class="userManage"><a href="/deconnexion">{$smarty.session.username} Déconnexion</a></li>
            {else}
                <li class="userManage"><a href="/enregistrer">S'enregistrer</a></li>
                <li class="userManage"><a onclick="displayLogin()">Connexion</a></li>
            {/if}
=======
        <li><a href="">Liste pathologies</a></li>
        <li><a href="">Contact</a></li>



        {if $smarty.session.username}
        <li id="loginForm">
          {$smarty.session.username}<a href="/deconnexion">Déconnexion</a>
        </li>
        <li> 
          <a href="/recherche">Recherche par mot clé</a>
        </li>
        {else}
        <li id="loginForm">
              <a href="/enregistrer">S'enregistrer </a>
        </li> 
        {/if}
>>>>>>> Update routes and nav
    </ul>
</nav>
