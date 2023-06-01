var headerClicked = 0;
function headerbg() {
    headerClicked ++;
    var header = document.getElementById('header');
    if (headerClicked % 2 != 0) {
        header.classList.add('header-bg', 'shadow');
    } else {
        header.classList.remove('header-bg', 'shadow');
    }
}

function show() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    if (name != "" && email != "" && message != "") {
        document.getElementById("thanks").innerHTML = "<b>Thank you for your response. Your data recorded as:</b>";
        document.getElementById("hello").innerHTML = "Hello! My name is " + "<b>" + name + "</b>";
        document.getElementById("contact").innerHTML = "Please contact me through: " + "<b>" + email + "</b>";
        document.getElementById("messages").innerHTML = "I want to say about: " + "<br>" + "<b>" + message + "</b>";
    } else {
        alert("Please fill in all the required fields!");
    }
}

// Calculator
function total() {
    var inputs = document.getElementsByClassName("input");
    var outputs = document.getElementsByClassName("output");
    var result = document.getElementById("result");
    var total = 0;

    for (var i=0; i < inputs.length; i++) {
        var input = inputs[i].value;
        var output = input * 365;
        total += output;

        if (!isNaN(output) && input != "") {
            outputs[i].innerHTML = output;
        } else {
            outputs[i].innerHTML = "";
        }

        if (total != 0) {
            result.innerHTML = `<h4><b>${total}</b></h4>`;
        } else {
            result.innerHTML = "";
        }
        
    }
    console.log(inputs);
}