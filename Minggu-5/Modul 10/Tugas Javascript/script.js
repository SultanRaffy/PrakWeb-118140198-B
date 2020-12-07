var data = [
    "Buku Tulis",
    "Pensil",
    "Spidol"
];

function showValue(){
    var list = document.getElementById("hasil");
    list.innerHTML="";
    for(let i=0; i<data.length; i++){
        var ubah = "<a href='#' onclick='ubah_data("+i+")'>Edit</a>";
        var hapus = "<a href='#' onclick='delete_data("+i+")'>Hapus</a>";
        list.innerHTML += "<li>"+data[i]+"["+ubah + " | "+hapus+"]</li>";
    }
}

function addValues(){
    var tambah = document.querySelector("input[name=name]");
    data.push(tambah.value);
    showValue();
}

function ubah_data(id){
    var newValue = prompt("Nama Baru :" , data[id]);
    data[id]=newValue;
    showValue();
}

function delete_data(id){
    data.splice(id, 1);
    showValue();
}
showValue();