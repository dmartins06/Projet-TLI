{extends file='pages/base.html'}
{block name=title}Recherche de pathologie{/block}
{block name=content}

	<script src="public/js/searchPatho.js"></script>

    <h1>Recherche de pathologies</h1>

    <form method="post" action="rechercheParCritere">
	    <div class="criteres">
	    		<label for="name">Type de pathologies</label> 
		      	<select name="type" id="type">
                    <option value=1>-- Tous --</option>
					{foreach from=$smarty.session.types item='type'}
						<option value="{$type['codeType']}">{$type['nameType']}</option>
					{/foreach}
				</select>
	    </div>

	    <div class="recherche">
        	<input name="submit" type="submit" value="Rechercher"></input>
    	</div>
	</form>

    <div class="patho">
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

{/block}