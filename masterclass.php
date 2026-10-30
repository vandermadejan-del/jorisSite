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
        require_once 'ReusedPhp/header.php'
        ?>

    </header>
    <main>
        <div class="Logo-Title">'
            <img src="/Joris/img/logo.png" alt="Logo">
            <h1>MasterClass</h1>
        </div>
        <div class="wrapperColumn">
            <div class="TextRows">

                <h2>Wat zijn masterclasses?</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ea similique illo? Praesentium aperiam possimus eaque quibusdam tenetur nihil odio consequuntur aspernatur harum? Magnam eos repellendus optio. Dolor, architecto deserunt, Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate dolor voluptatibus quisquam dolore recusandae earum voluptatum, animi sequi ipsum a atque blanditiis quidem hic assumenda dolores distinctio nesciunt! Cum, dicta?</p>
            </div>
        </div>
        <div class="wrapperColumn">
            <form action="/Joris/data/verwerker.php" method="POST">
                <div class="formLayout">
                    <div class="FormQuestion">
                        <label for="name">naam</label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div class="FormQuestion">
                        <label for="Email">je Email</label>
                        <input type="Email" name="Email" id="Email" required>

                    </div>
                    <div class="FormQuestion">
                        <label for="data">geboorte datem</label>
                        <input type="date" name="date" id="date" required>
                    </div>
                    <div class="FormQuestion">
                        <label for="number">Telefoon-nummer</label>
                        <input type="tel" name="number" id="number" required>
                    </div>
                </div>
                <input type="submit"  id="Submit">

            </form>
        </div>


        </div>

    </main>
    <footer>
        <?php
        require_once 'ReusedPhp/footer.php'
        ?>
    </footer>

</body>

</html>