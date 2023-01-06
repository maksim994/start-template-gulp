document.addEventListener("DOMContentLoaded", () => {

    if ( document.querySelector('.c-tabs') ){
        const tabs = document.querySelectorAll(".c-tabs");

        tabs.forEach(function(tab) {
            const tabNavs = tab.querySelectorAll(".c-tabs-nav-item a");
            const tabPanel = tab.querySelectorAll(".c-tabs-pane");
            let i = 0,
                j = 0;

            tabNavs.forEach(function(nav, i) {
                tabNavs[i].addEventListener("click", function(e) {
                    e.preventDefault();


                    let activeTabAttr = e.target.getAttribute("href");

                    tabPanel.forEach(function(panel, j) {
                        let activePanelAttr = tabPanel[j].getAttribute("id");

                        if (`#${activePanelAttr}` === activeTabAttr) {
                            tabNavs[j].classList.add("active");
                            tabPanel[j].classList.add("active", "show");
                        } else {
                            tabNavs[j].classList.remove("active");
                            tabPanel[j].classList.remove("active", "show");
                        }


                    })

                })
            })


        });
    }
});