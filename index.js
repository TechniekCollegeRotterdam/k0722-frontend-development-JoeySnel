let clip = document.getElementById('my-video');

function myFunction(x) {
    if (x.matches) { // If media query matches
        // document.body.style.backgroundColor = "yellow";
        clip.controls = true;

    } else {
        // document.body.style.backgroundColor = "pink";
        clip.controls = false;
        clip.addEventListener("mouseover", function (e) {
            clip.play();
        })

        clip.addEventListener("mouseout", function (e) {
            clip.pause();
        })

        clip.addEventListener('ended', function (e) {
            clip.currentTime = 0;
        })
    }
}

var x = window.matchMedia("(max-width: 700px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes