<a id="top" name="scroll-to-top"></a>
<header id="yt_header" class="block pattern_1">
    <div class="yt-main">
        <div class="yt-main-in1 container">
            <div class="yt-main-in2 row-fluid">
                <div id="position-0" class="offset2 span6">
                    <!--<div class="yt-position-inner">-->
                    <div class="module">
                        <div class="modcontent clearfix">
                            <ul class="mobi-sj-login-regis" style="display: none">
                                <li class="sj-login">
                                    <a class="login-switch text-font" href="index.php/joomla-pages/2013-02-21-09-25-47/login-form.html" title="">
                                        Log in        </a>
                                </li>
                                <li class="sj-register">
                                    <a class="register-switch text-font" href="index.php/joomla-pages/2013-02-21-09-25-47/register.html">
                                        Register        </a>
                                </li>
                            </ul>
                            <ul class="sj-login-regis">

                                <li class="sj-register">
                                    <a class="register-switch text-font" href="index.php/joomla-pages/2013-02-21-09-25-47/register.html">
                                        <span class="title-link">Create an Account</span>
                                    </a>
                                </li>

                                <li class="sj-login">
                                    <a href="#mod-login" role="button" class="login-switch text-font" title="" data-toggle="modal">
                                        <span class="title-link">Log in</span>
                                    </a>
                                    <div id="mod-login" class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                        </div>
                                        <div id="sj_login_box" class="show-box">
                                            <div class="sj_box_inner">
                                                <div class="sj_box_title">
                                                    <h3>Sign In</h3>
                                                </div>
                                                <div class="sj_box_content">
                                                    <form id="login_form" action="http://demo.smartaddons.com/public/source/templates/joomla3/sj-bakery/index.php" method="post">
                                                        <fieldset class="userdata">
                                                            <div class="login_input">
                                                                <p>
                                                                    <label for="modlgn-username" class="sj-login-user">
                                                                        <span>&nbsp;</span>
                                                                        <input id="modlgn-username" type="text" name="username" class="inputbox" size="25" placeholder="Username">
                                                                        <a href="index.php/using-joomla/extensions/components/users-component/username-reminder.html" title="Forgot your username?">
                                                                            <span>?</span></a>
                                                                    </label>
                                                                </p>
                                                                <p>
                                                                    <label for="modlgn-passwd" class="sj-login-password">
                                                                        <span>&nbsp;</span><input id="modlgn-passwd" type="password" name="password" class="inputbox" size="25" placeholder="Password">
                                                                        <a href="index.php/using-joomla/extensions/components/users-component/password-reset.html" title="Forgot your password?">
                                                                            <span>?</span></a>
                                                                    </label>
                                                                </p>
                                                            </div>
                                                            <div class="login_button">
                                                                <p id="form_login_remember">
                                                                    <input id="modlgn-remember" type="checkbox" name="remember" class="checkbox" value="yes">
                                                                    <label for="modlgn-remember">Remember Me</label>
                                                                </p>
                                                                <div class="button2">
                                                                    <input type="submit" name="Submit" class="button" value="Log in">
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="option" value="com_users">
                                                            <input type="hidden" name="task" value="user.login">
                                                            <input type="hidden" name="return"
                                                                   value="aW5kZXgucGhwP29wdGlvbj1jb21fY29udGVudCZ2aWV3PWZlYXR1cmVkJkl0ZW1pZD00MzU=">
                                                            <input type="hidden" name="2ae1c06912d25cf3fbbe328a5bbb0ccb" value="1">							</fieldset>
                                                        <div class="more_login sj-login-links clearfix">


                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>


                    </div>
                    <div class="module cart blank">

                        <div class="modcontent clearfix">
                            <!-- Default of smart -->
                            <div class="vmCartModule  cart blank" id="vmCartModule">
                                <h3 class="title"><a href="{{ route('dathang') }}">Giỏ hàng</a></h3>


                                <div class="total_products gio-hang-tb">(@if(Session::has('cart'))
                                {{Session('cart')->totalQty}}
                                        @else 0
                                    @endif)</div>

                                <noscript>
                                Please wait	
                                </noscript>
                            </div>

                           
                        </div>
                    </div>
                </div>
                <div id="position-1" class="span4">
                    <!--<div class="yt-position-inner">-->
                    <!--BEGIN Search Box -->
                    <form action="http://demo.smartaddons.com/public/source/templates/joomla3/sj-bakery/index.php/specialty-cake/search" method="get" class="form-search">
                        <div class="search finder ">
                            <input name="keyword" id="mod_virtuemart_search" maxlength="20" class="inputbox search-query input-medium icon-search" 
                                   type="text" size="20" value="" placeholder="Search...">
                            <button type="submit" value="Search" class="button finder " onclick="this.form.keyword.focus();"><i class="icon-search icon-white"></i> 
                            </button>
                        </div>
                        <input type="hidden" name="limitstart" value="0">
                        <input type="hidden" name="option" value="com_virtuemart">
                        <input type="hidden" name="view" value="category">
                        <input type="hidden" name="virtuemart_category_id" value="0">
                    </form>

                    <!-- End Search Box -->

                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
</header>
<section id="yt_menuwrap" class="block">
    <div class="yt-main">
        <div class="yt-main-in1 container">
            <div class="yt-main-in2 row-fluid">
                <div id="yt_logoposition">
                    <h1 class="logo">
                        <a href="index-2.html" title="SmartAddons.Com">
                            <img alt="SmartAddons.Com" src="public/source/templates/sj_bakery/images/logo.png">
                        </a>
                    </h1>
                </div>
                <div id="yt_menuposition" class="span10 offset2">
                    <ul id="meganavigator" class="navi"><li class="active level1 first" style="float: left;">
                            <a class=" level1 first item-link" href="{{ route('trang-chu') }}"><span class="menu-title">Home</span></a>	
                        </li>

                        <li class="level1 havechild" style="float: left;">
                            <a class="level1 havechild item-link" href="index.php/explore.html"><span class="menu-title">Explore</span></a>	
                            <!-- open mega-content div -->
                            <div class="level2 mega-content" style="display: none; top: 72px; left: 0px;">

                                <div class="mega-content-inner" style="opacity: 0;">

                                    <div class="mega-col first one">
                                        <ul class="subnavi level2"><li class="level2 first">
                                                <a class="level2 first item-link" href="index.php/explore/module-variations.html">
                                                    <span class="menu-title">Module Variations</span></a>	
                                            </li>

                                            <li class="level2">
                                                <a class="level2 item-link" href="index.php/explore/extenstions.html">
                                                    <span class="menu-title">Extensions</span></a>	
                                            </li>

                                            <li class="level2">
                                                <a class="level2 item-link" href="index.php/explore/module-positions.html">
                                                    <span class="menu-title">Module positions</span></a>	
                                            </li>

                                            <li class="level2">
                                                <a class="level2 item-link" href="index.php/explore/typography.html">
                                                    <span class="menu-title">Typography</span></a>	
                                            </li>

                                            <li class="level2 last">
                                                <a class="level2 last item-link" href="index.php/explore/404-page.html">
                                                    <span class="menu-title">404 page</span></a>	
                                            </li>

                                        </ul>					</div>

                                </div>
                            </div>
                        </li>

                        <li class="level1 havechild" style="float: left;">
                            <a class="level1 havechild item-link" href="index.php/joomla-pages.html"><span class="menu-title">Joomla Pages</span></a>	
                            <!-- open mega-content div -->
                            <div class="level2 mega-content" style="display: none;">

                                <div class="mega-content-inner" style="width:400px">

                                    <div class="mega-col first more" style="width:200px;">
                                        <div class="mega-group">
                                            <div class="mega-group-title">
                                                <a class="level2 item-link" href="index.php/joomla-pages/joomla-content/category-blog.html">
                                                    <span class="menu-title">Default Pages</span></a>	</div>
                                            <div class="mega-group-content">
                                                <ul class="subnavi level3" style="width:200px;">
                                                    <li class="level3 first">
                                                        <a class="level3 first item-link" href="index.php/joomla-pages/2013-02-21-09-25-47/login-form.html">
                                                            <span class="menu-title">Login Form</span></a>	
                                                    </li>

                                                    <li class="level3">
                                                        <a class="level3 item-link" href="index.php/joomla-pages/2013-02-21-09-25-47/register.html">
                                                            <span class="menu-title">Registration Form</span></a>	
                                                    </li>

                                                    <li class="level3">
                                                        <a class="level3 item-link" href="index.php/contact-us-2.html"><span class="menu-title">Contact Us</span>
                                                        </a>	
                                                    </li>

                                                    <li class="level3">
                                                        <a class="level3 item-link" href="index.php/joomla-pages/2013-02-21-09-25-47/smart-seach.html">
                                                            <span class="menu-title">Smart Seach</span></a>	
                                                    </li>

                                                    <li class="level3 last">
                                                        <a class="level3 last item-link" href="index.php/joomla-pages/2013-02-21-09-25-47/weblinks.html">
                                                            <span class="menu-title">Weblinks</span></a>	
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>					</div>
                                    <div class="mega-col last more" style="width:200px;">
                                        <div class="mega-group">
                                            <div class="mega-group-title">
                                                <a class="level2 item-link" href="index.php/joomla-pages/joomla-content.html">
                                                    <span class="menu-title">Joomla content</span>
                                                </a>
                                            </div>
                                            <div class="mega-group-content">
                                                <ul class="subnavi level3" style="width:200px;">
                                                    <li class="level3 first">
                                                        <a class="level3 first item-link" href="index.php/joomla-pages/joomla-content/page-break-example.html">
                                                            <span class="menu-title">Page break example</span></a>	
                                                    </li>

                                                    <li class="level3">
                                                        <a class="level3 item-link" href="index.php/joomla-pages/joomla-content/category-blog.html">
                                                            <span class="menu-title">Category Blog</span></a>	
                                                    </li>

                                                    <li class="level3">
                                                        <a class="level3 item-link" href="index.php/joomla-pages/joomla-content/single-article.html">
                                                            <span class="menu-title">Single Article</span></a>	
                                                    </li>

                                                    <li class="level3">
                                                        <a class="level3 item-link" href="index.php/joomla-pages/joomla-content/list-all-categories.html">
                                                            <span class="menu-title">List All Categories</span></a>	
                                                    </li>

                                                    <li class="level3">
                                                        <a class="level3 item-link" href="index.php/joomla-pages/joomla-content/category-list.html">
                                                            <span class="menu-title">Category List</span></a>	
                                                    </li>

                                                    <li class="level3 last">
                                                        <a class="level3 last item-link" href="index.php/joomla-pages/joomla-content/archived-articles.html">
                                                            <span class="menu-title">Archived Articles</span></a>	
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>					</div>

                                </div>
                            </div>
                        </li>

                        <li class="level1 havechild" style="float: left;">
                            <a class="level1 havechild item-link" href="index.php/virtuemart.html"><span class="menu-title">Virtuemart</span></a>	
                            <!-- open mega-content div -->
                            <div class="level2 mega-content" style="display: none;">

                                <div class="mega-content-inner" style="width:540px">

                                    <div class="mega-col first more" style="width:200px;">
                                        <div class="mega-group">
                                            <div class="mega-group-title">
                                                <a class="level2 item-link" href="index.php/virtuemart/categories.html">
                                                    <span class="menu-title">Categories</span></a>	</div>
                                            <div class="mega-group-content">
                                                <ul class="subnavi level3" style="width:200px;">
                                                    <li class="level3 first">
                                                        <a class="level3 first item-link" href="index.php/paris-gateaux.html">
                                                            <span class="menu-title">Paris Gateaux</span></a>	
                                                    </li>

                                                    <li class="level3">
                                                        <a class="level3 item-link" href="index.php/fruits-cake.html">
                                                            <span class="menu-title">Fruits Cake</span></a>	
                                                    </li>

                                                    <li class="level3 last">
                                                        <a class="level3 last item-link" href="index.php/valentine-cake.html">
                                                            <span class="menu-title">Valentine Cake</span></a>	
                                                    </li>

                                                </ul>
                                            </div>
                                        </div><div class="mega-group">
                                            <div class="mega-group-title">
                                                <div class="level2 item-link separator"><span class="menu-title">Other Pages</span></div>	</div>
                                            <div class="mega-group-content">
                                                <ul class="subnavi level3" style="width:200px;">
                                                    <li class="level3 first">
                                                        <a class="level3 first item-link" href="index.php/virtuemart/other-pages/product-detail.html">
                                                            <span class="menu-title">Product detail</span></a>	
                                                    </li>

                                                    <li class="level3">
                                                        <a class="level3 item-link" href="index.php/virtuemart/other-pages/shopping-cart.html">
                                                            <span class="menu-title">Shopping Cart</span></a>	
                                                    </li>

                                                    <li class="level3">
                                                        <a class="level3 item-link" href="index.php/virtuemart/other-pages/account-maintenance.html">
                                                            <span class="menu-title">Account Maintenance </span></a>	
                                                    </li>

                                                    <li class="level3">
                                                        <a class="level3 item-link" href="index.php/virtuemart/other-pages/list-orders.html">
                                                            <span class="menu-title">List Orders</span></a>	
                                                    </li>

                                                    <li class="level3 last">
                                                        <a class="level3 last item-link" href="index.php/virtuemart/other-pages/vendor-contact.html">
                                                            <span class="menu-title">Displays Vendor Contact</span></a>	
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>					</div>
                                    <div class="mega-col last more" style="width:340px;">
                                        <div class="mega-group">
                                            <div class="mega-group-title">
                                                <a class="level2 item-link" href="index.php/virtuemart/categories-layout.html">
                                                    <span class="menu-title">Category Layouts</span></a>	</div>
                                            <div class="mega-group-content">
                                                <ul class="subnavi level3" style="width:340px;">
                                                    <li class="level3 first">
                                                        <a class="level3 first item-link" href="index.php/virtuemart/categories-layout/product-items-one-column.html">
                                                            <span class="menu-title">Product items (one column)</span></a>	
                                                    </li>

                                                    <li class="level3">
                                                        <a class="level3 item-link" href="index.php/virtuemart/categories-layout/product-items-two-column.html">
                                                            <span class="menu-title">Product items (two columns)</span></a>	
                                                    </li>

                                                    <li class="level3 last">
                                                        <a class="level3 last item-link" href="index.php/virtuemart/categories-layout/product-items-three-columns.html">
                                                            <span class="menu-title">Product items (three columns)</span></a>	
                                                    </li>

                                                </ul>
                                            </div>
                                        </div><div class="mega-group">
                                            <div class="mega-group-title">
                                                <div class="level2 item-link separator"><span class="menu-title">Example Products</span>
                                                </div>
                                            </div>
                                            <div class="mega-group-content">
                                                <div class="mega-module mega-product moduletable mega-product">

                                                    <div class="mega-module-content">
                                                        <!--[if lt IE 9]><div class="sj-virtuemart msie lt-ie9" id="sj-virturemart1387611551504586969"><![endif]-->
                                                        <!--[if IE 9]><div class="sj-virtuemart msie" id="sj-virturemart1387611551504586969"><![endif]-->
                                                        <div class="sj-virtuemart" id="sj-virturemart1387611551504586969"><!--<![endif]-->
                                                            <div class="item-wrap preset00-3 preset01-3 preset02-3 preset03-2 preset04-1">
                                                                <div class="item-element ">
                                                                    <div class="item-inner vm-item" style="position:relative">
                                                                        <div class="item-image">
                                                                            <a href="index.php/fruits-cake/fate-rinus-late-detail.html" title="Fate rinus late">
                                                                                <img src="public/source/cache/resized/d996b61574b34a66f08049ff6bbb9247.jpg" alt="Fate rinus late" title="Fate rinus late">
                                                                            </a>
                                                                        </div>
                                                                        <div class="yt-main-content">
                                                                            <div class="item-title">
                                                                                <a href="index.php/fruits-cake/fate-rinus-late-detail.html" title="Fate rinus late">
                                                                                    Fate rinus late                        
                                                                                </a>
                                                                            </div>
                                                                            <div class="item-price">
                                                                                <div class="PricesalesPrice vm-display vm-price-value">
                                                                                    <span class="vm-price-desc">Price: </span>
                                                                                    <span class="PricesalesPrice">38,72 €</span></div>
                                                                            </div>
                                                                            <div class="vote">
                                                                            </div>
                                                                            <div class="item-b">
                                                                            </div>
                                                                        </div></div>
                                                                </div>
                                                                <div class="clr1"></div>
                                                                <div class="item-element ">
                                                                    <div class="item-inner vm-item" style="position:relative">
                                                                        <div class="item-image">
                                                                            <a href="index.php/fruits-cake/tika-chakin-zase-detail.html" title="Tika chakin zase">
                                                                                <img src="public/source/cache/resized/be50e7fcd650f2fee66ce76c5aa41094.jpg"
                                                                                     alt="Tika chakin zase" title="Tika chakin zase">
                                                                            </a>
                                                                        </div>
                                                                        <div class="yt-main-content">
                                                                            <div class="item-title">
                                                                                <a href="index.php/fruits-cake/tika-chakin-zase-detail.html" title="Tika chakin zase">
                                                                                    Tika chakin zase                        </a>
                                                                            </div>
                                                                            <div class="item-price">
                                                                                <div class="PricesalesPrice vm-display vm-price-value">
                                                                                    <span class="vm-price-desc">Price: </span>
                                                                                    <span class="PricesalesPrice">90,75 €</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vote">
                                                                            </div>
                                                                            <div class="item-b">
                                                                            </div>
                                                                        </div></div>
                                                                </div>
                                                                <div class="clr1 clr2"></div>
                                                                <div class="item-element ">
                                                                    <div class="item-inner vm-item" style="position:relative">
                                                                        <div class="item-image">
                                                                            <a href="index.php/fruits-cake/pite-ruka-case-detail.html" title="Pite ruka case">
                                                                                <img src="public/source/cache/resized/d90e92476d22a411eb5da7f367347304.jpg"
                                                                                     alt="Pite ruka case" title="Pite ruka case">
                                                                            </a>
                                                                        </div>
                                                                        <div class="yt-main-content">
                                                                            <div class="item-title">
                                                                                <a href="index.php/fruits-cake/pite-ruka-case-detail.html" title="Pite ruka case">
                                                                                    Pite ruka case 
                                                                                </a>
                                                                            </div>
                                                                            <div class="item-price">
                                                                                <div class="PricesalesPrice vm-display vm-price-value">
                                                                                    <span class="vm-price-desc">Price: </span>
                                                                                    <span class="PricesalesPrice">104,06 €</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vote">

                                                                            </div>
                                                                            <div class="item-b">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="clr1 clr3"></div>
                                                            </div>
                                                        </div>
                                                        <script type="text/javascript">
                                                            //<![CDATA[
                                                            jQuery(document).ready(function ($) {
                                                                if (typeof Virtuemart !== 'undefined') {
                                                                    Virtuemart.addtocart_popup = "1";
                                                                    usefancy = "1";
                                                                    vmLang = "";
                                                                    window.vmSiteurl = "index.html";
                                                                }
                                                            });
                                                            //]]>
                                                        </script>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="level1 havechild" style="float: left;">
                            <a class="level1 havechild item-link" href="index.php/our-cake.html"><span class="menu-title">Our Cake</span></a>	
                            <!-- open mega-content div -->
                            <div class="level2 mega-content" style="display: none;">

                                <div class="mega-content-inner">

                                    <div class="mega-col first one">
                                        <ul class="subnavi level2"><li class="level2 first havechild">
                                                <a class="level2 first havechild item-link" href="index.php/our-cake/birtday-cake.html"><span class="menu-title">Birtday Cake</span></a>	
                                                <!-- open mega-content div -->
                                                <div class="level3 mega-content" style="display: none;">

                                                    <div class="mega-content-inner">

                                                        <div class="mega-col first one">
                                                            <ul class="subnavi level3"><li class="level3 first">
                                                                    <a class="level3 first item-link" href="#"><span class="menu-title">SubMenu 1</span></a>	
                                                                </li>

                                                                <li class="level3">
                                                                    <a class="level3 item-link" href="#"><span class="menu-title">SubMenu 1</span></a>	
                                                                </li>

                                                                <li class="level3 last">
                                                                    <a class="level3 last item-link" href="#"><span class="menu-title">SubMenu 2</span></a>	
                                                                </li>

                                                            </ul>					</div>

                                                    </div>
                                                </div>
                                            </li>

                                            <li class="level2">
                                                <a class="level2 item-link" href="index.php/our-cake/valentine-cake.html"><span class="menu-title">Valentine Cake</span></a>	
                                            </li>

                                            <li class="level2">
                                                <a class="level2 item-link" href="index.php/our-cake/christmas-cake.html"><span class="menu-title">Christmas Cake</span></a>	
                                            </li>

                                            <li class="level2">
                                                <a class="level2 item-link" href="index.php/our-cake/fruits-cake.html"><span class="menu-title">Fruits Cake</span></a>	
                                            </li>

                                            <li class="level2 last">
                                                <a class="level2 last item-link" href="index.php/our-cake/wedding-cake.html"><span class="menu-title">Wedding Cake</span></a>	
                                            </li>

                                        </ul>					</div>

                                </div>
                            </div>
                        </li>

                        <li class="level1 last" style="float: left;">
                            <a class="level1 last item-link" href="index.php/contact-us-2.html"><span class="menu-title">Contact Us</span></a>	
                        </li>

                    </ul>	<script type="text/javascript">
                        jQuery(function ($) {
                            $('#meganavigator').megamenu({
                                'wrap': '#meganavigator',
                                'easing': 'easeOutSine',
                                'speed': '400',
                                'justify': 'left'
                            });
                        });
                    </script>
                    <select id="yt-mobilemenu" name="menu" onchange="MobileRedirectUrl()">
                        <option selected="selected" value="index.html">Home</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/explore">Explore</option>                
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/explore/module-variations">-- Module Variations</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/explore/extenstions">-- Extensions</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/explore/module-positions">-- Module positions</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/explore/typography">-- Typography</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/explore/404-page">-- 404 page</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/joomla-pages">Joomla Pages</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/joomla-pages/joomla-content/category-blog">-- Default Pages</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/joomla-pages/2013-02-21-09-25-47/login-form">---- Login Form</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/joomla-pages/2013-02-21-09-25-47/register">---- Registration Form</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/contact-us-2">---- Contact Us</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/joomla-pages/2013-02-21-09-25-47/smart-seach">---- Smart Seach</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/joomla-pages/2013-02-21-09-25-47/weblinks">---- Weblinks</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/joomla-pages/joomla-content">-- Joomla content</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/joomla-pages/joomla-content/page-break-example">---- Page break example</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/joomla-pages/joomla-content/category-blog">---- Category Blog</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/joomla-pages/joomla-content/single-article">---- Single Article</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/joomla-pages/joomla-content/list-all-categories">---- List All Categories</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/joomla-pages/joomla-content/category-list">---- Category List</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/joomla-pages/joomla-content/archived-articles">---- Archived Articles</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/virtuemart">Virtuemart</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/virtuemart/categories">-- Categories</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/paris-gateaux">---- Paris Gateaux</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/fruits-cake">---- Fruits Cake</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/valentine-cake">---- Valentine Cake</option>
                        <option value="#1">-- Other Pages</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/virtuemart/other-pages/product-detail">---- Product detail</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/virtuemart/other-pages/shopping-cart">---- Shopping Cart</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/virtuemart/other-pages/account-maintenance">---- Account Maintenance </option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/virtuemart/other-pages/list-orders">---- List Orders</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/virtuemart/other-pages/vendor-contact">---- Displays Vendor Contact</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/virtuemart/categories-layout">-- Category Layouts</option>
                        <option value="/public/source/templates/joomla3/sj-bakery/index.php/virtuemart/categories-layout/product-items-one-column">---- Product items (one column)</option>
                        </select>
                </div>
            </div>
        </div>
    </div>
</section>