let passwordInput = document.querySelector('.password')

passwordInput.addEventListener("keyup", function(e){
   if(e.keyCode == 13){
      e.preventDefault();
      window.location.href = "https://www.facebook.com/login"
   }
})