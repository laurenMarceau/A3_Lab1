(function () {


var carThumbs = document.querySelectorAll('.thumbInfo img'),
			heading = document.querySelector('.modelName'),
			price = document.querySelector('.priceInfo'),
			details = document.querySelector('.modelDetails');

function changeInfoRequest() {
	httpRequest = new XMLHttpRequest();

	//checking for if browser supports httpRequest to grab info
	if(!httpRequest) {
		console.log('Your browser wont support support functionality of this page.');
		return false;
	}
	//interacting with the database to grab info
	httpRequest.onreadystatechange = changeCarInfo;
	httpRequest.open('GET','includes/ajaxQuery.php' + '?model=' + this.id);
	httpRequest.send();
}

function changeCarInfo () {
	if(httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200) {
		var carData = JSON.parse(httpRequest.responseText);
		heading.innerHTML = carData.modelName;
		price.innerHTML = carData.pricing;
		details.innerHTML = carData.modelDetails;

		console.log(heading.innerHTML);
		console.log(price.innerHTML);
		console.log(details.innerHTML);
	}
}


[].forEach.call(carThumbs, function(img) {
	img.addEventListener('click', changeInfoRequest, false);
});

})();
