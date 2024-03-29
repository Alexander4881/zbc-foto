const takePictureButton = document.querySelector('#take-picture-button');
const video = document.querySelector('#screenshot video');
const img = document.querySelector('#image img');
const croppedImg = document.querySelector('#croppedImage img');

// Prefer camera resolution nearest to 1280x720.
const userMediaContraints = { audio: false, video: true };

navigator.mediaDevices.getUserMedia(userMediaContraints)
    .then(function(mediaStream) {
        video.srcObject = mediaStream;
        video.onloadedmetadata = function(e) {
            const playPromise = video.play();

            if (playPromise !== null) {
                playPromise
                .then(() => {
                    // Autoplay Started.
                })
                .catch(() => { video.play(); })
            }
        };
    })

/**
 * For older browser support.
 */

// // Older browsers might not implement mediaDevices at all, so we set an empty object first
// if (navigator.mediaDevices === undefined) {
//     navigator.mediaDevices = {};
//     alert("Denne browser er ikke undestøttet \nDu kan bruge Firefox, Chrome, Microsoft Edge & Opera");
// }

// // Some browsers partially implement mediaDevices. We can't just assign an object
// // with getUserMedia as it would overwrite existing properties.
// // Here, we will just add the getUserMedia property if it's missing.
// if (navigator.mediaDevices.getUserMedia === undefined) {
//     navigator.mediaDevices.getUserMedia = function (constraints) {

//         // First get ahold of the legacy getUserMedia, if present
//         var getUserMedia = navigator.webkitGetUserMedia || navigator.mozGetUserMedia;

//         // Some browsers just don't implement it - return a rejected promise with an error
//         // to keep a consistent interface
//         if (!getUserMedia) {
//             return Promise.reject(new Error('getUserMedia is not implemented in this browser'));
//         }

//         // Otherwise, wrap the call to the old navigator.getUserMedia with a Promise
//         return new Promise(function (resolve, reject) {
//             getUserMedia.call(navigator, constraints, resolve, reject);
//         });
//     }
// }

// navigator.mediaDevices.getUserMedia(userMediaContraints)
//     .then(function (stream) {
//         // Older browsers may not have srcObject
//         if ("srcObject" in video) {
//             video.srcObject = stream;
//         } else {
//             // Avoid using this in new browsers, as it is going away.
//             video.src = window.URL.createObjectURL(stream);
//         }
//         video.onloadedmetadata = function (e) {
//             video.play();
//         };
//     })
//     .catch(function (err) {
//         // var errorMessage = `${err.name} : ${err.message}`;
//         var errorMessage = err.name + " " + err.message;
//         alertService(String(errorMessage));
//     });


const canvas = document.createElement('canvas');
takePictureButton.onclick = video.onclick = function () {
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;
    canvas.getContext('2d').drawImage(video, 0, 0);
};