// JavaScript Document

var slides=new Array();
var slidesDetails=new Array();
var current=0; 
var numImages=0;
var productImg;
var productImgDetails;
var dispImg;

function setup() {
	//Slide Show function


	var imageDetailsLi= document.getElementById("productImageDetails").getElementsByTagName("li");
	for (var i=0; i<imageDetailsLi.length; i+=1)
	{
	   slidesDetails.push(imageDetailsLi[i].firstChild.nodeValue);
	}
	

	var imageLi= document.getElementById("productImageList").getElementsByTagName("li");
	for (var i=0; i<imageLi.length; i+=1)
	{
	   slides.push(imageLi[i].firstChild.nodeValue);
	}

	numImages=slides.length;
	
	productImg=document.getElementById("productimage");
	productImg.src="./img/photos/"+slides[0];

	productImgDetails=document.getElementById("imageDetail");
	//productImgDetails.innerHTML='<span class="productDetails">'+slidesDetails[0]+'</span><span id="productNo">'+(current+1)+'</span>';
	displayNo(slidesDetails[0]);


	var prebutton=document.getElementById("leftarrow");
	var nextbutton=document.getElementById("rightarrow");
	
	prebutton.onclick=goBack;
	nextbutton.onclick=goNext;
	
	document.onkeyup = KeyCheck;       

}

function KeyCheck(e)
{
e = e || window.event;	 
if (e.keyCode==37) {
		goBack();
	}
 	if (e.keyCode==39){
		goNext();
	}
	
}




function goBack(){
	if (current>0){
		current--;
	}else {
		current=numImages-1;
	}
	productImg.src="./img/photos/"+ slides[current];
	//productImgDetails.innerHTML='<span class="productDetails">'+slidesDetails[current]+'</span><span id="productNo">'+(current+1)+'</span>';
	displayNo(slidesDetails[current]);
}

function goNext(){
	if (current<numImages-1){
		current++;
	}else {
		current=0;
	}
	productImg.src="./img/photos/"+ slides[current];
	//productImgDetails.innerHTML='<span class="productDetails">'+slidesDetails[current]+'</span><span id="productNo">'+(current+1)+'</span>';
	displayNo(slidesDetails[current]);
}

function displayNo(slideDescription){
	dispImg="";
	for (var i=1; i<=slides.length; i+=1)
	{
		if (i==current+1){
			dispImg+='<span class="boldtext">'+i+' </span>';
		}else{
			dispImg+=i+" ";
		}
	}	
	//productImgDetails.innerHTML='<span id="productNo">+dispImg+</span>';
	productImgDetails.innerHTML='<span class="productDetails">'+slideDescription+'</span><span id="productNo">'+dispImg+'</span>';
}

window.onload=setup;
