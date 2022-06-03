const button = document.getElementById("js--menu");
const navigation = document.getElementById("js--nav")
const body = document.getElementById("js--body");




button.onclick = function() {
    navigation.style.visibility = "visible";
    navigation.style.opacity = 1;
    button.style.visibility = "hidden";
}


let allbots = document.getElementsByClassName("collectionsListItem")
let filters = document.getElementsByClassName("filter")

for(let i = 0; i < filters.length; i++){
    filters[i].checked = true;
}





//rpg filter

//id's definiëren
let robotfilter = document.getElementById("checkbox-robot")
let dronefilter = document.getElementById("checkbox-drone")
let sensorfilter = document.getElementById("checkbox-sensor")

//function aanroepen
robotfilter.onchange = function(){
    if(robotfilter.checked === true){
        for(let i = 0; i < allbots.length; i++){
            if(allbots[i].dataset.category === "robot"){
                allbots[i].style.display = "block";
            }
        }
    }
    else{
        for(let i = 0; i < allbots.length; i++){
            if(allbots[i].dataset.category === "robot"){
                allbots[i].style.display = "none";
            }
        }
    }
}

dronefilter.onchange = function(){
    if(dronefilter.checked === true){
        for(let i = 0; i < allbots.length; i++){
            if(allbots[i].dataset.category === "drone"){
                allbots[i].style.display = "block";
            }
        }
    }
    else{
        for(let i = 0; i < allbots.length; i++){
            if(allbots[i].dataset.category === "drone"){
                allbots[i].style.display = "none";
            }
        }
    }
}


sensorfilter.onchange = function(){
    if(sensorfilter.checked === true){
        for(let i = 0; i < allbots.length; i++){
            if(allbots[i].dataset.category === "sensor"){
                allbots[i].style.display = "block";
            }
        }
    }
    else{
        for(let i = 0; i < allbots.length; i++){
            if(allbots[i].dataset.category === "sensor"){
                allbots[i].style.display = "none";
            }
        }
    }
}


let sent = document.getElementById("send")
let learn = document.getElementById("buy1")
let text = document.getElementById("lorem")

sent.onclick = function(){
    send.style.background = "rgb(104, 193, 130)";
    document.getElementById("send").innerHTML = "sent!";
    send.style.color = "white";
}



learn.onclick = function(){
    text.style.display = "block"
}

