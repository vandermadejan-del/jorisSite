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
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis officiis aperiam libero, quo sequi doloremque possimus eum deleniti et, doloribus ea minima harum alias culpa ratione quisquam magnam autem. Veniam.</p>
                </div>
            </div>
            <div class="product">

                <div class="ProductTextFrame">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis officiis aperiam libero, quo sequi doloremque possimus eum deleniti et, doloribus ea minima harum alias culpa ratione quisquam magnam autem. Veniam.</p>
                </div>
                <div>
                    <div class="relative">
                        <img  class="hoverableImage clickableImg" src="/Joris/img/WhatsApp.jpeg" alt="ok">
                        <h2 class="lowmiddleposition">Kamado</h2>
                    </div>
                </div>
            </div>
            <div class="product">

                <div class="relative">
                    <img class="hoverableImage clickableImg" src="/Joris/img/WhatsApp.jpeg" alt="">
                    <h2 class="lowmiddleposition">Kamado</h2>
                </div>
                <div class="ProductTextFrame">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis officiis aperiam libero, quo sequi doloremque possimus eum deleniti et, doloribus ea minima harum alias culpa ratione quisquam magnam autem. Veniam.</p>
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
    </script>
    <footer>
        <?php
        include 'ReusedPhp/footer.php'
        ?>
    </footer>

</body>

</html>