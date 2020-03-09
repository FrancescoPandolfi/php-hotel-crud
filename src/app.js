
const divMessage = document.querySelector(".message");

if (divMessage) {
  divMessage.classList.add("animate");
  setTimeout(function(){
    divMessage.classList.remove("animate");
  }, 3000);
}


