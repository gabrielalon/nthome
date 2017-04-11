<div class="span11">

    <div id="footer-menu-links">

        <ul id="footer-nav">

            {% for menu_link, menu_name in menu %}
                <li>{{ navigation.linkTo(menu_link, menu_name) }}</li>
            {% endfor %}

        </ul>

    </div>

</div>