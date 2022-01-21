var i = 0;
function changeImg(){
	
	var images=['./img/blackfriday.png','./img/avt1.png','./img/avt2.png'];
    document.getElementById('img').src = images[i];
    i++;
    if(i == images.length)
    	i = 0;
   
}

setInterval(changeImg,4000);
var u = 0;
function changeImg1(){
	
	var images=['./img/blackfriday.png','./img/avt1.png','./img/avt2.png'];
    document.getElementById('img').src = images[u];
    u++;
    if(u == images.length)
    	u = 0;
   
}
