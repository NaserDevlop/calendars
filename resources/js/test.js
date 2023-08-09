

// For inputs fields of register -------------------

var inputBoxs =document.getElementsByClassName("test");
for (const inputBox of inputBoxs) {
inputBox.onkeyup = function(){
    var urll2 = inputBox.value.replace(/^\s+|\s+$/gm,'');
    inputBox.value = urll2;
    if ( inputBox.value !=="") {
        inputBox.classList.add("active");
        inputBox.style='color:#000';
    } else {
        inputBox.classList.remove("active");
    }
}
}
