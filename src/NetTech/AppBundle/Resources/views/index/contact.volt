<!-- start: Contact Info -->
<div class="span5">
    <div class="title"><h3>Dane kontaktowe</h3></div>
    <p>
        <b>Net Tech Sp. z o.o.</b>
    </p>
    <p>
        Reptowska 78/18
    </p>
    <p>
        41-923 Bytom
    </p>
    <p>
        Phone: +48 690 414 353
    </p>
    <p>
        Email: <a href="mailto:mrode@net-te.ch">mrode@net-te.ch</a>
    </p>
    <p>
        Strona: {{ link_to(['for': 'home'], 'net-te.ch') }}
    </p>
</div>
<!-- end: Contact Info -->

<!-- start: Contact Form -->
<div class="span6">
    <div class="title"><h3>Formularz kontaktowy</h3></div>

    <!-- start: Contact Form -->
    <div id="contact-form">

        <form action="/contact" method="post">

            <fieldset>
                {% for element in form %}
                    {{ form.renderDecorated(element.getName()) }}
                {% endfor %}

                <div class="actions">
                    <input tabindex="3" type="submit" class="btn btn-succes btn-large" value="Wyślij"/>
                </div>
            </fieldset>

        </form>

    </div>
    <!-- end: Contact Form -->

</div>
<!-- end: Contact Form -->

<div class="clear"></div>

<!-- start: Social Sites -->
{#<div class="span5">#}
    {#<div class="title"><h3>Follow US!</h3></div>#}
    {#<ul class="social-bookmarks">#}
        {#<li class="aim"><a href="#">aim</a></li>#}
        {#<li class="apple"><a href="#">apple</a></li>#}
        {#<li class="behance"><a href="#">behance</a></li>#}
        {#<li class="blogger"><a href="#">blogger</a></li>#}
        {#<li class="cargo"><a href="#">cargo</a></li>#}
        {#<li class="delicious"><a href="#">delicious</a></li>#}
        {#<li class="deviantart"><a href="#">deviantart</a></li>#}
        {#<li class="digg"><a href="#">digg</a></li>#}
        {#<li class="dopplr"><a href="#">dopplr</a></li>#}
        {#<li class="dribbble"><a href="#">dribbble</a></li>#}
        {#<li class="ember"><a href="#">ember</a></li>#}
        {#<li class="evernote"><a href="#">evernote</a></li>#}
        {#<li class="facebook"><a href="https://www.facebook.com/brankic1979themes">facebook</a></li>#}
        {#<li class="flickr"><a href="http://www.flickr.com/photos/brankic1979/">flickr</a></li>#}
        {#<li class="forrst"><a href="#">forrst</a></li>#}
        {#<li class="github"><a href="#">github</a></li>#}
        {#<li class="google"><a href="#">google</a></li>#}
        {#<li class="googleplus"><a href="#">googleplus</a></li>#}
        {#<li class="gowalla"><a href="#">gowalla</a></li>#}
        {#<li class="grooveshark"><a href="#">grooveshark</a></li>#}
        {#<li class="html5"><a href="#">html5</a></li>#}
        {#<li class="icloud"><a href="#">icloud</a></li>#}
        {#<li class="lastfm"><a href="#">lastfm</a></li>#}
        {#<li class="linkedin"><a href="#">linkedin</a></li>#}
        {#<li class="metacafe"><a href="#">metacafe</a></li>#}
        {#<li class="mixx"><a href="#">mixx</a></li>#}
        {#<li class="myspace"><a href="#">myspace</a></li>#}
        {#<li class="netvibes"><a href="#">netvibes</a></li>#}
        {#<li class="newsvine"><a href="#">newsvine</a></li>#}
        {#<li class="orkut"><a href="#">orkut</a></li>#}
        {#<li class="paypal"><a href="#">paypal</a></li>#}
        {#<li class="picasa"><a href="#">picasa</a></li>#}
        {#<li class="pinterest"><a href="#">pinterest</a></li>#}
        {#<li class="plurk"><a href="#">plurk</a></li>#}
        {#<li class="posterous"><a href="#">posterous</a></li>#}
        {#<li class="reddit"><a href="#">reddit</a></li>#}
        {#<li class="rss"><a href="#">rss</a></li>#}
        {#<li class="skype"><a href="#">skype</a></li>#}
        {#<li class="stumbleupon"><a href="#">stumbleupon</a></li>#}
        {#<li class="technorati"><a href="#">technorati</a></li>#}
        {#<li class="tumblr"><a href="#">tumblr</a></li>#}
        {#<li class="twitter"><a href="#">twitter</a></li>#}
        {#<li class="vimeo"><a href="#">vimeo</a></li>#}
        {#<li class="wordpress"><a href="#">wordpress</a></li>#}
        {#<li class="yahoo"><a href="#">yahoo</a></li>#}
        {#<li class="yelp"><a href="#">yelp</a></li>#}
        {#<li class="youtube"><a href="#">youtube</a></li>#}
        {#<li class="zerply"><a href="#">zerply</a></li>#}
        {#<li class="zootool"><a href="#">zootool</a></li>#}
    {#</ul>#}
{#</div>#}
<!-- end: Social Sites -->
				