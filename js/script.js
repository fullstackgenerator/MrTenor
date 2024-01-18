   const cookieContainer = document.querySelector(".cookie-container");
    const agreeBtn = document.querySelector(".agree button");

    setTimeout(() => {
    cookieContainer.classList.remove("hide");
}, 1000);

    agreeBtn.addEventListener("click", () => {
    cookieContainer.classList.add("hide");
});
    
    function set_cookie() {
        sessionStorage.setItem("is_cookie_allowed", "YES");
    }
    if(sessionStorage.getItem("is_cookie_allowed")){
        document.querySelector(".cookie-container").style.display="none";
    }

// Get all anchor tags inside the menu
var menuItems = document.querySelectorAll('.menu-wrap .menu a');

// Add click event listener to each anchor tag
menuItems.forEach(function(item) {
  item.addEventListener('click', function() {
    // Uncheck the checkbox to close the menu
    document.querySelector('.menu-wrap .toggler').checked = false;
  });
});
