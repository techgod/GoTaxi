var imgArray = new Array();

imgArray[0] = new Image();
imgArray[0].src = '../media/offer0.jpg';

imgArray[1] = new Image();
imgArray[1].src = '../media/offer1.jpg';

imgArray[2] = new Image();
imgArray[2].src = '../media/offer2.jpg';

var img = document.createElement("img");
var block = document.getElementsByClassName('offers');

img.src = imgArray[2].src;
block[0].appendChild(img);

var i=0

p = setInterval(function(){
    img.src = imgArray[i].src;
    block[0].appendChild(img);
    i++;
    if(i == imgArray.length){
        i=0;
    }
}, 3000);

