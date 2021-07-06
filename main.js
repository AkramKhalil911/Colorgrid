function converttojson(response){
    return response.json();
}



function changecolor(){
    this.style.background = "black"
}

function processdata(data){
    for(var i = 0; i <= data.length; i++){
        var colorbox = document.createElement("div");
        colorbox.className = "kleuren"
        colorbox.addEventListener ("mouseover", changecolor);
        colorbox.style.background = data[i].kleur;
        document.getElementById("kleur").appendChild(colorbox);
    }
}

fetch('process.php')
.then(converttojson)
.then(processdata)

