let form = document.getElementById("mainform");

form.addEventListener("submit", checkBlank);

let namebox = document.getElementById("namein");
let datebox = document.getElementById("datein")

function checkBlank(event) {
 if (datebox.value == "") {
        event.preventDefault();
        console.log("Date is empty");
        alert("Please add a date");
    }
    

}