<article id="feature">
<header>
<h1 title="{$feature.title}">{$feature.title}</h1>
</header>
<figure id="feature_img">
<a href="/img/feature/{$feature.f_id}.jpg" title="{$feature.title}"><img src="/img/feature/{$feature.f_id}.jpg"  alt="{$feature.title}"/></a>
</figure>
<div id="feature_text">
{$feature.details|regex_replace:"/[\n]/":"<br />&nbsp;&nbsp;&nbsp;&nbsp;"}
</div>
</article>

<article id="spotlight_l">
<header>
<h1 title="Wine Spotlight">Wine Spotlight</h1>
</header>
{section name=bit loop=$spots max=3}
<div class="spotlight_l_group">
<h4>
<a href="/wine/{$spots[bit].vint_id}/" title="{$spots[bit].full_name}">{$spots[bit].winery}
<br>
{if $spots[bit].year > 0} {$spots[bit].year}{/if} {$spots[bit].name}
{if $spots[bit].max_vintage_length > 17}
{if $spots[bit].vintage_length <= 17}
{if $spots[bit].vintage_length < $spots[bit].max_vintage_length}
<br>&nbsp;
{/if}
{/if}
{/if}
<br>{$spots[bit].country}</a>
</h4>
<div class="spotlight_l_text">
<a href="/wine/{$spots[bit].vint_id}/" title="{$spots[bit].full_name}"><img src="/img/bottles/{$spots[bit].vint_id}.jpg" alt="{$spots[bit].name}" /></a>{$spots[bit].notes|strip_tags|truncate:260:"...":true}
<span class="read_more"><a href="/wine/{$spots[bit].vint_id}/">Shop&nbsp;&gt;</a></span>
</div>
</div>
{/section}
</article>

<article id="spotlight_p">
{section name=bit loop=$spots max=3}
<div class="spotlight_p_group">
<a href="/wine/{$spots[bit].vint_id}/" title="{$spots[bit].full_name}"><img src="/img/bottles/{$spots[bit].vint_id}.jpg" alt="{$spots[bit].name}" /></a>
<h1 title="Wine Spotlight">
Spotlight: <a href="/wine/{$spots[bit].vint_id}/" title="{$spots[bit].full_name}">{if $spots[bit].year > 0} {$spots[bit].year}{/if} {$spots[bit].winery} {$spots[bit].name}</a>
</h1>
<div class="spotlight_p_text">
{$spots[bit].notes|strip_tags|truncate:140:"...":true}
<span class="read_more"><a href="/wine/{$spots[bit].vint_id}/">Shop&nbsp;&gt;</a></span>
</div>
<div class="spotlight_t_text">
{$spots[bit].notes|strip_tags|truncate:500:"...":true}
<span class="read_more"><a href="/wine/{$spots[bit].vint_id}/">Shop&nbsp;&gt;</a></span>
</div>
</div>
<div class="clean"></div>
<hr class="separator_p">
{/section}
</article>

<article id="blog_p">
{section name=bit loop=$feeditems max=1}
{assign var=text_length value=300}
<header>
<h1 title="{$feeditems[bit].title}"><a href="{$feeditems[bit].link}" title="{$feeditems[bit].title}">{$feeditems[bit].title}</a></h1>
</header>
{if $feeditems[bit].imagepath}
{assign var=text_length value=200}
<figure>
{if $feeditems[bit].imagepath|strstr:'youtu'}
<a href="/blog/" title="{$feeditems[bit].title}"><img src="http://img.youtube.com/vi/m6f1LExFqSI/3.jpg" alt="{$feeditems[bit].title}" style="float:left;width:95px;margin:5px 15px 5px 0px;border:1px solid #999999;width:200px;" /></a>
{else}
<a href="/blog/" title="{$feeditems[bit].title}"><img class="blog_p_img" src="{$feeditems[bit].imagepath}" alt="{$feeditems[bit].title}" /></a>
{/if}
</figure>
{/if}
<div class="blog_p_text">
{$feeditems[bit].content|truncate:$text_length} 
<span class="read_more"><a href="/blog/" title="Read Blog">Read Blog&nbsp;&gt;</a></span>
</div>
<div class="blog_t_text">
{assign var=text_length value=400}
{$feeditems[bit].content|truncate:$text_length} 
<span class="read_more"><a href="/blog/" title="Read Blog">Read Blog&nbsp;&gt;</a></span>
</div>
<div class="clean"></div>
{/section}
</article>

<article id="events">
<header>
<h1 title="News &amp; Events"><a href="/news_events/" title="News &amp; Events">News &amp; Events</a></h1>
</header>
{section name=bit loop=$news}
<div class="event_group">
<div class="event_img">
<a href="/news_events/" title="{$news[bit].title}"><img src="/img/news/thumb/{$news[bit].n_id}.jpg" alt="{$news[bit].title}" /></a>
</div>
<div class="event_text">
<h4 class="bld" title = "{$news[bit].title}">{$news[bit].title}</h4>
{$news[bit].happens} 
<br>{$news[bit].location}
</div>
</div>
<div class="clean"></div>
{/section}
<div id="events_read_more" class="read_more alignRight"><a href="/news_events/" title="See All News &amp; Events">News &amp; Events&nbsp;&gt;</a></div>
</article>

<article id="blog_l">
{section name=bit loop=$feeditems max=1}
<header>
<h1 title="{$feeditems[bit].title}"><a href="{$feeditems[bit].link}" title="{$feeditems[bit].title}">{$feeditems[bit].title}</a></h1>
</header>
{assign var=text_length value=400}
{if $feeditems[bit].imagepath}
{assign var=text_length value=400}
<figure class="blog_l_img">
{if $feeditems[bit].imagepath|strstr:'youtu'}
<a href="/blog/" title="{$feeditems[bit].title}"><img src="http://img.youtube.com/vi/m6f1LExFqSI/3.jpg" alt="{$feeditems[bit].title}" style="float:left;width:95px;margin:5px 15px 5px 0px;border:1px solid #999999;width:200px;" /></a>
{else}
<a href="/blog/" title="{$feeditems[bit].title}"><img src="{$feeditems[bit].imagepath}" alt="{$feeditems[bit].title}" /></a>
{/if}
</figure>
{/if}
<div class="blog_l_text">
{$feeditems[bit].content|truncate:$text_length} <span class="read_more"><a href="/blog/" title="read more">Read Blog&nbsp;&gt;</a></span>
</div>
{/section}
</article>

<article id="follow">
<header>
<h1 title="Follow Us">Follow Us</h1>
</header>
<div id="follow_fb">
<a href="http://www.facebook.com/BlueDanubeWine"><img src="/img/all/f_logo.jpg" alt="Find us on Facebook" /></a><a href="http://www.facebook.com/BlueDanubeWine">Find us on Facebook</a>
</div>
<div id="follow_twit">
<a href="https://twitter.com/bluedanubewine" class="twitter-follow-button" data-show-count="false">Follow @BlueDanubeWine</a>
</div>
<script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
<h4 class="bld" title="Subscribe to our mailing list">Subscribe to our mailing list, get our exclusive offers:</h4>
<div id="follow_mc">
<div id="mc_embed_signup">
<form action="http://bluedanubewine.us5.list-manage.com/subscribe/post?u=1c2b4aea3ee3178c45e4f94ec&amp;id=332a4aac61" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
<div class="mc-field-group">
<label for="mce-EMAIL">Email Address</label>
<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
<label for="mce-FNAME">First Name</label>
<input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
</div>
<div class="mc-field-group">
<label for="mce-LNAME">Last Name</label>
<input type="text" value="" name="LNAME" class="required" id="mce-LNAME">
</div>
<div id="newsletter"><a href="http://us5.campaign-archive2.com/home/?u=1c2b4aea3ee3178c45e4f94ec&id=332a4aac61" title="View our newsletter" target="_blank">View our newsletters &nbsp;&gt;</a></div>
<div id="mce-responses" class="clear">
<div class="response" id="mce-error-response" style="display:none"></div>
<div class="response" id="mce-success-response" style="display:none"></div>
</div>	
<div id="subscribe" class="clear"><button type="submit" value="Subscribe" name="subscribe" class="mce_button" >Subscribe</button></div>
</form>
</div>
</div>
</article>

{literal}
<script type="text/javascript">
var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='JOBTITLE';ftypes[3]='text';fnames[4]='BPHONE';ftypes[4]='text';fnames[5]='CELLULAR';ftypes[5]='text';fnames[6]='BEMAIL';ftypes[6]='text';fnames[7]='BADDRESS';ftypes[7]='text';fnames[8]='PEMAIL';ftypes[8]='text';fnames[9]='HPHONE';ftypes[9]='text';fnames[10]='HADDRESS';ftypes[10]='text';fnames[11]='WEBSITE';ftypes[11]='text';
try {
    var jqueryLoaded=jQuery;
    jqueryLoaded=true;
} catch(err) {
    var jqueryLoaded=false;
}
var head= document.getElementsByTagName('head')[0];
if (!jqueryLoaded) {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
    head.appendChild(script);
    if (script.readyState && script.onload!==null){
        script.onreadystatechange= function () {
              if (this.readyState == 'complete') mce_preload_check();
        }    
    }
}
var script = document.createElement('script');
script.type = 'text/javascript';
script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
head.appendChild(script);
var err_style = '';
try{
    err_style = mc_custom_error_style;
} catch(e){
    err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}';
}
var head= document.getElementsByTagName('head')[0];
var style= document.createElement('style');
style.type= 'text/css';
if (style.styleSheet) {
  style.styleSheet.cssText = err_style;
} else {
  style.appendChild(document.createTextNode(err_style));
}
head.appendChild(style);
setTimeout('mce_preload_check();', 250);

var mce_preload_checks = 0;
function mce_preload_check(){
    if (mce_preload_checks>40) return;
    mce_preload_checks++;
    try {
        var jqueryLoaded=jQuery;
    } catch(err) {
        setTimeout('mce_preload_check();', 250);
        return;
    }
    try {
        var validatorLoaded=jQuery("#fake-form").validate({});
    } catch(err) {
        setTimeout('mce_preload_check();', 250);
        return;
    }
    mce_init_form();
}
function mce_init_form(){
    jQuery(document).ready( function($) {
      var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
      var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
      $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
      options = { url: 'http://bluedanubewine.us5.list-manage.com/subscribe/post-json?u=1c2b4aea3ee3178c45e4f94ec&id=332a4aac61&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
                    beforeSubmit: function(){
                        $('#mce_tmp_error_msg').remove();
                        $('.datefield','#mc_embed_signup').each(
                            function(){
                                var txt = 'filled';
                                var fields = new Array();
                                var i = 0;
                                $(':text', this).each(
                                    function(){
                                        fields[i] = this;
                                        i++;
                                    });
                                $(':hidden', this).each(
                                    function(){
                                        var bday = false;
                                        if (fields.length == 2){
                                            bday = true;
                                            fields[2] = {'value':1970};//trick birthdays into having years
                                        }
                                    	if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
                                    		this.value = '';
									    } else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
                                    		this.value = '';
									    } else {
									        if (/\[day\]/.test(fields[0].name)){
    	                                        this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;									        
									        } else {
   	                                        this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
	                                        }
	                                    }
                                    });
                            });
                        return mce_validator.form();
                    }, 
                    success: mce_success_cb
                };
      $('#mc-embedded-subscribe-form').ajaxForm(options);
      
      
    });
}
function mce_success_cb(resp){
    $('#mce-success-response').hide();
    $('#mce-error-response').hide();
    if (resp.result=="success"){
        $('#mce-'+resp.result+'-response').show();
        $('#mce-'+resp.result+'-response').html(resp.msg);
        $('#mc-embedded-subscribe-form').each(function(){
            this.reset();
    	});
    } else {
        var index = -1;
        var msg;
        try {
            var parts = resp.msg.split(' - ',2);
            if (parts[1]==undefined){
                msg = resp.msg;
            } else {
                i = parseInt(parts[0]);
                if (i.toString() == parts[0]){
                    index = parts[0];
                    msg = parts[1];
                } else {
                    index = -1;
                    msg = resp.msg;
                }
            }
        } catch(e){
            index = -1;
            msg = resp.msg;
        }
        try{
            if (index== -1){
                $('#mce-'+resp.result+'-response').show();
                $('#mce-'+resp.result+'-response').html(msg);            
            } else {
                err_id = 'mce_tmp_error_msg';
                html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
                
                var input_id = '#mc_embed_signup';
                var f = $(input_id);
                if (ftypes[index]=='address'){
                    input_id = '#mce-'+fnames[index]+'-addr1';
                    f = $(input_id).parent().parent().get(0);
                } else if (ftypes[index]=='date'){
                    input_id = '#mce-'+fnames[index]+'-month';
                    f = $(input_id).parent().parent().get(0);
                } else {
                    input_id = '#mce-'+fnames[index];
                    f = $().parent(input_id).get(0);
                }
                if (f){
                    $(f).append(html);
                    $(input_id).focus();
                } else {
                    $('#mce-'+resp.result+'-response').show();
                    $('#mce-'+resp.result+'-response').html(msg);
                }
            }
        } catch(e){
            $('#mce-'+resp.result+'-response').show();
            $('#mce-'+resp.result+'-response').html(msg);
        }
    }
}

</script>
{/literal}

<div class="clean"></div>
