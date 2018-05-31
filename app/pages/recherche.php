{extends file='pages/restricted.html'}

{block name=title}Recherche par mot clé{/block}

{block name=restricted}

<h1>Recherche par mot clé</h1>
<form method="post"  action="rechercheParKeyWord">
  <label for="keyWord">Mot clé</label>
  <input id="keyWord" name="keyword" type="text" required>
  <input id="submit" name="submit" type="submit" value="Rechercher">
</form>

{if $smarty.session.pathologies}
<table id="resultTable" >
<CAPTION>Liste de toutes les pathologies et symptomes associés à la recherche {$smarty.session.keyword}</CAPTION>
<tr>
  <th id="symptome">Symptome</th>
  <th id="pathologie">Pathologie</th>
</tr>
{foreach from=$smarty.session.pathologies item='pathologie'}
  <tr>
    <td headers="symptome">{$pathologie['symptome']}</td>
    <td headers="pathologie">{$pathologie['pathologie']}</td>
  </tr>
{/foreach}
</table>
{else}
<p>Pas de résultat pour la recherche</p>
{/if}

{/block}
