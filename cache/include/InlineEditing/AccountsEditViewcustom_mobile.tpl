
{if strlen($fields.custom_mobile.value) <= 0}
{assign var="value" value=$fields.custom_mobile.default_value }
{else}
{assign var="value" value=$fields.custom_mobile.value }
{/if}  
<input type='text' name='{$fields.custom_mobile.name}' 
    id='{$fields.custom_mobile.name}' size='30' 
    maxlength='510' 
    value='{$value}' title=''  tabindex='1'      >