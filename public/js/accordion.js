var acc = document.getElementsByClassName("actionAccordion");

for (var i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        var panel = this.nextElementSibling; // the content div
        var arrow = this.querySelector('img'); // your arrow icon inside header

        if (panel.style.display === "block") {
            panel.style.display = "none";
            if (arrow) arrow.style.transform = "rotate(0deg)";
        } else {
            panel.style.display = "block";
            if (arrow) arrow.style.transform = "rotate(180deg)";
        }
    });
}
