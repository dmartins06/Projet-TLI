<header>
   <img height="15%" width="15%" alt="website logo" src="public/images/logo.png">
  <h1>
       L'ACUPUNCTURE POUR LES ZEUBS
   </h1>
    <nav>
        <ul>
            <li><a href="base.html">&nbsp; Accueil &nbsp;</a></li>
            <li><a href="base.html">&nbsp; Liste pathologies &nbsp;</a></li>
            <li><a href="base.html">&nbsp; Contact &nbsp;</a></li>
            <li id="loginForm">
                {if $smarty.session.username}
                    <a href="/deconnexion">Déconnexion</a>
                {else}
                    {include file='login.tpl'}
                {/if}</li>
        </ul>
    </nav>
</header>

