{extends file='pages/base.html'}
{block name=title}Contact{/block}
{block name=content}

<h1>Liste de nos enpoints</h1>
<p>Notre site met à disposition plusieurs endpoints permettant de receuillir un certain nombre d'informations.</p>
<p>Ces endpoints sont accessibles même non connecté</p>

<table id="resultTable">
<tr>
  <th>Endpoint</th>
  <th>Description</th>
<tr>
<tr>
  <td><a href="/pathologies">/pathologies</a></td>
  <td>Donne la liste des pathologies avec les type et leur méridien</td>
<tr>
<tr>
  <td><a href="/symptomes">/symptomes</a></td>
  <td>Donne la liste des symptomes</td>
<tr>
<tr>
  <td><a href="/meridiens">/meridiens</a></td>
  <td>Donne la liste des symptomes</td>
<tr>
</table>
</tabel>

{/block}
