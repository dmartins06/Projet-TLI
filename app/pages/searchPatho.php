{extends file='pages/base.html'}
{block name=content}

    <h1>Recherche de pathologies</h1>

    <div class="criteres">
        <h2>Critères de recherche</h2>
	      	<select name="type" id="type">
				{foreach from=$smarty.session.types item=$codeType}
				        {html_options values=$codeType output=$nameType}
				{/foreach}
			</select>
    </div>

    <form method="post" action="rechercheParCritere">
	    <div class="recherche">
	        <button type="submit">Rechercher</button>
	    </div>

	    <div class="patho">
	        <h2>Liste des pathologies</h2>
	        {if $smarty.session.pathologies}
		        <table id="resultTable">
		            <tr>
		                <th>Pathologie</th>
		            </tr>
		            {foreach from=$smarty.session.pathologies item='pathologie'}
		            <tr>
		                <td>{$pathologie['pathologie']}</td>
		            </tr>
		            {/foreach}
		        </table>
		    {else}
				<p>Pas de résultat pour la recherche</p>
			{/if}
	    </div>

	</form>

{/block}