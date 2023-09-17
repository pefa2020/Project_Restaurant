// Highlights each field
function setBackground(e) {
    if (e.type == "focus") {
        e.target.style.backgroundColor = "#FFE393";
    }
    else if (e.type == "blur") {
        e.target.style.backgroundColor = "white";
    }
}

window.addEventListener("load", function() {
    var cssSelector = "input[type=text],input[type=number],input[type=selector],textarea[type=text],input[type=email],select[type=selector]";
    var fields = document.querySelectorAll(cssSelector);

    for (i = 0; i<fields.length; i++) {
        fields[i].addEventListener("focus", setBackground);
        fields[i].addEventListener("blur", setBackground);
    }
});


// Identifies items that are incomplete via a box.


// responsible for setting up event listeners on page. Where  e is all id(s) called sampleForm
function init() {
    document.getElementById("sampleForm").addEventListener("submit", checkForEmptyFields);
}

// initialize handlers once page is ready
window.addEventListener("load", init);

// ensures form fields are not empty
function checkForEmptyFields(e) {

    var errorArea = document.getElementById("errors");
    errorArea.className = "hidden";

    // collecting all type=text and all type=password. Both have to be input.
    var cssSelector = "input[type=text],input[type=number],input[type=selector],textarea[type=text],input[type=email],select[type=selector]]";
    var fields = document.querySelectorAll(cssSelector);

    // loop through the input elements looking for empty value
    var fieldList = [];
    for (i=0; i<fields.length; i++){
        if (fields[i].value == null || fields[i].value == "") {
            // since a field is empty prevent the form submission
            // Remember that value e is all id(s) called sampleForm
            e.preventDefault();
            // add to fieldList array all elements that are empty
            fieldList.push(fields[i]);
        }
    }
    // now set up the error message
    var msg = "The following fields can't be empty: ";
    if (fieldList.length > 0) {
        for (i=0; i<fieldList.length; i++) {
            msg += fieldList[i].id + ",";
        }
        // Add the complete message msg to errorArea. Where errorArea is created in HTML and 
        // referenced in styling on CSS file.
        errorArea.innerHTML = "<p>" + msg + "</p>";
        errorArea.className = "visible";
    }
}


