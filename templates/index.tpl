<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LOL</title>
    <link rel="stylesheet" href="css/lottery.css" type="text/css">
  </head>
  <body>
      {% if template == 'item' %}

        {% include "item.tpl" %}

      {% else %}
        {% include "items.tpl" %}
      {% endif %}
  </body>
</html>
