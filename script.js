//show the signup modal when signup link is clicked
const signup = document.getElementById("signup");
const login = document.getElementById("login");

const signupForm = document.querySelector(".signup-form");
const loginForm = document.querySelector(".login-form");

signup.addEventListener("click", ()=>{
    signupForm.classList.add("active");
    loginForm.classList.add("active");
});

login.addEventListener("click", ()=>{
    signupForm.classList.remove("active");
    loginForm.classList.remove("active");
});



const navToggle = document.querySelector(".nav-toggle");
const navBar = document.querySelector(".navbar");

navToggle.addEventListener("click", ()=>{
    navBar.classList.toggle("navbar--visible");
});

// Hide and show password option
const pwHide = document.querySelectorAll(".pw-hide");

    pwHide.forEach((icon)=>{
        icon.onclick =  function(){
            let pwInput = icon.parentElement.querySelector('input');
        // if the user clicks on eye slash icon, turn the password input into text and show eye open icon
        if (pwInput.type === "password") {
            pwInput.type = "text";
            icon.classList.replace("fa-eye-slash", "fa-eye");
        }
        else {
            // else the user has not clicked on eye icon, it should remain as it is.   
            pwInput.type = "password"
            icon.classList.replace("fa-eye", "fa-eye-slash");
        }
    }
        
    })

//show different meal images based on the buttons that clicked them
const mealBtn = document.getElementById("mealBtn");
const dessertBtn = document.getElementById("dessertBtn");
const drinksBtn = document.getElementById("drinksBtn");

const displayImageOne = document.querySelector(".displayImgOne");
const displayImageTwo = document.querySelector(".displayImgTwo");
const displayImageThree = document.querySelector(".displayImgThree");

drinksBtn.addEventListener("click", ()=>{
    displayImageOne.src="images/drink3.png";
    displayImageTwo.src="images/drinks.png";
    displayImageThree.src="images/drink4.png";
});

mealBtn.addEventListener("click", ()=>{
    displayImageOne.src="images/meal4.png";
    displayImageTwo.src="images/meal3.png";
    displayImageThree.src="images/crepes.png";
});

dessertBtn.addEventListener("click", ()=>{
    displayImageOne.src="images/dessert2.png";
    displayImageTwo.src="images/dessert3.png";
    displayImageThree.src="images/dessert4.png";
});





    // console.log(cartQuantity);

    // for (let i = 0; i < quantity.length; i++) {
    //     let quantityItem  = quantity[i];
    //     quantityItem.onchange = function(){
    //         updateQuantity(quantityItem, i); //pass the index to identify each cart item
    //     }  
    // }

    // function updateQuantity(quantityItem, itemIndex){
    //     let actualPrice = document.getElementsByClassName("actualPrice");

    //     for (let i = 0; i < actualPrice.length; i++) {
    //     let total = 0;
    //     let priceElement = parseInt(actualPrice[i].textContent);
    //     // console.log(priceElement);
    //     let quanElement = quantityItem.value;
    //     console.log(quanElement);
    //     total = parseInt(priceElement * quanElement);
    //     console.log(total);   
    //     actualPrice.innerHTML = parseInt(total.toFixed(2));  
    //     }   
    // }


