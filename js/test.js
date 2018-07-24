
function fun(){
    var form = document.getElementById("myForm");
    var inputt = document.createElement("input");
    var input = document.createElement("input");
    inputt.type = "text";
    input.type="submit";
    var br = document.createElement("br");
    form.appendChild(inputt);
    form.appendChild(input)
    form.appendChild(br);
    
}

