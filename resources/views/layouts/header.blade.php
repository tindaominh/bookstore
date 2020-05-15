<header>
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">BOOKSTORE</a>
            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html"><i class="fa fa-home">Trang Chủ</i></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Features <b class=" icon-angle-down"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="components.html">Components</a></li>
                            <li><a href="pricingbox.html">Pricing box</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('book.index')}}">Portfolio</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="{{route('contact.index')}}">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>