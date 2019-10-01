<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Pokédex</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="Javascript/jsEvents.js"></script>
        <link rel="stylesheet" href="CSS/styles.css">
    </head>
    <body>
        <div id="main">
            
            <div id="title">
                Pokédex 1.0
            </div>
            
            <div id="content">
                <div id="leftdiv">
                    <p>Select a Pokemon</p>
                    <select id="pokelist" size="12">
                        <?php
                            require_once('classes/pokeList.php');
                            $list = new pokeList;
                            $pokemons = $list->getList();
                            foreach($pokemons as $pokemon){
                                echo '<option value="'. str_replace('/', '', substr($pokemon['url'],33)) .'">' . $pokemon['name'] . '</option>';
                            }
                        ?>
                    </select>
                    <div id="search">
                        Search
                        <input type="search" id="searchList">
                    </div>
                    
                </div>

                <div id="rightdiv">
                    <p>Features</p>
                    <div id="details"></div>
                </div>
            </div>
        </div>
    </body>
</html>