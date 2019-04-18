<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Harry Potter Quiz</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
    
        <h1>Sorting Hat Quiz</h1>
        
        <form method="post">
        
        <p>
        1) Which class would you like most? <br>
            <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A"> Potions<br>
            <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B"> Charms<br>
            <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C">  Defense Against the Dark Arts<br>
            <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D"> History of Magic
        </p>
        
        <p>
        2) Which animal would you choose for your Hogwarts pet? <br>
            <input type="radio" name="question-2-answers" id="question-1-answers-A" value="A">  Rat<br>
            <input type="radio" name="question-2-answers" id="question-1-answers-B" value="B">  Toad<br>
            <input type="radio" name="question-2-answers" id="question-1-answers-C" value="C">  Owl<br>
            <input type="radio" name="question-2-answers" id="question-1-answers-D" value="D"> Cat
        </p>
    
        <p>  
        3) Which position in Quidditch would you like most to play? <br>
            <input type="radio" name="question-3-answers" id="question-2-answers-A" value="A"> Bludger<br>
            <input type="radio" name="question-3-answers" id="question-2-answers-B" value="B">  Keeper<br>
            <input type="radio" name="question-3-answers" id="question-2-answers-C" value="C">Seeker<br>
            <input type="radio" name="question-3-answers" id="question-2-answers-D" value="D"> Chaser
        </p>
        
        <p>
        4) Which flavor of Bertie Botts Beans would you prefer? <br>
            <input type="radio" name="question-4-answers" id="question-3-answers-A" value="A"> Chocolate<br>
            <input type="radio" name="question-4-answers" id="question-3-answers-B" value="B"> Licorice<br>
            <input type="radio" name="question-4-answers" id="question-3-answers-C" value="C"> Strawberry<br>
            <input type="radio" name="question-4-answers" id="question-3-answers-D" value="D"> Peanut Butter
        </p>
        
        <p>    
        5) What are your best qualities?
        <br>
            <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A"> Smart<br>
            <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B">Loyal<br>
            <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C"> Brave<br>
            <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D"> Kind
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

        if ($totalA >= 3) { echo "<div id='results'>House Slytherin</div>"; } 
        else if ($totalA > $totalB) { echo "<div id='results'>House Slytherin</div>"; } 
        else if ($totalA > $totalC) { echo "<div id='results'>House Slytherin</div>"; }     
        else if ($totalA > $totalD) { echo "<div id='results'>House Slytherin</div>"; }     
            
        else if ($totalB >= 3) { echo "<div id='results'>House Ravenclaw</div>"; }
        else if ($totalA < $totalB) { echo "<div id='results'>House Ravenclaw</div>"; } 
        else if ($totalB > $totalC) { echo "<div id='results'>House Ravenclaw</div>"; }     
        else if ($totalB > $totalD) { echo "<div id='results'>House Ravenclaw</div>"; } 

        else if ($totalC >= 3) { echo "<div id='results'>House Gryffindor</div>"; }
        else if ($totalC > $totalB) { echo "<div id='results'>House Gryffindor</div>"; } 
        else if ($totalA < $totalC) { echo "<div id='results'>House Gryffindor</div>"; }     
        else if ($totalC > $totalD) { echo "<div id='results'>House Gryffindor</div>"; } 

        else if ($totalD >= 3) { echo "<div id='results'>House Hufflepuff</div>"; }
        else if ($totalD > $totalB) { echo "<div id='results'>House Hufflepuff</div>"; } 
        else if ($totalD > $totalC) { echo "<div id='results'>House Hufflepuff</div>"; }     
        else if ($totalA < $totalD) { echo "<div id='results'>House Hufflepuff</div>"; } 
    
        else if ($totalA = $totalB) { echo "<div id='results'>House Slytherin</div>"; }
        else if ($totalC = $totalD) { echo "<div id='results'>House Ravenclaw</div>"; }
        else if ($totalA = $totalD) { echo "<div id='results'>House Gryffindor</div>"; }
        else if ($totalB = $totalC) { echo "<div id='results'>House Hufflepuff</div>"; }
    
    ?>

</html>