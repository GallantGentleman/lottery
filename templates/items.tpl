<h1 style="text-align: center;">Товары</h1>
<div id="wrapper">
{% for item in items %}
  <div id="item">
    <div class="item-title">
      <h3>{{item.title}}<h3>
    </div>
    <div class="item-image">
      <a href="?product={{item.id}}">
        <img src="http://gallant.zzz.com.ua/uploads/{{item.image}}" class="i_img" alt="{{item.title}}">
      </a>
    </div>
    <div class="item-describe">{{item.description}}</div>
    <div class="item-status">
      7/10
      <div class="item-fill" style="width: {{item.id}}0%;border-radius: 0 0 {% if item.id == 10 %} 6px {% else %} 0px {% endif %} 6px;">
      </div>
    </div>
    <div class="item-buy"><button class="item-button">Купить</button></div>
  </div>
{% endfor %}
</div>
