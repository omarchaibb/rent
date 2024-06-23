let menu  = document.querySelector(".burger")
let dashboard = document.querySelector(".dashboard")
let links = document.querySelectorAll(".side-bar-content nav ul li")

menu.addEventListener("click",function(){
    dashboard.classList.toggle("display")

})

links.forEach(li => {
    li.addEventListener("click",(event)=>{
        event.preventDefault();
        links.forEach(element => {
            element.classList.remove("active-li")
        });
        li.classList.toggle("active-li")
    })
});

function displayForm(){
    let button_to_displa_form = document.querySelector(".right-side .add-home button.add")
    let form = document.querySelector(".form-section")
    let consel = document.querySelector(".submit-button button.consel")

    button_to_displa_form.addEventListener("click",function(){
        form.classList.add("form-display")
        
    })

    consel.addEventListener("click",function(){
        if(form.classList.contains("form-display")){
            form.classList.remove("form-display")
        }
    })

}
displayForm()





function getData(){
    let myrequest = new XMLHttpRequest()
    myrequest.onreadystatechange = function(){
        if(myrequest.status == 200 && myrequest.readyState == 4){
            console.log(myrequest.responseText)
        }
    }
    myrequest.open("POST","../rentHouse/addFunction.php")
    myrequest.send()
}

getData()

