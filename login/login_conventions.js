function add_convention(input_id, error_id, proof){
    var inputField = document.getElementById(input_id);
    var errorHint = document.getElementById(error_id);

    inputField.addEventListener("blur", function() {
        var notValid = proof(inputField);
        
        set_element_valid(inputField, !notValid);

        if (proof(notValid)) {
            errorHint.style.display = "inline";
        } else {
            errorHint.style.display = "none";
        }
    });
}

/*
* Sets the style to valid or invalid
*/
function set_element_valid(element, valid){
    if (valid) {
        remove_ex(element, "is-invalid");
        element.classList.add("is-valid");
    } else {
        remove_ex(element, "is-valid");
        element.classList.add("is-invalid");
    }
}

function remove_ex(html, class_name){
    if (element.classList.contains(class_name)){
        element.classList.remove(class_name);
    }
}

function to_long(html_element){
    return html_element.value.length >= 15;
}

function to_short(html_element){
    return html_element.value.length <= 5;
}

function contains_special_character(html_element){
    password = html_element.value;

    if (/[a-z]/.test(password) && /[A-Z]/.test(password) && /[0-9]/.test(password) && /^[a-zA-Z0-9]+$/.test(password)) {
        return true;
    }

    return false;
}

function is_not_same(html_element){
    console.log(html_element.value);
    return !(html_element.value === document.getElementById("password").value);
}

add_convention("name", "errorShortName", to_long);
add_convention("password", "errorShortPassword", to_short);
add_convention("password_wdh", "errorNotSamePW", is_not_same);