<h2>Edit Winery</h2>
		
{if $tri == "success"}<div class="error">Winery updated successfully! &nbsp; <a href="/winery/{$web_name}" target="_blank">View the winery page</a></div>{/if}
{if $tri == "error"}<div class="error">There was a problem.  Maybe the Name and/or Country were left blank?</div>{/if}
		
<form action="/update_winery/" method="post">
<input type="hidden" name="wy_id" value="{$two}" />
		
<table cellpadding="4" cellspacing="0">
<tr>
<td style="width:15%;" class="alignRight"><b>Winery Name:</b></td>
<td style="width:85%;"><input type="text" size="30" maxlength="48" name="winery_name" value="{$winery_name}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Web Name:</b></td>
<td><input type="text" size="30" maxlength="48" name="web_name" value="{$web_name}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Proprietor:</b></td>
<td><input type="text" size="30" maxlength="48" name="proprietor" value="{$proprietor}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Website:</b></td>
<td><input type="text" size="30" maxlength="48" name="website" value="{$website}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Country:</b></td>
<td><select name="c_id">
<option value="0">Select</option>
{section name=bit loop=$countries}
<option value="{$countries[bit].c_id}"{if $countries[bit].c_id == $c_id} selected{/if}>{$countries[bit].full_name}</option>
{/section}
</select></td>
</tr>
<tr>
<td class="alignRight"><b>Appellation:</b></td>
<td><input type="text" size="30" maxlength="48" name="winery_appellation" value="{$winery_appellation}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Year Established:</b></td>
<td><input type="text" size="4" maxlength="4" name="established" value="{$established}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Active:</b></td>
<td>YES<input type="radio" value="0" name="inactive"{if $inactive == '0'} checked{/if} /> NO<input type="radio" value="1" name="inactive"{if $inactive == '1'} checked{/if} /></td>
</tr>
<tr>
<td class="alignRight"><b>Show to:</b></td>
<td><select name="show">
	<option value="0"{if $show == '0'} selected{/if}>All</option>
	<option value="1"{if $show == '1'} selected{/if}>Webshop and CA/NY Trade only</option>
	<option value="2"{if $show == '2'} selected{/if}>Webshop and CA Trade only</option>
	<option value="3"{if $show == '3'} selected{/if}>Webshop only</option>
</select></td>
</tr>
<tr>
<td class="alignRight"><b>Details:</b></td>
<td><textarea cols="70" rows="12" name="details">{$details}</textarea></td>
</tr>
<td class="alignRight"><b>Short Description:</b></td>
<td><textarea cols="70" rows="12" name="short_description">{$short_description}</textarea></td>
</tr>
<tr>
<td class="alignRight"><b>Contact Info:</b><br /><i>Will not display publicly</i></td>
<td><textarea cols="30" rows="3" name="contact">{$contact}</textarea></td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2"><h3>Techsheet Information</h3></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td class="alignRight"><b>Phonetic Name:</b></td>
<td><input type="text" size="30" maxlength="48" name="phonetic_name" value="{$phonetic_name}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Phonetic Appellation:</b></td>
<td><input type="text" size="30" maxlength="48" name="phonetic_appellation" value="{$phonetic_appellation}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Motto:</b></td>
<td><textarea cols="70" rows="5" name="motto">{$motto}</textarea></td>
</tr>
<tr>
<td class="alignRight"><b>Intro Img Caption:</b></td>
<td><input type="text" size="70" maxlength="128" name="introduction_img_caption" value="{$introduction_img_caption}" /></td>
</tr>
<tr>
<td class="alignRight"><b>Introduction:</b></td>
<td><textarea cols="70" rows="9" name="introduction">{$introduction}</textarea></td>
</tr>
<tr>
<td class="alignRight"><b>Vineyards:</b></td>
<td><textarea cols="70" rows="9" name="vineyards">{$vineyards}</textarea></td>
</tr>
<tr>
<td class="alignRight"><b>Wine Making:</b></td>
<td><textarea cols="70" rows="9" name="winemaking">{$winemaking}</textarea></td>
</tr>
<td class="alignRight"><b>Wine Making (2nd Part):</b></td>
<td><textarea cols="70" rows="9" name="winemaking2">{$winemaking2}</textarea></td>
</tr>
<tr>
<td class="alignRight">&nbsp;</td>
<td><input type="submit" value="Update Winery" /></td>
</tr>
</table>
</form>