const menuOpen = document.querySelector("#menu-show");
const menuCancel = document.querySelector("#menu-cancel");
const content = document.querySelector(".content");

menuOpen.addEventListener('click', ()=>{
    content.classList.add("active");
    menuOpen.classList.remove("show");
    document.querySelector('#menu-show').style.display = 'none';
});

menuCancel.addEventListener('click', ()=>{
    document.querySelector('#menu-show').style.display = 'block';
    content.classList.remove("active");
    menuOpen.classList.remove("show");
});

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }



