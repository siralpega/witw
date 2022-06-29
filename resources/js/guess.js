const { default: axios } = require("axios");
var unitsInKm = true;
var canGuess = true;

window.makeGuess = makeGuess;
window.hideMessage = hideMessage;
window.toggleUnits = toggleUnits;
window.openStats = openStats;
window.hideStats = hideStats;

function makeGuess() {
    var guess = document.getElementById("guess").value;
    if(!canGuess)
        return;
    axios.post('/api/guess', {
            guess: guess
        })
        .then(function (response) {

            document.getElementById('guesses').innerHTML = response.data['guesses'];
            if(response.data['correct'] == true) {
                document.getElementById('message').style.visibility = 'visible'; 
            }
            else if(response.data['answer'] != undefined) {
                document.getElementById('message-text').innerText = 'The answer was ' + response.data['answer'];
                document.getElementById('message').style.visibility = 'visible';
                canGuess = false;
            }

            if(!unitsInKm) {
                unitsInKm = !unitsInKm;
                toggleUnits();
            }
        })
        .catch(function (error) {
            if(error.response != undefined && error.response.status != 403)
                console.log('Error: ' + error.response.data['message']);
            var borderColor = document.getElementById('guess').style.borderColor;
            document.getElementById('guess').style.borderColor = '#DC143C';
            setTimeout(function(){
                document.getElementById('guess').style.borderColor = borderColor;
            }, 2000);
        });
}

function hideMessage() {
    document.getElementById('message').style.visibility = 'hidden';
}

function toggleUnits() {
    var elements = document.getElementsByClassName('dist');
    if(elements == undefined || elements.length == 0)
        return;
    for(var i = 0; i < elements.length; i++) {
        var dist = elements[i].innerText;
        if(dist == undefined)
            continue;
        var x = dist.substring(0, dist.indexOf(unitsInKm ? "km" : "mi"));
        if(x == undefined || x == "")
            continue;
        if(unitsInKm)
            elements[i].innerText = Math.round(x / 1.609344) + "mi";
        else
            elements[i].innerText = Math.round(x * 1.609344) + "km";
    }
    unitsInKm = !unitsInKm;
}

function openStats() {
    //document.getElementById('stats').style.visibility = 'visible';
}

function hideStats() {
    //document.getElementById('stats').style.visibility = 'hidden';
}