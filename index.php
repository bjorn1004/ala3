<?php include 'header.php';?>
<div id="text-m">
    <h1>Lorem Fucking Ipsum</h1>
    <p>
        <span>If you’re not being fucking honest with yourself how could you ever hope to communicate something meaningful to someone else? If you fucking give up, you will achieve nothing. Never, never assume that what you have achieved is fucking good enough. Why are you fucking reading all of this? Get back to work. Practice won’t get you anywhere if you mindlessly fucking practice the same thing. Change only occurs when you work deliberately with purpose toward a goal. Must-do is a good fucking master. Remember it’s called the creative process, it’s not the creative fucking moment. Respect your fucking craft.</span>
        <span>If you fucking give up, you will achieve nothing. Fuck. Dedicate yourself to lifelong fucking learning. Practice won’t get you anywhere if you mindlessly fucking practice the same thing. Change only occurs when you work deliberately with purpose toward a goal. Fuck. Saul Bass on failure: Failure is built into creativity… the creative act involves this element of ‘newness’ and ‘experimentalism,’ then one must expect and accept the fucking possibility of failure. You are not your fucking work.</span>
        <span>Form follows fucking function. Saul Bass on failure: Failure is built into creativity… the creative act involves this element of ‘newness’ and ‘experimentalism,’ then one must expect and accept the fucking possibility of failure. When you sit down to work, external critics aren’t the enemy. It’s you who you must to fight against to do great fucking work. You must overcome yourself. Design as if your fucking life depended on it. Don’t get hung up on things that don’t fucking work. You need to sit down and sketch more fucking ideas because stalking your ex on facebook isn’t going to get you anywhere.</span></p>
</div>

<div id=order>
    <ul>
        <li id="but1"><a href="#Bestellen"><button type="button" class="btn btn-primary">Bestellen</button></a></li>
        <li id="but2"><a href="#Afhalen"><button type="button" class="btn btn-secondary">Afhalen</button></a></li>
    </ul>
</div>
    <div class="container">
    <div id="pizzas" class="card-columns">
        <?php
//draws a pizza card for every pizza in the database
    include 'drawcard.php';
    include 'dbconnect.php';
    $i = 1;
    $sql = "SELECT count(*) FROM `pizzas`";
    $result = $conn->prepare($sql);
    $result->execute();
    $number_of_rows = $result->fetchColumn();

/*    while ($i < $number_of_rows+1){
    $check = fetchPizza($i);
        if ($check == false || $number_of_rows < 10)  {
            $number_of_rows++;
            $i++;
        } else {
            drawCard($i);
            $i++;
        }
    }*/
//        https://youtu.be/VX5gXHcbJAk
            while ($i < $number_of_rows+1){
            drawCard($i);
            $i++;
    }
        //this code relies on perfect numbering of the pizza's, above code tries to fix this, not working...
    ?>
    </div>
</div>
<?php include 'footer.php';?>
