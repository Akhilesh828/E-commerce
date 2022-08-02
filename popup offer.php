<!DOCTYPE html>
<html>
    <head>
        <meta charset="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="popup offer.css">

    </head>
    <body>
        <div class="stone">
            <div class="popup">
                <div class="contBox">
                    <div class="close"></div>
                    <div class="imgbx">
                        <img src="images/gift.png" alt="">
                    </div>
                    <div class="cont">
                        <div>
                            <h3>Special Offer</h3>
                            <h2>80% <span>off</span></h2>
                            <p>hhhhhhhhhhhhhhhhhhhhhhhhhhhhh
                                jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj
                                nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn
                            </p>
                            <a href="#">Get The Deal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- -------------------------------Automatic show popup after 2second of page load------------- -->


        <script>
            const popup = document.querySelector('.popup');
            const close = document.querySelector('.close');

            window.onload = function(){
                setTimeout(function(){
                    popup.style.display = "block";

                    // add some time delay to show popup
                },2000)
            }

            close.addEventListener('click',()=>{
                popup.style.display = "none";
            })



        </script>







    </body>
</html>