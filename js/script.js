// Script.js
// create a new QRCode instance
let qrcode = new QRCode(
    document.querySelector(".qrcode")


    

);



// Function to generate QR
// code based on user input
function generateQr() {
    if (
        document.querySelector("input")
            .value === "" ||
        document.querySelector("input")
            .value === " ") {
        alert(
            "Input Field Can not be blank!"
        );} 
    else {

       

        qrcode.makeCode(
            document.querySelector(
                "input").value)


       

        
        
}}



