<script>
    window.addEventListener("scroll", function () {
        let moonu = document.querySelector(".moonu");
        let scrollPosition = window.scrollY;
        let windowHeight = window.innerHeight;
        let documentHeight = document.documentElement.scrollHeight;

        
        if (scrollPosition > 50) {
            moonu.style.bottom = "0px";
        } else {
            moonu.style.bottom = "-200px";
        }
    });

window.addEventListener("scroll", function () {
    let rand = document.querySelector(".rand");
    let moonu = document.querySelector(".moonu");
    let scrollY = window.scrollY;

    
    rand.style.backgroundPosition = `center ${scrollY * -0.5}px`;

    
    moonu.style.bottom = `${550 + scrollY * -0.5}px`;
});
</script>
