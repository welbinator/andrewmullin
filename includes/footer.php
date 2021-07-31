<footer>
    <script>
        const menuButton = document.querySelector("#menu-button");
        const nav = document.querySelector("nav")
        const close = document.querySelector(".close");
        menuButton.addEventListener("click", function() {
            nav.classList.add("show-menu");
            close.classList.add("show-close")
        });

        close.addEventListener("click", function() {
            nav.classList.remove("show-menu");
            close.classList.remove("show-close")
        })
    </script>
</footer>


</body>

</html>