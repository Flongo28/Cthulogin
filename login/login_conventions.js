function add_convention(input_id, error_id, proof){
    var inputField = document.getElementById(input_id);
    var errorHint = document.getElementById(error_id);

    inputField.addEventListener("blur", function() {
        if (proof(inputField)) {
        errorHint.style.display = "inline";
        } else {
        errorHint.style.display = "none";
        }
    });
}

function to_short(html_element){
    return html_element.value.length <= 5;
}

function contains_special_character(html_element){
    
}

function is_not_same(html_element){
    console.log(html_element.value);
    return !(html_element.value === document.getElementById("password").value);
}

add_convention("name", "errorShortName", to_short);
add_convention("password", "errorShortPassword", to_short);
add_convention("password_wdh", "errorNotSamePW", is_not_same);