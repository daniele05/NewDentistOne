// recup des bton 
const newpassword = document.querySelector("#newpassword");
const confnewpassword =  document.querySelector("#confnewpassword");

// la comparaison entre le nouveau password et la conform ajouter un event 
newpassword.addEventListener("change", function(){
    verificationPassword();
})

confnewpassword.addEventListener("change", function(){
    verificationPassword();
})

function verificationPassword(){
    if(newpassword.value === confnewpassword.value){
        document.querySelector("#btnValidation").disabled = false; 
        document.querySelector("#erreur").classList.add("d-none"); 
    }else{
        
        document.querySelector("#btnValidation").disabled = true;
        document.querySelector("#erreur").classList.remove("d-none"); 
}
}