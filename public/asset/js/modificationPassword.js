// recup des bton 
var newPassword = document.querySelector("#newPassword");
var confNewPassword =  document.querySelector("#confNewPassword");

// la comparaison entre le nouveau password et la conform ajouter un event 
newPassword.addEventListener("keyup", function(){
    verificationPassword();
})

confNewPassword.addEventListener("keyup", function(){
    verificationPassword();
})

function verificationPassword(){
    if(newPassword.value === confNewPassword.value){
        document.querySelector("#btnValidation").disabled = false; 
        document.querySelector("#erreur").classList.add("d-none"); 
    }else{
        
        document.querySelector("#btnValidation").disabled = true;
        document.querySelector("#erreur").classList.remove("d-none"); 
}
}