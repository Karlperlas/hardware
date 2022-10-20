let form = document.querySelector(".sign-in");

form.addEventListener("keypress", function(e) {
   console.log(document.querySelector("#userId").value + e.key);
});