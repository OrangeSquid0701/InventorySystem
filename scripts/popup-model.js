console.log("hello");

document.getElementById("button-contact").addEventListener("click", function(){
  document.getElementsByClassName("popup")[0].classList.add("active");
});

document.getElementById("dismiss-button").addEventListener("click", function(){
  document.getElementsByClassName("popup")[0].classList.remove("active");
});
