Array.from(document.getElementsByClassName('sub1')).forEach(element => {
   let mainimg2 = document.getElementById("mainimg")
   // let anotherimg2 = document.getElementsByClassName("sub1")
   let anotherimg = element.getElementsByClassName("sub3")
   anotherimg[0].onclick = () => {
      mainimg2.src = anotherimg[0].src
   }
});




document.getElementById("signinlogo").addEventListener("click", showsignupPopup);
document.getElementById("signup").addEventListener("click", showsignupPopup);
document.getElementById("signin2").addEventListener("click", showLoginPopup);
document.getElementById("cross").addEventListener("click", hideLoginPopup);
document.getElementById("cross2").addEventListener("click", hideLoginPopup);



document.getElementById("sin").addEventListener("click", () => {
   dilshad = true

   if (dilshad) {
      var loginPopup = document.getElementById('form1');
      loginPopup.classList.add("show");
      var loginPopup = document.getElementById('form2');
      loginPopup.classList.remove("show");

   }

});
document.getElementById("sin2").addEventListener("click", () => {
   dilshad = true

   if (dilshad) {
      var loginPopup = document.getElementById('form2');
      loginPopup.classList.add("show");
      var loginPopup = document.getElementById('form1');
      loginPopup.classList.remove("show");

   }

});

function showLoginPopup() {
   var loginPopup = document.getElementById('form1');
   loginPopup.classList.add("show");
}
function showsignupPopup() {
   var loginPopup = document.getElementById('form2');
   loginPopup.classList.add("show");
}

function hideLoginPopup() {
   var loginPopup = document.getElementById('form1');
   var loginPopup1 = document.getElementById('form2');
   loginPopup.classList.remove("show");
   loginPopup1.classList.remove("show");

}
















