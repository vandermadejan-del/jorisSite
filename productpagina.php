<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Joris/css/stylesheet.css">
    <?php
    require_once 'ReusedPhp/head.php'
    ?>
</head>

<body>
    <header>
        <?php
        include 'ReusedPhp/header.php'
        ?>

    </header>
    <button class="JavaStyleButton" id="JavaStyleButton"> Met effects</button>
    <main class="wrapperColumn">
        <div class="Logo-Title">'
            <img src="/Joris/img/logo.png" alt="Logo">
            <h1>Producten</h1>
        </div>
        <div class="ProductenPagina">
            <div class="product">
                <div class="relative">
                    <img class="hoverableImage clickableImg" id="HotterFire" src="/Joris/img/WhatsApp.jpeg" alt="ok">
                    <h2 class="lowmiddleposition">Kamado</h2>
                </div>
                <div class="ProductTextFrame">
                    <p>blauwe kamado!</p>
                    <p>prijs €100</p>
                    <p>Beste kwaliteit. voor zijn prijs, stevig en van het beste material gemaakt zoals stainless steel</p>
                </div>
            </div>
            <div class="product">

                <div class="ProductTextFrame">
                   <p>groene kamado!</p>
                    <p>prijs €1000</p>
                    <p>Beste kwaliteit, geeft je barbeque's een groene kleur als je vlees erin doet krijgt het een groene kleur</p>
                </div>
                <div>
                    <div class="relative">
                        <img  class="hoverableImage clickableImg" src="/Joris/img/groenekamado.jpg" alt="ok">
                        <h2 class="lowmiddleposition">Kamado</h2>
                    </div>
                </div>
            </div>
            <div class="product">

                <div class="relative">
                    <img class="hoverableImage clickableImg" src="/Joris/img/rainbowkamado.jpg" alt="">
                    <h2 class="lowmiddleposition">Kamado</h2>
                </div>
                <div class="ProductTextFrame">
                    <p>regenboog kamado!</p>
                    <p>prijs €10000</p>
                    <p>Beste kwalitei, niet gewoon een kleur geeft licht in het donker and geeft magisch de perfecte hoeveelheid zout en peper an alles wat je er in doet</p>
                </div>
            </div>



        </div>
        <div class="TextRows product">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ea similique illo? Praesentium aperiam possimus eaque quibusdam tenetur nihil odio consequuntur aspernatur harum? Magnam eos repellendus optio. Dolor, architecto deserunt, Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate dolor voluptatibus quisquam dolore recusandae earum voluptatum, animi sequi ipsum a atque blanditiis quidem hic assumenda dolores distinctio nesciunt! Cum, dicta?</p>
        </div>
    </main>
    <script>
        // const clickableImage = document.getElementById('clickableImage')
        const JavaStyleButton = document.getElementById('JavaStyleButton')
        const hotterfireGui = document.querySelectorAll('.hoverableImage')
    
        let cool = false
      
        
        JavaStyleButton.addEventListener('click', () => {
            if (cool === false) {
                hotterfireGui.forEach((img) =>{
                    img.classList.remove('hoverableImage')
                    cool = true
                }
            )
            }
            else{
                hotterfireGui.forEach((img) =>{
                    img.classList.add('hoverableImage')
                    cool = false
                })
                
                
            }
            


        })

        // ---- Afbeelding popup ----
        // Klik op een product-afbeelding: er komt een grotere kopie in het midden van de pagina
        const clickableImages = document.querySelectorAll('.clickableImg')

        clickableImages.forEach((img) => {
            img.addEventListener('click', () => {
                openImagePopup(img)
            })
        })

        function openImagePopup(img) {
            closeImagePopup() // zorgt dat er maar 1 popup tegelijk open is

            // donkere achtergrond over de hele pagina
            const popup = document.createElement('div')
            popup.id = 'imgPopup'
            popup.classList.add('imgPopup')

            // kopie van de aangeklikte afbeelding
            const copy = img.cloneNode()
            copy.removeAttribute('id') // geen dubbele id's op de pagina
            copy.classList.remove('hoverableImage', 'clickableImg')
            copy.classList.add('fireBorder', 'centerImg')

            // knop om de popup dicht te doen
            const closeButton = document.createElement('button')
            closeButton.classList.add('closeButton')
            closeButton.textContent = 'X'
            closeButton.addEventListener('click', closeImagePopup)

            // afbeelding + knop samen in een box zetten
            const box = document.createElement('div')
            box.classList.add('imgPopupBox')
            box.append(copy, closeButton)

            popup.append(box)
            document.body.append(popup)

            // klik naast de afbeelding (op de donkere achtergrond) sluit ook
            popup.addEventListener('click', (event) => {
                if (event.target === popup) {
                    closeImagePopup()
                }
            })
        }

        function closeImagePopup() {
            const popup = document.getElementById('imgPopup')
            if (popup) {
                popup.remove()
            }
        }

        // Escape-toets sluit de popup ook
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                closeImagePopup()
            }
        })
    </script>
    <footer>
        <?php
        include 'ReusedPhp/footer.php'
        ?>
    </footer>

</body>

</html>