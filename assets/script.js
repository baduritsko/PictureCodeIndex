const links = document.querySelectorAll("a");
for(let link of links) {
	link.setAttribute("target", "_blank");
}