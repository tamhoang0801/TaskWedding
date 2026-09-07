function  displayScreen() {
    const screen = document.querySelector(".website");
    setTimeout(() => {
        screen.classList.add("active");
    }, 500);

    
}
displayScreen();