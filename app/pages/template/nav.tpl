<nav>
    <ul>
        <li><a href="/">Accueil</a></li>
        <li><a href="">Liste pathologies</a></li>
        <li><a href="">Contact</a></li>
        <li id="loginForm">
            {if $smarty.session.username}
                {$smarty.session.username}<a href="/deconnexion">Déconnexion</a>
            {else}
              <a href="/enregistrer">S'enregistrer </a>
            {/if}
          
        </li>
    </ul>
</nav>
