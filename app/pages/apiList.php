{extends file='pages/base.html'}
{block name=title}Contact{/block}
{block name=content}

<h1>Liste de nos endpoints</h1>
<p>Notre site met à disposition plusieurs endpoints permettant de recueillir un certain nombre d'informations.</p>
<p>Ces endpoints sont accessibles même non connecté. (Présentés ci-dessous</p>
<p>Connectez vous pour plus de contenu sur le site comme une recherche de pathologies par mot clé</p>
<table id="resultTable">
<caption>Liste de tous les endpoints disponibles</caption>
<tr>
  <th id="endpoint">Endpoint</th>
  <th id="description">Description</th>
<tr>
<tr>
  <td headers="endpoint"><a href="/pathologies">/pathologies</a></td>
  <td headers="description">Donne la liste des pathologies avec les types et leur méridien</td>
<tr>
<tr>
  <td headers="endpoint"><a href="/symptomes">/symptomes</a></td>
  <td headers="description">Donne la liste des symptomes</td>
<tr>
<tr>
  <td headers="endpoint"><a href="/meridiens">/meridiens</a></td>
  <td headers="description">Donne la liste des méridiens</td>
<tr>
</table>

{/block}
