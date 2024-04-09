document.addEventListener('DOMContentLoaded', function() {
	var photoList = document.querySelector('.list');
	var photos = document.querySelector('.photos');

	// Event listener for clicking "PHOTO" list item
	photoList.addEventListener('click', function(event) {
		if (event.target.tagName === 'LI' && event.target.textContent === 'PHOTO') {
			togglePhotos();
		}
	});

	// Function to toggle the visibility of photos
	function togglePhotos() {
		if (photos.classList.contains('show')) {
			photos.classList.remove('show'); // Hide photos if already visible
		} else {
			photos.classList.add('show'); // Show photos if hidden
		}
	}
});
