var index = 0;
var imageList = ['https://www.dropbox.com/s/e0ptsmielbh3iwy/IMG_0943.JPG?raw=1', 'https://www.dropbox.com/s/xmnrkr7h2izoroq/IMG_0937.JPG?raw=1'];



// setInterval (function intervalImage() {
// 	changeImage()
// }, 5000)
function intervalImage() {
	function changeImage() {
		var image1 = document.getElementById("myImage");
		image1.src = imageList[index];	
		index = index + 1;
		if (index == imageList.length) {
			index = 0;
		}
	}
	setTimeout(changeImage, 5000);
}


function reveal() {
			var x = document.getElementById("reveal");
			var revealButton = document.getElementById("revealButton");
			if (x.style.display !== "block") {
				x.style.display = "block";
				revealButton.innerHTML  = "Less Content";
			} else {
				x.style.display = "none";
				revealButton.innerHTML  = "Click here to read more";
			}
		} 

// function modal(){
//   // Get the modal
//   var modal = document.getElementById('myModal');

//     // Get the image and insert it inside the modal - use its "alt" text as a caption
//     var img = document.getElementById('myImage');
//     var modalImg = document.getElementById("img01");
//     var captionText = document.getElementById("caption");
//     img.onclick = function(){
//         modal.style.display = "block";
//         modalImg.src = this.src;
//         captionText.innerHTML = this.alt;
//     }

//     // Get the <span> element that closes the modal
//     var span = document.getElementsByClassName("close")[0];

//     // When the user clicks on <span> (x), close the modal
//     span.onclick = function() {
//     modal.style.display = "none";
//     } 

// }