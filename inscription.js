    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');



    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");

    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });


    document.getElementById('button').addEventListener("click", function() {
        document.querySelector('.Cardcontainer').style.display = "flex";



    });

    document.querySelector('.close').addEventListener("click", function() {
        document.querySelector('.Cardcontainer').style.display = "none";

    });

    //loading