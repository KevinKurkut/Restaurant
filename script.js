// navbar toggle in small screens

const navToggle = document.querySelector(".nav-toggle");
const navBar = document.querySelector(".navbar");

navToggle.addEventListener("click", ()=>{
    navBar.classList.toggle("navbar--visible");
});

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

// show the signup modal when signup link is clicked
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
