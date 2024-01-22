let mainDishVisibility = document.getElementById("mainDishVisibility");
let pastaVisibility = document.getElementById("pastaVisibility");
let fishVisibility = document.getElementById("fishVisibility");
let soupVisibility = document.getElementById("soupVisibility");

mainDishVisibility.addEventListener("click", () => {
  if (document.getElementById("hideMainDish")) {
    let mainDishList = document.querySelector("#hideMainDish");
    mainDishList.setAttribute("id", "showMainDish");
  } else if (document.getElementById("showMainDish")) {
    let mainDishList = document.querySelector("#showMainDish");
    mainDishList.setAttribute("id", "hideMainDish");
  }
});

pastaVisibility.addEventListener("click", () => {
  if (document.getElementById("hidePasta")) {
    let mainDishList = document.querySelector("#hidePasta");
    mainDishList.setAttribute("id", "showPasta");
  } else if (document.getElementById("showPasta")) {
    let mainDishList = document.querySelector("#showPasta");
    mainDishList.setAttribute("id", "hidePasta");
  }
});

fishVisibility.addEventListener("click", () => {
  if (document.getElementById("hideFish")) {
    let mainDishList = document.querySelector("#hideFish");
    mainDishList.setAttribute("id", "showFish");
  } else if (document.getElementById("showFish")) {
    let mainDishList = document.querySelector("#showFish");
    mainDishList.setAttribute("id", "hideFish");
  }
});

soupVisibility.addEventListener("click", () => {
  if (document.getElementById("hideSoup")) {
    let mainDishList = document.querySelector("#hideSoup");
    mainDishList.setAttribute("id", "showSoup");
  } else if (document.getElementById("showSoup")) {
    let mainDishList = document.querySelector("#showSoup");
    mainDishList.setAttribute("id", "hideSoup");
  }
});
