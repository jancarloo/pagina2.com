

                                        //console.log(jArray);
                                        //Creamos el tag <script> y le cargamos la librería de Youtube

var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
 
// Inicializamos la variable player
var player;

function onYouTubeIframeAPIReady(jArray) {
    player = new YT.Player('player', {
        height : '380',
        width : '100%',
        videoId : this.jArray, // EL ID del vídeo
        playerVars : { 
            'autoplay' : 1, 
            'controls' : 1, // Son los controles de volumen, calidad...
            'autohide' : 1, // Si queremos que al reproducirse se escondan los controles
            'showinfo' : 1, // Título del vídeo...
            'modestbranding' : 0, // Logo de youtube en pequeñito
            'rel' : 0 // Videos relacionados al final
        },
        events : {
            'onReady': onPlayerReady, // Al cargarse el video se ejecuta esta función
            'onStateChange': onPlayerStateChange // Al cambiar el estado del video se ejecuta esta función
        }
    });
}
 
function onPlayerReady(event) {
    // Aquí podemos empezar a hacer cosas cómo: 
    event.target.stopVideo();
    // Que sería como un autoplay
}
 
// Inicializamos la variable que nos dirá si se ha terminado el vídeo
var done = false;
 
function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.ENDED) {
        // Si el vídeo acaba
        done = true;
    }
    if (event.data == YT.PlayerState.PAUSED) {
        // Si el video se pausa
    }
}



function playvideo(){
    player.playVideo();
}
 
function stopVideo() {
    player.stopVideo();
} 

$('#play').on('click', function () {
    player.playVideo();
});
 
$('#pause').on('click', function () {
    player.pauseVideo();
});