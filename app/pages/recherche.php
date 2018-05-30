{extends file='pages/restricted.html'}

{block name=title}Recherche par mot clé{/block}

{block name=restricted}

<form method="post" action="rechercheParKeyWord">
  <label for="keyWord">Mot clé</label>
  <input id="keyWord" name="keyword" type="text" required>
  <input id="submit" name="submit" type="submit" value="Rechercher">
<form>

{if $smarty.session.pathologies}
<h1>Résultat de la recherche pour {$smarty.session.keyword}</h1>
<table id="resultTable">
<tr>
  <th>Symptome</th>
  <th>Pathologie</th>
</tr>
{foreach from=$smarty.session.pathologies item='pathologie'}
  <tr>
    <td>{$pathologie['symptome']}</td>
    <td>{$pathologie['pathologie']}</td>
  </tr>
{/foreach}
</table>
{else}
<p>Pas de résultat pour la recherche</p>
{/if}

{/block}
