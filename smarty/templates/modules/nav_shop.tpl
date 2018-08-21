<nav class="bdgridnav3">
<div class="nav_shop_menu">
<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#shop_menu_content"></i>
<div class="nav_shop_menu_list">
<ul id="shop_menu_content" class="nav_shop_menu_content collapse out">
<li><a  href="/wines/all/" title="Shop All"><span {if $search_all}class="on"{/if}>Shop All</span></a></li>
<li data-toggle="collapse" data-target="#winetypes" {if !$search_by_type}class="collapsed"{/if}>Wine Types<span class="arrow"></span></li>
<ul class="sub_shop_menu collapse {if $search_by_type}in{/if}" id="winetypes">
{section name=bit loop=$wine_types}
<li {if $wine_types[bit].web_name == $search_criteria} class="active"{/if}><a href="/wines/{$wine_types[bit].web_name}/" title="Shop {$wine_types[bit].full_name}">{$wine_types[bit].full_name}</a></li>
{/section}
</ul><!-- /#winetypes -->
<li data-toggle="collapse" data-target="#winestyles" {if !$search_by_style}class="collapsed"{/if}>Wine Styles<span class="arrow"></span></li>
<ul class="sub_shop_menu collapse {if $search_by_style}in{/if}" id="winestyles">
{section name=bit loop=$wine_styles}
<li {if $wine_styles[bit].web_name == $search_criteria} class="active"{/if}><a href="/wines/{$wine_styles[bit].web_name}/" title="Shop {$wine_styles[bit].full_name}">{$wine_styles[bit].full_name}</a></li>
{/section}
</ul><!-- /#winestyles -->
<li data-toggle="collapse" data-target="#regions" {if !$search_by_country}class="collapsed"{/if}>Regions<span class="arrow"></span></li>
<ul class="sub_shop_menu collapse {if $search_by_country}in{/if}" id="regions">
{section name=bit loop=$ncc}
<li {if $ncc[bit].web_name == $search_criteria} class="active"{/if}><a href="/wines/{$ncc[bit].web_name}/" title="Shop {$ncc[bit].full_name}">{$ncc[bit].full_name}</a></li>
{/section}
</ul><!-- /#regions -->
<li data-toggle="collapse" data-target="#varietals" {if !$search_by_varietal}class="collapsed"{/if}>Varietals<span class="arrow"></span></li>
<ul class="sub_shop_menu collapse {if $search_by_varietal}in{/if}" id="varietals">
{section name=bit loop=$varietals}
<li {if $varietals[bit].web_name == $search_criteria} class="active"{/if}><a href="/wines/{$varietals[bit].web_name}/" title="Shop {$varietals[bit].full_name}">{$varietals[bit].full_name}</a></li>
{/section}
</ul><!-- /#varietals -->
</ul><!-- /.menu-list -->
</div><!-- /.menu-content -->
</div><!-- /.nav_shop_menu -->
</nav>