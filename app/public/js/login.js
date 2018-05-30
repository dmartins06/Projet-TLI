var element;

window.onload = function(){
    element = document.getElementById("loginForm");
    element.style.display = 'none';
};

function displayLogin() {
    if (element.style.display === 'none') {
        element.style.display = 'block';
    }
    else if (element.style.display === 'block') {
        element.style.display = 'none';
    }
}