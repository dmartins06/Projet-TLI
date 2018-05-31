<nav>
    <ul>
        <li><a href="/">Accueil</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/apiList">Liste des endpoints</a></li>

        {if $smarty.session.username}
        <li class="userManage"><a href="/deconnexion">{$smarty.session.username} Déconnexion</a></li>
        <li> 
          <a href="/recherche">Recherche par mot clé</a>
        </li>
        {else}
                <li class="userManage"><a href="/enregistrer">S'enregistrer</a></li>
                <li class="userManage"><a onclick="displayLogin()">Connexion</a></li>
        {/if}

    </ul>
</nav>
