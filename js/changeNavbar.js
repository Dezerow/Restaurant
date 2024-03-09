const currentUrl = window.location.href;

if (
  currentUrl.includes("login.php") ||
  currentUrl.includes("register.php") ||
  currentUrl.includes("userPanel.php") ||
  currentUrl.includes("adminPanel.php") ||
  currentUrl.includes("dishesEdit.php") ||
  currentUrl.includes("userEdit.php") ||
  currentUrl.includes("dishEdit.php") ||
  currentUrl.includes("addDish.php")
) {
  window.onload = () => {
    let elements = document.querySelectorAll(".mainBar");
    elements.forEach((element) => {
      element.className += " hideMainBar";
    });
  };
} else {
  document.getElementsByClassName("mainBar").className -= " hideMainBar";
}
