/* HEADER */
let bForward = document.querySelector(".play_right");
let bBackward = document.querySelector(".play_left");
let bPlay = document.querySelector(".play");
let songP;

bPlay.addEventListener("click",function(){

    if(songP.paused=== false) {
        songP.play = true;
    }else{
        songP.play = false;
    }

});

