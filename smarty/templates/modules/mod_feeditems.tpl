{if $feeditems_count > 3}
 <div class="bdfeeditems bdgridfeeditem4">
 {section name=bit loop=$feeditems max=4}
 <div class="bdfeeditems_group bdgrid_group {if $smarty.section.bit.last} bdgrid_group_last {/if}">
 <figure>
 <a href="{$feeditems[bit].link}" title="{$feeditems[bit].title}"><img src="{$feeditems[bit].imagepath}" alt="{$feeditems[bit].title}" /></a>
 </figure>
 <h4 title="{$feeditems[bit].title}">
 <a href="{$feeditems[bit].link}" title="{$feeditems[bit].title}">{$feeditems[bit].title}</a>
 </h4>
 {$feeditems[bit].content|truncate:150}  
 <br><a class="btn btn-basic btn-xs" href="{$feeditems[bit].link}/">Continue &#10142;</a>
 </div>
 {/section}
 </div>
{else}
 {if $feeditems_count == 3}
  <div class="bdfeeditems bdgridfeeditem4">
  {section name=bit loop=$feeditems max=3}
  <div class="bdfeeditems_group bdgrid_group">
  <figure>
  <a href="{$feeditems[bit].link}" title="{$feeditems[bit].title}"><img src="{$feeditems[bit].imagepath}" alt="{$feeditems[bit].title}" /></a>
  </figure>
  <h4 title="{$feeditems[bit].title}">
  <a href="{$feeditems[bit].link}" title="{$feeditems[bit].title}">{$feeditems[bit].title}</a>
  </h4>
  {$feeditems[bit].content|truncate:150}  
  <br><a class="btn btn-basic btn-xs" href="{$feeditems[bit].link}/">Continue &#10142;</a>
  </div>
  {/section}
  <div class="bdfeeditems_group bdgrid_group  bdgrid_group_last"> &nbsp; </div>
  </div>
 {else}
  {if $feeditems_count == 2}
    <div class="bdfeeditems bdgridfeeditem4">
    {section name=bit loop=$feeditems max=2}
    <div class="bdfeeditems_group bdgrid_group">
    <figure>
    <a href="{$feeditems[bit].link}" title="{$feeditems[bit].title}"><img src="{$feeditems[bit].imagepath}" alt="{$feeditems[bit].title}" /></a>
    </figure>
    <h4 title="{$feeditems[bit].title}">
    <a href="{$feeditems[bit].link}" title="{$feeditems[bit].title}">{$feeditems[bit].title}</a>
    </h4>
    {$feeditems[bit].content|truncate:150}  
    <br><a class="btn btn-basic btn-xs" href="{$feeditems[bit].link}/">Continue &#10142;</a>
    </div>
    {/section}
    <div class="bdfeeditems_group bdgrid_group"> &nbsp; </div>
    <div class="bdfeeditems_group bdgrid_group  bdgrid_group_last"> &nbsp; </div>
    </div>
  {else}
    <div class="bdfeeditems bdgridfeeditem4">
    {section name=bit loop=$feeditems max=1}
    <div class="bdfeeditems_group bdgrid_group">
    <figure>
    <a href="{$feeditems[bit].link}" title="{$feeditems[bit].title}"><img src="{$feeditems[bit].imagepath}" alt="{$feeditems[bit].title}" /></a>
    </figure>
    <h4 title="{$feeditems[bit].title}">
    <a href="{$feeditems[bit].link}" title="{$feeditems[bit].title}">{$feeditems[bit].title}</a>
    </h4>
    {$feeditems[bit].content|truncate:150}  
    <br><a class="btn btn-basic btn-xs" href="{$feeditems[bit].link}/">Continue &#10142;</a>
    </div>
    {/section}
    <div class="bdfeeditems_group bdgrid_group"> &nbsp; </div>
    <div class="bdfeeditems_group bdgrid_group"> &nbsp; </div>
    <div class="bdfeeditems_group bdgrid_group  bdgrid_group_last"> &nbsp; </div>
    </div>
  {/if}
 {/if}
{/if}

<div class="clean"></div>
