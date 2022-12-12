<?php 

$phrase = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, soluta? Dolore obcaecati quis maxime enim odit ea reprehenderit inventore temporibus? Temporibus recusandae at labore sit quis aperiam adipisci, quibusdam impedit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit est dolores ex quo fugiat distinctio nesciunt enim magni! Nihil aut dolores quo earum autem nisi dolorem maiores facere quia natus! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque quisquam animi asperiores sequi! Eum accusamus adipisci ut veritatis sint harum ipsam maxime quia. Nam esse repudiandae voluptates, quia numquam in! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi quod ratione dicta saepe ducimus recusandae iste praesentium quo cum velit, quae fuga, distinctio tempora modi nam nihil, magni aliquam officia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis aspernatur harum delectus mollitia reprehenderit earum, eligendi nisi quae dolores numquam sint repellendus vero quia voluptatem sunt velit unde qui quod. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia minima non soluta voluptates nesciunt, culpa, voluptatem eveniet repellendus, in dignissimos dolor provident tempore? Reprehenderit sapiente eos sit, ipsam ea quibusdam?";

$ban = "***";


$magicWord = $_GET["word"]

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ban</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <div class="w-75 m-auto">
           <h1 class="text-center">Testo</h1>
           <p><?php echo  str_replace($magicWord, $ban, $phrase) ?></p>
           <div class="d-flex justify-content-between">
                <form action="" class="text-center w-50">
                    <input name="word" type="text" placeholder="Inserisci la parola da censurare">
                    <button>Censura</button>
                </form> 
                <p>Numero di Parole totali: <?php echo strlen($phrase)?></p>
           </div>
           
        </div>
        

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>