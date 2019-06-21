<footer>
    <p><a href="#">Privacy Policy</a> / <a href="#">Cookie Policy</a></p>
    <p>© Basic. WordPress Template 2019 / All Rights Reserved</p>
</footer>

<?php wp_footer() ?>

<script>
    function toggleMenu(){
        const x = document.getElementById("toggleMyMenu");
        if (x.style.display === "none") {
            x.style.display = "block";
        }
        else {
            x.style.display = "none";
        }
    }

    function toggleSearch(){

        const x = document.getElementById("search__popup");
        if (x.style.display === "none") {
            x.style.display = "grid";
        }
        else {
            x.style.display = "none";
        }
    }

    // Add on keypress to get search

    
}
    
</script>