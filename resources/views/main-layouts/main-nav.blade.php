<nav>
    <div class="nav-container" >
        <div onclick="window.location.href = '/';" class="right-nav">
            <img src = "{{ asset('svg/tonight-logo.svg')}}"/>
        </div>
        <div class="burger-header">
            <i class="fa-solid fa-bars" id="openSidebar"></i>
            <div onclick="window.location.href = '/';" class="burger-nav-logo">
                <img src = "{{ asset('svg/tonight-logo.svg')}}"/>
            </div>
        </div>
        <div class="left-nav">
            <ul>
                <li onclick="window.location.href = '/list-your-business';">list your business</li>
                <li onclick="window.location.href = '/terms-conditions';">terms & conditions</li>
                <li onclick="window.location.href = '/privacy-policy';">privacy policy</li>
            </ul>
        </div>
    </div>
</nav>