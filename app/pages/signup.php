{extends file='pages/base.html'}
{block name=content}

{if $smarty.session.username}
  <p>Vous êtes connecté en tant que {$smarty.session.username}</p>
  <a href="/deconnexion">Déconnexion</a>
{else}

  <h1> S'enregistrer </h1>
  {include file='signup.tpl'}
{/if}

{/block}
