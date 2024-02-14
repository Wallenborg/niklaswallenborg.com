
var gifFilenames = [];

for (var i = 1; i <= 103; i++) {
    var filename = "plant" + (i < 10 ? "0" : "") + i + ".gif";
    gifFilenames.push(filename);
    gifFilenames.push(filename);
    gifFilenames.push(filename);
    gifFilenames.push(filename);
    gifFilenames.push(filename);
    gifFilenames.push(filename);
    gifFilenames.push(filename);
    gifFilenames.push(filename);
    gifFilenames.push(filename);
    gifFilenames.push(filename);
    gifFilenames.push(filename);
    gifFilenames.push(filename);

}


function placeRandomGIFs() {
    var container = document.getElementById("gif-container");

    for (var i = 0; i < gifFilenames.length; i++) {
        var gif = document.createElement("img");
        gif.src = "gifs/" + gifFilenames[i]; 
        

        
        var left = Math.random() * (4000 - 200); 
        var top = Math.random() * (4000 - 200); 
        gif.style.position = "absolute";
        gif.style.left = left + "px";
        gif.style.top = top + "px";

        container.appendChild(gif);
    }
}


window.addEventListener("load", placeRandomGIFs);



