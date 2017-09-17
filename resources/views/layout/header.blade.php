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
                                    </a>
                                </li>
                                <li class="sj-register">
                                    <a class="register-switch text-font" href="index.php/joomla-pages/2013-02-21-09-25-47/register.html">
                                        Register</a>
                                </li>
                            </ul>
                            <ul class="sj-login-regis">

                                <li class="sj-register">
                                     @if(Auth::check())
                                        <a class="register-switch text-font" href="{{ route('dangxuat') }}">
                                            <span class="title-link">Đăng xuất</span>
                                        </a>
                                    @else
                                        <a class="register-switch text-font" href="index.php/joomla-pages/2013-02-21-09-25-47/register.html">
                                            <span class="title-link">Đăng kí</span>
                                        </a>
                                    @endif
                                </li>
                                
                                <li class="sj-login">
                                     @if(Auth::check())
                                    <a href="javascript:void(0)" role="button" class="login-switch text-font" title="" >
                                        <span class="title-link">
                                          {{Auth::user()->full_name}}
                                           
                                        </span>
                                    </a>
                                    @else
                                         <a href="#mod-login" role="button" class="login-switch text-font" title="" data-toggle="modal">
                                            <span class="title-link">
                                          Đăng nhập
                                           
                                        </span>
                                    </a>
                                     @endif  
                                    <div id="mod-login" class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                        </div>
                                        <div id="sj_login_box" class="show-box">
                                            <div class="sj_box_inner">
                                                <div class="sj_box_title">
                                                    <h3>Đăng nhâp</h3>
                                                </div>
                                                <div class="sj_box_content">
                                                    <form id="login_form" action="{{route('login')}}" method="post">
                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                        <fieldset class="userdata">
                                                            <div class="login_input">
                                                                <p>
                                                                    <label for="modlgn-username" class="sj-login-user">
                                                                        <span>&nbsp;</span>
                                                                        <input id="modlgn-username" required type="text" name="email" class="inputbox" size="25" placeholder="Email address">
                                                                        <a href="index.php/using-joomla/extensions/components/users-component/username-reminder.html" title="Forgot your username?">
                                                                            <span>?</span></a>
                                                                    </label>
                                                                </p>
                                                                <p>
                                                                    <label for="modlgn-passwd" class="sj-login-password">
                                                                        <span>&nbsp;</span><input required id="modlgn-passwd" type="password" name="password" class="inputbox" size="25" placeholder="Password">
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
                    <ul id="meganavigator" class="navi">
                        <li class="active level1 first" style="float: left;">
                            <a class=" level1 first item-link" href="{{ route('trang-chu') }}"><span class="menu-title">Home</span></a>	
                        </li>

                        

                    </ul>	
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