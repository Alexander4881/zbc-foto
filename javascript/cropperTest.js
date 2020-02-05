import './cropper.min.js';



const image = document.getElementById('cropperImg');
// var previews = document.querySelectorAll('.preview');

// image.onload = function () {
//     const cropper = new Cropper(image, {
//         aspectRatio: 0.78 / 1.29,
        

//         crop: function (event) {
//             var data = event.detail;
//             var cropper = this.cropper;
//             var imageData = cropper.getImageData();
//             var previewAspectRatio = data.width / data.height;

//             each(previews, function (elem) {
//                 var previewImage = elem.getElementsByTagName('img').item(0);
//                 var previewWidth = elem.offsetWidth;
//                 var previewHeight = previewWidth / previewAspectRatio;
//                 var imageScaledRatio = data.width / previewWidth;
  
//                 elem.style.height = previewHeight + 'px';
//                 previewImage.style.width = imageData.naturalWidth / imageScaledRatio + 'px';
//                 previewImage.style.height = imageData.naturalHeight / imageScaledRatio + 'px';
//                 previewImage.style.marginLeft = -data.x / imageScaledRatio + 'px';
//                 previewImage.style.marginTop = -data.y / imageScaledRatio + 'px';
//               });
//         },
//     });

    // console.log(cropper);
// };

function each(arr, callback) {
    var length = arr.length;
    var i;

    for (i = 0; i < length; i++) {
      callback.call(arr, arr[i], i, arr);
    }

    return arr;
  }

  image.ready = function () {
    var image = document.querySelector('#cropperImg');
    var previews = document.querySelectorAll('.preview');
    var cropper = new Cropper(image, {
        aspectRatio: 3 / 4,
        ready: function () {
          var clone = this.cloneNode();

          clone.className = '';
         

          each(previews, function (elem) {
            elem.appendChild(clone.cloneNode());
          });
        },

        crop: makePreview,
        makePreview
      });
      
      function makePreview(event) {
        var data = event.detail;
        var cropper = this.cropper;
        var imageData = cropper.getImageData();
        var previewAspectRatio = data.width / data.height;

        each(previews, function (elem) {
          var previewImage = elem.getElementsByTagName('img').item(0);
          var previewWidth = elem.offsetWidth;
          var previewHeight = previewWidth / previewAspectRatio;
          var imageScaledRatio = data.width / previewWidth;

          elem.style.height = previewHeight + 'px';
          previewImage.style.width = imageData.naturalWidth / imageScaledRatio + 'px';
          previewImage.style.height = imageData.naturalHeight / imageScaledRatio + 'px';
          previewImage.style.marginLeft = -data.x / imageScaledRatio + 'px';
          previewImage.style.marginTop = -data.y / imageScaledRatio + 'px';
        });
      }
  }