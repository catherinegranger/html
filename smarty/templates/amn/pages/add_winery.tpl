<h2>Add a New Winery</h2>
		
{if $two == "success"}<div class="error" style="text-align:center;">Winery entered successfully!</div>{/if}
{if $two == "error"}<div class="error" style="text-align:center;">There was a problem.  Maybe the Name and/or Country were left blank?</div>{/if}
		
<form action="/submit_winery/" method="post">
<table cellpadding="4" cellspacing="0">
<tr>
<td style="width:15%;" class="alignRight"><b>Winery Name:</b></td>
<td style="width:85%;"><input type="text" size="30" maxlength="48" name="winery_name" value="{$smarty.session.winery_name}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Web Name:</b></td>
<td><input type="text" size="30" maxlength="48" name="web_name" value="{$smarty.session.web_name}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Proprietor:</b></td>
<td><input type="text" size="30" maxlength="48" name="proprietor" value="{$smarty.session.proprietor}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Website:</b></td>
<td><input type="text" size="30" maxlength="48" name="website" value="{$smarty.session.website}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Country:</b></td>
<td><select name="c_id">
<option value="0">Select</option>
{section name=bit loop=$countries}
<option value="{$countries[bit].c_id}"{if $smarty.session.c_id == $countries[bit].c_id} selected{/if}>{$countries[bit].country_name}</option>
{/section}
</select></td>
</tr>
<tr>
<td class="alignRight"><b>Appellation:</b></td>
<td><input type="text" size="30" maxlength="48" name="winery_appellation" value="{$smarty.session.winery_appellation}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Year Established:</b></td>
<td><input type="text" size="4" maxlength="4" name="established" value="{$smarty.session.established}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Active:</b></td>
<td>YES<input type="radio" value="0" name="inactive"{if $smarty.session.inactive == '0'} checked{/if} /> NO<input type="radio" value="1" name="inactive"{if $smarty.session.inactive == '1'} checked{/if} /></td>
</tr>
<tr>
<td class="alignRight"><b>Details:</b></td>
<td><textarea cols="70" rows="10" name="details">{$smarty.session.details}</textarea></td>
</tr>
<tr>
<td class="alignRight"><b>Contact Info:</b><br /><i>Will not display publicly</i></td>
<td><textarea cols="30" rows="3" name="contact">{$smarty.session.contact}</textarea></td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2"><h3>Techsheet Information</h3></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td class="alignRight"><b>Phonetic Name:</b></td>
<td><input type="text" size="30" maxlength="48" name="phonetic_name" value="{$smarty.session.phonetic_name}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Phonetic Appellation:</b></td>
<td><input type="text" size="30" maxlength="48" name="phonetic_appellation" value="{$smarty.session.phonetic_appellation}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Introduction:</b></td>
<td><textarea cols="70" rows="9" name="introduction">{$smarty.session.introduction}</textarea></td>
</tr>
<tr>
<td class="alignRight"><b>Vineyards:</b></td>
<td><textarea cols="70" rows="9" name="vineyards">{$smarty.session.vineyards}</textarea></td>
</tr>
<tr>
<td class="alignRight"><b>Wine Making:</b></td>
<td><textarea cols="70" rows="9" name="winemaking">{$smarty.session.winemaking}</textarea></td>
</tr>
<tr>
<td class="alignRight"><b>Wine Making (2nd Part):</b></td>
<td><textarea cols="70" rows="9" name="winemaking2">{$smarty.session.winemaking2}</textarea></td>
</tr>
<tr>
<td class="alignRight">&nbsp;</td>
<td><input type="submit" value="Add Winery" /></td>
</tr>
</table>
</form>