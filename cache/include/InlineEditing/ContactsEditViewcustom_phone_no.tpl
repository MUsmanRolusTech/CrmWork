
{if strlen($fields.custom_phone_no.value) <= 0}
{assign var="value" value=$fields.custom_phone_no.default_value }
{else}
{assign var="value" value=$fields.custom_phone_no.value }
{/if}  
<input type='text' name='{$fields.custom_phone_no.name}' 
    id='{$fields.custom_phone_no.name}' size='30' 
    maxlength='24' 
    value='{$value}' title=''  tabindex='1'      >