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