<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Game of Thrones Quiz</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
    
        <h1>Game of Thrones House Quiz</h1>
        
        <form method="post">
            
        <p>
        1) What's your ideal home look like? <br>
            <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A"> I have only one true home, and it is atop a throne<br>
            <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B"> A patchwork winter fortress<br>
            <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C">  A castle built into the side of a literal rock<br>
            <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D"> Picture the same decor as the Mines of Moria, after everyone was dead
        </p>
        
        <p>
        2) What's the first thing you'd do if you gained the Iron Throne? <br>
            <input type="radio" name="question-2-answers" id="question-1-answers-A" value="A"> Burn them all<br>
            <input type="radio" name="question-2-answers" id="question-1-answers-B" value="B"> Invite the small folk to court at once to hear their needs and complaints<br>
            <input type="radio" name="question-2-answers" id="question-1-answers-C" value="C"> Luxuriate in my own power<br>
            <input type="radio" name="question-2-answers" id="question-1-answers-D" value="D"> Somethin' nasty
        </p>
    
        <p>
        3) Which family pet would you prefer? <br>
            <input type="radio" name="question-3-answers" id="question-2-answers-A" value="A"> Dragons<br>
            <input type="radio" name="question-3-answers" id="question-2-answers-B" value="B"> Direwolves<br>
            <input type="radio" name="question-3-answers" id="question-2-answers-C" value="C"> Kitties<br>
            <input type="radio" name="question-3-answers" id="question-2-answers-D" value="D"> Do dead enemies count?
        </p>
        
        <p>
        4) Which famed ancestor sounds most like you? <br>
            <input type="radio" name="question-4-answers" id="question-3-answers-A" value="A"> Aegon the Conqueror<br>
            <input type="radio" name="question-4-answers" id="question-3-answers-B" value="B"> King Edrick Snowbeard<br>
            <input type="radio" name="question-4-answers" id="question-3-answers-C" value="C"> Lann the Clever<br>
            <input type="radio" name="question-4-answers" id="question-3-answers-D" value="D"> Rogar the Huntsman
        </p>
            
        <p>
        5) Which trait would you like your house motto to evoke? <br>
            <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A"> Doom<br>
            <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B"> Foreboding<br>
            <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C"> Pride<br>
            <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D"> Creepiness
        </p>
            
        <br>    
        <input type="submit" value="Submit">
        <br>
            
        </form>
        
    </body>

    <?php
    
        $answer1 = $_POST['question-1-answers'];
        $answer2 = $_POST['question-2-answers'];
        $answer3 = $_POST['question-3-answers'];
        $answer4 = $_POST['question-4-answers'];
        $answer5 = $_POST['question-5-answers'];

        $totalA = 0;
        $totalB = 0;
        $totalC = 0;
        $totalD = 0;

        
        if ($answer1 == "A") { $totalA++; }
        if ($answer2 == "A") { $totalA++; }
        if ($answer3 == "A") { $totalA++; }
        if ($answer4 == "A") { $totalA++; }
        if ($answer5 == "A") { $totalA++; }
    
        if ($answer1 == "B") { $totalB++; }
        if ($answer2 == "B") { $totalB++; }
        if ($answer3 == "B") { $totalB++; }
        if ($answer4 == "B") { $totalB++; }
        if ($answer5 == "B") { $totalB++; }
    
        if ($answer1 == "C") { $totalC++; }
        if ($answer2 == "C") { $totalC++; }
        if ($answer3 == "C") { $totalC++; }
        if ($answer4 == "C") { $totalC++; }
        if ($answer5 == "C") { $totalC++; }
    
        if ($answer1 == "D") { $totalD++; }
        if ($answer2 == "D") { $totalD++; }
        if ($answer3 == "D") { $totalD++; }
        if ($answer4 == "D") { $totalD++; }
        if ($answer5 == "D") { $totalD++; }

        if ($totalA >= 3) { echo "<div id='results'>House Targaryen</div>"; } 
        else if ($totalA > $totalB) { echo "<div id='results'>House Targaryen</div>"; } 
        else if ($totalA > $totalC) { echo "<div id='results'>House Targaryen</div>"; }     
        else if ($totalA > $totalD) { echo "<div id='results'>House Targaryen</div>"; }     
            
        else if ($totalB >= 3) { echo "<div id='results'>House Stark</div>"; }
        else if ($totalA < $totalB) { echo "<div id='results'>House Stark</div>"; } 
        else if ($totalB > $totalC) { echo "<div id='results'>House Stark</div>"; }     
        else if ($totalB > $totalD) { echo "<div id='results'>House Stark</div>"; } 

        else if ($totalC >= 3) { echo "<div id='results'>House Lannister</div>"; }
        else if ($totalC > $totalB) { echo "<div id='results'>House Lannister</div>"; } 
        else if ($totalA < $totalC) { echo "<div id='results'>House Lannister</div>"; }     
        else if ($totalC > $totalD) { echo "<div id='results'>House Lannister</div>"; } 

        else if ($totalD >= 3) { echo "<div id='results'>House Bolton</div>"; }
        else if ($totalD > $totalB) { echo "<div id='results'>House Bolton</div>"; } 
        else if ($totalD > $totalC) { echo "<div id='results'>House Bolton</div>"; }     
        else if ($totalA < $totalD) { echo "<div id='results'>House Bolton</div>"; } 
    
        else if ($totalA = $totalB) { echo "<div id='results'>House Targaryen</div>"; }
        else if ($totalC = $totalD) { echo "<div id='results'>House Stark</div>"; }
        else if ($totalA = $totalD) { echo "<div id='results'>House Lannister</div>"; }
        else if ($totalB = $totalC) { echo "<div id='results'>House Bolton</div>"; }
    
    ?>

</html>