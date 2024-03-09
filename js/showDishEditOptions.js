let mainDishVisibility = document.getElementById("mainDishVisibility");
let pastaVisibility = document.getElementById("pastaVisibility");
let fishVisibility = document.getElementById("fishVisibility");
let soupVisibility = document.getElementById("soupVisibility");
let allVisibility = document.getElementById("allVisibility");
let allVisibilityValue = true;

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

allVisibility.addEventListener("click", () => {
  if (allVisibility.classList.contains("hide")) {
    if (document.querySelector("#showMainDish") != null) {
      document
        .querySelector("#showMainDish")
        .setAttribute("id", "hideMainDish");
    }

    if (document.querySelector("#showPasta") != null) {
      document.querySelector("#showPasta").setAttribute("id", "hidePasta");
    }

    if (document.querySelector("#showFish") != null) {
      document.querySelector("#showFish").setAttribute("id", "hideFish");
    }

    if (document.querySelector("#showSoup") != null) {
      document.querySelector("#showSoup").setAttribute("id", "hideSoup");
    }

    allVisibility.classList.remove("hide");
  } else {
    if (document.querySelector("#hideMainDish") != null) {
      document
        .querySelector("#hideMainDish")
        .setAttribute("id", "showMainDish");
    }

    if (document.querySelector("#hidePasta") != null) {
      document.querySelector("#hidePasta").setAttribute("id", "showPasta");
    }

    if (document.querySelector("#hideFish") != null) {
      document.querySelector("#hideFish").setAttribute("id", "showFish");
    }

    if (document.querySelector("#hideSoup") != null) {
      document.querySelector("#hideSoup").setAttribute("id", "showSoup");
    }

    allVisibility.classList.add("hide");
  }
});
