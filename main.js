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

const book = document.getElementById("book");
const address = document.getElementById("address");
const email = document.getElementById("email");
const shipping = document.getElementById("fast");
const buyerName = document.getElementById("buyerName");
let table = document.getElementById("orders");

document.getElementById("buy").addEventListener("click", () => {
    let price = 0;
    if(address.value == "" || email.value == "" || buyerName.value == "" || !email.value.includes("@") || email.value.indexOf("@") == 0 || !email.value.includes(".com") || 
    email.value.indexOf("@") == (email.value.indexOf(".com")-1) || email.value.indexOf("@") > email.value.indexOf(".com")){
        return;
    }else{
        switch(book.value) {
            case "The Year of the Jungle":
                price = 10;
                break;
            case "MockingJay":
                price = 15;
                break;
            case "Catching Fire":
                price = 17;
                break;
            case "The Hunger Games":
                price = 20;
                break;
            case "Gregor the Overlander":
                price = 15;
                break;
            case "Gregor and the Prophecy of Bane":
                price = 15;
                break;
            case "Gregor and the Curse of the WarmBloods":
                price = 17;
                break;
            case "Gregor and the Marks of Secret":
                price = 17;
                break;
            case "Gregor and the Code of Claw":
                price = 20;
                break;
            case "When Charlie McButton Lost Power":
                price = 7;
                break;
        }
        if(shipping.checked){
            price += 5;
        }

        let row = document.createElement("tr");
        let nameCol = document.createElement("td");
        let addCol = document.createElement("td");
        let emailCol = document.createElement("td");
        let bookCol = document.createElement("td");
        let priceCol = document.createElement("td");

        nameCol.innerHTML = buyerName.value;
        addCol.innerHTML = address.value;
        emailCol.innerHTML = email.value;
        bookCol.innerHTML = book.value;
        priceCol.innerHTML = price + "$";

        row.appendChild(nameCol);
        row.appendChild(addCol);
        row.appendChild(emailCol);
        row.appendChild(bookCol);
        row.appendChild(priceCol);
        table.appendChild(row);

        
        console.log(price);
    }
})