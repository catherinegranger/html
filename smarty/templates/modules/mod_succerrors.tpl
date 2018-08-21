{if $uc_successes}
<div class="ucsuccess">
{section name=bit loop=$uc_successes}
&bull;&nbsp;{$uc_successes[bit]}
<br>
{/section}
</div>
{/if}
{if $uc_warnings}
<div class="ucwarning">
{section name=bit loop=$uc_warnings}
&bull;&nbsp;{$uc_warnings[bit]}
<br>
{/section}
</div>
{/if}
{if $uc_errors}
<div class="ucvalidation">
{section name=bit loop=$uc_errors}
&bull;&nbsp;{$uc_errors[bit]}
<br>
{/section}
</div>
{/if}
{if $smarty.session.db_error}
<div class="ucvalidation">
&bull;&nbsp;{$smarty.session.db_error}}
</div>
{/if}