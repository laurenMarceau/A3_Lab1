(function(){

  var pic = document.querySelectorAll(".galleryPhotos img"),
      popup = document.querySelector("#pop"),
      closePop = document.querySelector("#closeButton"),
      mainImg = document.querySelector("#mainImg"),
      desc = document.querySelector("#desc"),
      cred = document.querySelector("#cred");

    function open() {
      popup.style.display = "block";

      //closes gallery popup on esc key
      document.onkeydown = function(evt) {
        evt = evt || window.event;
      if (evt.keyCode == 27) {
          popup.style.display = "none";
    }
};

      httpRequest = new XMLHttpRequest();
      //its a js api (virtual object) has properties and events
      if (!httpRequest) {
        //if its too old it wont have the objecty built in
        console.log('this will not work on your computer');
        return false;
      }
      httpRequest.onreadystatechange = showImage;
      httpRequest.open('GET', 'includes/getGallery.php' + '?image=' + this.id);
      httpRequest.send();
    }

      function showImage() {
        if (httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200) {
          //parse stringified result
          var imgData = JSON.parse(httpRequest.responseText);
          mainImg.src = "images/" + imgData.gallery_photo + '.jpg';
          desc.innerHTML = imgData.gallery_desc;
          cred.innerHTML = imgData.gallery_credit;
        }
      }

    function close(){
      popup.style.display = "none";
    }

  closePop.addEventListener('click', close, false);

  [].forEach.call(pic, function(selectedPic){
    selectedPic.addEventListener('click', open, false);
  });

})();
