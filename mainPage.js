var slider_content = document.getElementById('box');
var image = ['book1','book2', 'book3', 'books4','book10'];
var i = image.length;
function nextImage(){
    if (i<image.length) {
    i= i+1;
    }else{
    	i = 1;
    	}
    slider_content.innerHTML = "<img src="+image[i-1]+".jpg>";
}
function prewImage(){
	if (i<image.length+1 && i>1) {
    i= i-1;
    }else{
    	i = image.length;
    	}
    slider_content.innerHTML = "<img src="+image[i-1]+".jpg>";
}
 setInterval(nextImage , 4000);

const menuItems = document.querySelectorAll('.menuItems')

window.addEventListener('contextmenu', event =>{
	event.preventDefault()
	contextMenu.style.top = `${event.pageY}px`
	contextMenu.style.left = `${event.pageX}px`
	setTimeout(() => {
		contextMenu.style.transform = 'scale(1)'
	}, 200)
}) 

window.addEventListener('click', event =>{
	let condition = contextMenu.style.transform == 'scale(1)' && event.target != contextMenu
	for (let li of menuItems) {
		condition += event.target != li
	}
	if (condition === menuItems.length + 1) {
		contextMenu.style.transform = 'scale(0)'
	}
})

function bt(){
	document.body.scrollTop=0;
	document.documentElement.scrollTop=0;
}
