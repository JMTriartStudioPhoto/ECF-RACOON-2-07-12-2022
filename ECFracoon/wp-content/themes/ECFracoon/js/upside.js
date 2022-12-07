let references = document.querySelectorAll("menu a");

references.forEach(ref => {
        ref.addEventListener("click", (event) => {
                event.preventDefault();
                let secRef = ref.getAttribute("href").replace("#", "");
                let section = document.getElementById(secRef);
                let position = section.offsetTop;
                window.scrollTo({top:position, behavior:"smooth"});
        })
})