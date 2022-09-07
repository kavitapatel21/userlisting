<?php
$url = esc_url( $_SERVER['REQUEST_URI']);

$error = !empty($data['errors']['name'])
   ? '<div class="error"> ' . $data['errors']['name'] . '</div>' 
   : '';

$name = isset($data['name']) ? $data['name'] : '';

echo <<< FORM
<form action="{$url}" method="post">
  Name <input type="text" name="data[name]" value="{$name}">
  {$error}
  <input type="submit" />
</form>

FORM;