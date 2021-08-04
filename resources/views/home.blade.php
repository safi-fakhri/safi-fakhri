<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="manifest" href="/site.webmanifest"/>

        <title>Project Grove</title>

        <script src="{{ asset('assets/plugins/jquery/jquery-3.3.1.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/jquery/jquery-easy.js') }}" type="text/javascript"></script>
        <link rel="stylesheet" type="text/javascript" href="/js/app.js" />
        <link rel="stylesheet" type="text/css" href="/css/app.css" />

        <script async>
            class AudioController {
                constructor() {
                    this.bgMusic = new Audio('https://drive.google.com/uc?export=open&id=1uULzA8WyTpfZv0Q0QpKO8jO9oD08isZq');
                    this.hornSound = new Audio('https://drive.google.com/uc?export=open&id=1LwqsEWHbA6v9LpWhi_cRM0pfhdL-hefD');
                    this.conqueredSound = new Audio('');
                    this.defendedSound = new Audio('');
                    this.battleSound = new Audio('');

                    this.bgMusic.volume = 0.3;
                    this.bgMusic.loop = true;
                }

                startMusic() {
                    this.bgMusic.play();
                }

                stopMusic() {
                    this.bgMusic.pause();
                    this.bgMusic.currentTime = 0;
                }

                horn() {
                    this.hornSound.play();
                }

                conquered() {
                    this.conqueredSound.play();
                }

                defended() {
                    this.defendedSound.play();
                }

                battle() {
                    this.battleSound.play();
                }
            }

            // class Conquest() {
            //   constructor() {
            //     this.audioController = new AudioController();
            //   }

            //   startGame() {
            //     this.busy = true;
            //     setTimeout(() => {
            //       this.audioController.startMusic();
            //       this.busy = false;
            //     }, 500)
            //   }
            // }

            if (document.readyState == 'loading') {
                document.addEventListener('DOMContentLoaded', ready)
            } else {
                ready()
            }

            function ready() {
                let overlays = Array.from(document.getElementsByClassName('overlay-screen'));
                let music = new AudioController();

                music.startMusic();

                overlays.forEach(overlay => {
                    overlay.addEventListener('click', () => {
                        overlay.classList.remove('visible');
                        music.horn();
                    });
                });
            }
        </script>
    </head>
    <body>
        <div class="page-title">
            <img id="title-logo" src="https://drive.google.com/uc?export=view&id=1-Zvfjx8YqeaowwJ3PCHM98wr6EFeTZCz" />
        </div>
        <div class="overlay-screen visible">
            <img class="splash-screen" src="https://drive.google.com/uc?export=view&id=1ljpe5GszHaxIofOi5LPM0brAodh6A_Tg" />
        </div>
        <div class="overlay-screen">
            Fight!
        </div>
        <div class="main-container">
            <div class="player-list">
                <? for(i = 0; i < 9; i++) { ?>
                    <div class="player">
                    <div class="player-crest" style="background: white;">
                        <img class="crest-img" src="https://drive.google.com/uc?export=view&id=1aqWhjLIcu666Dej70SF-Ygcimr_xFIx8"/>
                    </div>
                    <div class="player-info">
                        <b>3</b>
                    </div>
                    </div>
                <? } ?>
            </div>
            <div class="map-container">
            </div>
        </div>
    </body>
</html>
