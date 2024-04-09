var modal = document.getElementById('myModal');
var img = document.getElementsByClassName('popup-image');
var imgContainers = document.getElementsByClassName('img_container');
var imgContainers1 = document.getElementsByClassName('pop2'); // Updated class name
var modalImg = document.getElementById('img01');
var captionText = document.getElementById('caption');
var span = document.getElementsByClassName('close')[0];

// Function to open the modal with the clicked image
var openModal = function(src, alt) {
	modal.style.display = 'block';
	modalImg.src = src;
	captionText.innerHTML = alt;
};

// Event listener for each popup image
for (var i = 0; i < img.length; i++) {
	img[i].onclick = function() {
		openModal(this.src, this.alt);
	};
}

// Event listener for each img_container
for (var j = 0; j < imgContainers.length; j++) {
	imgContainers[j].onclick = function() {
		var imgInContainer = this.querySelector('img'); // Get the img inside img_container
		openModal(imgInContainer.src, imgInContainer.alt);
	};
}

// Event listener for pop2 class elements (assuming it's a separate set of elements)
for (var k = 0; k < imgContainers1.length; k++) {
	imgContainers1[k].onclick = function() {
		openModal(this.src, this.alt); // Using 'this' to get the src and alt attributes of the clicked image
	};
}

span.onclick = function() {
	modal.style.display = 'none';
};

modal.onclick = function() {
	modal.style.display = 'none';
};

document.addEventListener('DOMContentLoaded', function() {
	const photoList = document.querySelector('.list');
	const photos = document.querySelector('.photos');

	// Event listener for the PHOTO list item
	photoList.addEventListener('click', function(event) {
		if (event.target.textContent === 'PHOTO') {
			// Toggle the visibility of the photos container
			photos.classList.toggle('show-photos');
		}
	});
});
// document.addEventListener('DOMContentLoaded', function() {
// 	const photoList = document.querySelector('.list');
// 	const photos = document.querySelector('.photos');

// 	// Event listener for the PHOTO list item
// 	photoList.addEventListener('click', function(event) {
// 		if (event.target.textContent === 'PHOTO') {
// 			// Show the photos container
// 			photos.style.display = 'block';
// 		}
// 	});
// });
// document.addEventListener('DOMContentLoaded', function() {
// 	const photoList = document.querySelector('.list');
// 	const photos = document.querySelector('post-content');

// 	// Event listener for the PHOTO list item
// 	photoList.addEventListener('click', function(event) {
// 		if (event.target.textContent === 'PHOTO') {
// 			// Show the photos container
// 			photos.style.display = 'block';
// 		}
// 	});
// });
