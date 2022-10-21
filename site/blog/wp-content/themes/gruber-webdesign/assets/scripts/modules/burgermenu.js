window.burgermenu = function(x) {
    x.classList.toggle("change");
    //console.log("yep!");
    
    if (document.getElementById("site-header__overlay").style.display === "block") {
      document.getElementById("site-header__overlay").style.display = "none";
      //console.log("setting to none ...");
    }
    else {
      document.getElementById("site-header__overlay").style.display = "block";
      //console.log("setting to block ...");
    }
    
  } 