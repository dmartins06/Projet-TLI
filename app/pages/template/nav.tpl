<nav>
    <ul>
        <li><a href="/">Accueil</a></li>
        <li><a href="/liste">Liste pathologies</a></li>
        <li><a href="/contact">Contact</a></li>
            {if $smarty.session.username}
                <li class="userManage"><a href="/deconnexion">{$smarty.session.username} Déconnexion</a></li>
            {else}
                <li class="userManage"><a href="/enregistrer">S'enregistrer</a></li>
                <li class="userManage"><a onclick="displayLogin()">Connexion</a></li>
            {/if}
    </ul>
</nav>
