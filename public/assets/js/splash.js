/**
* ----------------------------------------
* Redirect the Splash page to the home page
* You can change the setTimeout "1500" or change the routing path (index.html)
* ----------------------------------------
*/

function pageRedirect() {
    window.location.replace("/app");
}
setTimeout("pageRedirect()", 1500);
