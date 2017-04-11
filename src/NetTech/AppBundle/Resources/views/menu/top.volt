<div class="span9">

    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="nav-collapse collapse">
                <ul class="nav">
                    {% for menu_link, menu_name in menu %}
                        <li {% if navigation.isActive(menu_link) %}class="active"{% endif %}>
                            {{ navigation.linkTo(menu_link, menu_name) }}
                        </li>
                    {% endfor %}
                    {#<li class="dropdown">#}
                    {#<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>#}
                    {#<ul class="dropdown-menu">#}
                    {#<li><a href="#">Action</a></li>#}
                    {#<li><a href="#">Another action</a></li>#}
                    {#<li><a href="#">Something else here</a></li>#}
                    {#<li class="divider"></li>#}
                    {#<li class="nav-header">Nav header</li>#}
                    {#<li><a href="#">Separated link</a></li>#}
                    {#<li><a href="#">One more separated link</a></li>#}
                    {#</ul>#}
                    {#</li>#}
                </ul>
            </div>
        </div>
    </div>

</div>