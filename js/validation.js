let allInputs = document.querySelectorAll("input"),
form = document.querySelector("form")
console.log(allInputs);

form.addEventListener("submit",validate)
function validate(e){
    e.preventDefault();
    counter = 0
    allInputs.forEach(input=>{
        if(input.value.trim() == ''){
            input.nextElementSibling.innerHTML = "please fill all input"
        }else if(input.dataset.type == "confirmePass"){
            let pass =  document.querySelector("input[data-type='password']")
            if(input.value != pass.value){
                input.nextElementSibling .innerHTML = "not the same paswword"
            }
        }
    })
}

