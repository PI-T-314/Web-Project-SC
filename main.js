let lightTheme = localStorage.getItem('lightTheme');
const icon = document.getElementById("icon");

const enableLightTheme = () => {
    document.body.classList.add('lightTheme');
    localStorage.setItem('lightTheme', 'enabled');
    icon.innerHTML = "<i class='bx bxs-moon' style='color:black' ></i>";
}
const disableLightTheme = () => {
    document.body.classList.remove('lightTheme');
    localStorage.setItem('lightTheme', null);
    icon.innerHTML = "<i class='bx bxs-sun' style='color: white;'></i>";
}
if(lightTheme === 'enabled'){
    enableLightTheme();
}
icon.addEventListener("click", () => {
    lightTheme = localStorage.getItem('lightTheme');
    if(lightTheme !== 'enabled'){
        enableLightTheme();
    }else{
        disableLightTheme();
    }
});

// function changeTheme(){
//     const icon  = document.getElementById("icon");
//     document.body.classList.toggle("lightTheme");
//     if(document.body.classList.contains("lightTheme")){
//         icon.innerHTML = "<i class='bx bxs-moon' style='color:black' ></i>";
//     }else{
//         icon.innerHTML = "<i class='bx bxs-sun' style='color: white;'></i>";
//     }
// }