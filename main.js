// Grabbing the elements using ids for editing
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

/*
    click, and run arrow function and take container and add a class with classlist and the classname  this case right-panel-active
*/  

signUpButton.addEventListener('click', ()=>{ 
    container.classList.add('right-panel-active');
});

// classlist for Removing the right panel active
signInButton.addEventListener('click', ()=> {
    container.classList.remove('right-panel-active');
});

