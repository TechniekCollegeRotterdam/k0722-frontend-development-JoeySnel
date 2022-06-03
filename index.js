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

// Index HTML code + script voor toevoegen van menu's

/* <div id="nav-placeholder"></div>
<div id="aside-placeholder"></div> */

// <script src="index.js"></script>
//     <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
//     <script>
//         $(function () {
//             $("#nav-placeholder").load("nav.html");
//         });
//     </script>
//     <script>
//         $(function () {
//             $("#aside-placeholder").load("aside.html");
//         });
//     </script>