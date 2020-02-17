import './cropper.min.js';

function each(arr, callback) {
    var length = arr.length;
    var i;

    for (i = 0; i < length; i++) {
        callback.call(arr, arr[i], i, arr);
    }

    return arr;
}

let cropper;

function instantiateCrop() {
    var image = document.querySelector('#cropperImg');
    var previews = document.querySelectorAll('.preview');
    cropper = new Cropper(image, {
        aspectRatio: 343 / 453,
        ready: function () {
            var clone = this.cloneNode();
            
            clone.className = '';
            clone.style.cssText = (
                'display: block;' +
                'width: 100%;' +
                'min-width: 0;' +
                'min-height: 0;' +
                'max-width: none;' +
                'max-height: none;'
              );
            
            each(previews, function (elem) {
                elem.appendChild(clone.cloneNode());
            });
        },
        
        crop: makePreview,
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
            
            let width = Math.round(imageData.naturalWidth / imageScaledRatio) + 'px';
            elem.style.height = previewHeight + 'px';
            previewImage.style.width = width;
            previewImage.style.height = imageData.naturalHeight / imageScaledRatio + 'px';
            previewImage.style.marginLeft = -data.x / imageScaledRatio + 'px';
            previewImage.style.marginTop = -data.y / imageScaledRatio + 'px';
        });
    }
}

export {
    instantiateCrop,
    cropper
  };