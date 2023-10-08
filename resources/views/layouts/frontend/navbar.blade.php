<!-- Header html Start -->
<header class="header">
    <div class="container">
    <div class="row align-items-center">
        <nav class="navbar navbar-expand-sm navbar-dark">
        <div class="container-fluid mobileView">
            <div class="logo_menu">
            <a class="navbar-brand" onclick="openNav()" href="javascript:void(0)">
                <img src="{{ asset('frontend/images/menu.png')}}" alt="menu" />
            </a>
            
            </div>
            <div class="rightSideBtns">
            <div class="d-flex">
                <a class="phone" href="tel:9710567852822">
                <img src="{{ asset('frontend/images/phoneIcon.png')}}" alt="phone" />
                +971 (0) 56 785 2822</a>
                <div class="wrapBtns">
                <a class="loginbtn" href="{{ route('login') }}">
                    <img src="{{ asset('frontend/images/logoutIcon.png')}}" alt="login" /> Login
                </a>
                <a class="signupBtn" href="{{ route('register') }}">
                    <img src="{{ asset('frontend/images/userIcon.png')}}" alt="userIcon" /> Sign up
                </a>
                </div>
            </div>
            </div>
        </div>
    </div>
    </nav>
    </div>
    <!-- Mobile Menu start-->
    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">Home</a>
    <a href="#">Shop</a>    
    <a href="#">About Us</a>
    </div>
    <!-- Mobile Menu End-->
</header>
<!-- Header html End -->