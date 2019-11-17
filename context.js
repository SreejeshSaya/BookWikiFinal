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
