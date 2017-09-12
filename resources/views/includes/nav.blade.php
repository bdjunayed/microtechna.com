<nav>
  <ul class="nav {{include.navclass}}">
    <li><a href="{{site.baseurl}}" class="{% if page.url == '/' %}current{% endif %}">Home</a></li>
    <li><a href="{{site.baseurl}}planets/" class="{% if page.url contains 'planets' %}current{% endif %}">Planets</a></li>
    <li><a href="{{site.baseurl}}news/" class="{% if page.url contains 'news' or page.url contains 'recently-discovered' %}current{% endif %}">News</a></li>
  </ul>
</nav>
