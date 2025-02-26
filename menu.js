document.addEventListener("DOMContentLoaded", function () {
    const boutonsDeroulants = document.querySelectorAll(".bouton-deroulant");

    boutonsDeroulants.forEach((bouton) => {
        bouton.addEventListener("click", function (event) {
            event.preventDefault();
            let sousMenu = this.nextElementSibling;
            
            if (sousMenu.classList.contains("afficher")) {
                sousMenu.classList.remove("afficher");
            } else {
                document.querySelectorAll(".sous-menu").forEach((menu) => {
                    menu.classList.remove("afficher");
                });
                sousMenu.classList.add("afficher");
            }
        });
    });

    
    document.addEventListener("click", function (event) {
        if (!event.target.closest(".menu-deroulant")) {
            document.querySelectorAll(".sous-menu").forEach((menu) => {
                menu.classList.remove("afficher");
            });
        }
    });
});
