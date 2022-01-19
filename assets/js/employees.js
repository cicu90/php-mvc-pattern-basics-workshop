var formAll=document.getElementById("formCreate");

formAll.addEventListener("submit", function(e) {
  e.preventDefault();
  e.stopPropagation();
})