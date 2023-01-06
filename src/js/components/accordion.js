document.addEventListener("DOMContentLoaded", () => {
    if ( document.querySelector('.c-accordion-item') ){
        const accordionAll = document.querySelectorAll(".c-accordion-item");
        accordionAll.forEach(function(accordion, i) {
            const accordionButton = accordion.querySelector(".c-accordion-header .c-accordion-button");
            const accordionCollapse = accordion.querySelector(".c-accordion-collapse");
            accordionButton.addEventListener("click", function(e) {
                accordionButton.classList.toggle('collapsed')
                if( accordionCollapse.classList.contains('show') ){
                    accordionCollapse.classList.remove('show');
                    accordionCollapse.classList.add('collapse');
                } else {
                    accordionCollapse.classList.add('show');
                }
            });
        });
    }
});