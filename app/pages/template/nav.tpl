<nav>
    <ul>
        <li><a href="base.html">&nbsp; Accueil &nbsp;</a></li>
        <li><a href="base.html">&nbsp; Liste pathologies &nbsp;</a></li>
        <li><a href="base.html">&nbsp; Contact &nbsp;</a></li>
        <li id="loginForm">
            {if $smarty.session.username}
                {$smarty.session.username}<a href="/deconnexion">Déconnexion</a>
            {else}
              <a href="/enregistrer">S'enregistrer </a>
            {/if}
          
        </li>
    </ul>
</nav>
