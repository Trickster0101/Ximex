/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav()
{
  document.getElementById("mySidenav").style.width = "20%";
  document.getElementById("body-holder").style.marginLeft = "20%";
  document.getElementById("body-holder").style.width = "80%";
  document.getElementById("nav_bar").style.width = "80%";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav()
{
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("changeLogoSidenav").style.width = "0";
  document.getElementById("body-holder").style.marginLeft = "0";
  document.getElementById("changeHeaderCaption").style.width = "0";

  document.getElementById("body-holder").style.width = "100%";
  document.getElementById("nav_bar").style.width = "100%";
}

function changeLogo()
{
  document.getElementById("changeLogoSidenav").style.width = "20%";
}

function changeHeaderCaption()
{
  document.getElementById("changeHeaderCaption").style.width = "20%";
}
