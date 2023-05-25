innerBody = document.getElementById("inner-body");
form = document.getElementById("form");

function yes() {
    form.style.display = "block";
    innerBody.style.display = "none";
}

function no() {
    document.getElementById("body").innerHTML = "Anda bukan praktikan PPW1, Anda tidak boleh masuk!";
}

function data() {
    var nama = document.getElementById("nama").value;
    var nim = document.getElementById("nim").value;
    var angkatan = document.getElementById("angkatan").value;
    if (nama != "" && nim != "" && angkatan != "") {
        document.getElementById("table").style.display = "block";
        form.style.display = "none";
        document.getElementById("name").innerHTML = nama;
        document.getElementById("id").innerHTML = nim;
        document.getElementById("class").innerHTML = angkatan;
    } else {
        alert("Masih ada field yang kosong!");
    }
}