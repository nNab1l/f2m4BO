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
let learn2 = document.getElementById("buy2")
let text = document.getElementById("lorem")

sent.onclick = function(){
    send.style.background = "rgb(104, 193, 130)";
    document.getElementById("send").innerHTML = "sent!";
    send.style.color = "white";
}



learn.onclick = function(){
    learn2.style.display = "block"
    text.style.display = "block"
    learn.style.display = "none"
}

learn2.onclick = function() {
    learn2.style.display = "none"
    text.style.display = "none"
    learn.style.display = "block"

}


const blue = document.getElementById("js--blue")
const prod = document.getElementById("js--prod")
const switches = document.getElementsByClassName("collectionsList")
blue.onclick = function(){
    console.log("blauwe geklikt")
    for(let i = 0; i < switches.length; i++){
        switches[i].style.display = "none";
    }
    document.getElementById("js--blueModal").style.display = "grid";
}

const closeBlueModal = document.getElementById("js--closeBlue")
closeBlueModal.onclick = function(){
    document.getElementById("js--blueModal").style.display = "none";
    for(let i = 0; i < switches.length; i++){
        switches[i].style.display = "block";
    }
}





