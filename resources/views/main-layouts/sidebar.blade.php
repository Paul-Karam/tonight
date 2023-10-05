<div class="sidebar">
    <div class="icon-x">
        <i class="fa-solid fa-xmark" onclick="closeSidebar()"></i>
        <div onclick="window.location.href = '/';">
            <img src = "{{ asset('svg/tonight-logo.svg')}}"/>
        </div>
    </div>
    <div class="menu-container">
        <hr>
        <div class="side-menu" onclick="window.location.href = '/list-your-business';">
            <a>list your business</a>
        </div>
        <hr>
        <div class="side-menu" onclick="window.location.href = '/terms-conditions';">
            <a>terms & conditions</a>
        </div>
        <hr>
        <div class="side-menu" onclick="window.location.href = '/privacy-policy';">
            <a>privacy policy</a>
        </div>
        <hr>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const sidebar = document.querySelector(".sidebar");
        const openSidebarIcon = document.getElementById("openSidebar");
        const closeSidebarIcon = document.querySelector(".fa-xmark");

        openSidebarIcon.addEventListener("click", function () {
            sidebar.style.left = "0";
        });

        closeSidebarIcon.addEventListener("click", function () {
            sidebar.style.left = "-100%";
        });
    });
</script>