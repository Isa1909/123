


//replacedNode = hoody.replaceChild(hoody.children[1], hoody.children[0]);
//console.log(replacedNode);
//hoody.appendChild(replacedNode);

document.querySelector('#sort1').onclick = mySort;
function mySort() {
	

let hoody = document.querySelector('#hoody');
	for(let i = 0;i<hoody.children.length; i++){
 		for( let j=i;j<hoody.children.length; j++){

 			if(+hoody.children[i].getAttribute('data-sort')> +hoody.children[j].getAttribute('data-sort')){
 				replacedNode = hoody.replaceChild(hoody.children[j], hoody.children[i]);
 				insertAfter(replacedNode,hoody.children[i]);
 				


 			}	
	
		}
	}

}
	function insertAfter(elem,refElem){
		return refElem.parentNode.insertBefore(elem, refElem.nextSibling);
	}
