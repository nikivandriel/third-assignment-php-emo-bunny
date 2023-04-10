<!-- Tips/eisen:
Zorg voor een proportioneel font (font-family: "monospace").
Zorg voor 10-15 emoties.
Werk met arrays, objecten, functies en bestanden;.
Zorg dat de HTML in functies (of een object) staat en roep deze aan.
Gebruik includes.

Werking:
Genereer een regel met random 15 emo-konijntjes.
Genereer daaronder wederom een regel met random 15 emo-konijntjes. Markeer hierbij de emo-konijntjes die overeenkomen met de eerste regel (op dezelfde plaats).
Houd een high-score bij van het aantal gelijke emo-konijntjes.
Houd de score bij van het aantal gelijke emo-konijntjes.
Toon daaronder een blok met 'Hoe vaak komen scores voor?'.
Sla de scores op in bestanden. -->


<?php
// set different emo bunny eyes
$bunny = new EmoBunny();
$bunny->set_eyes('(-.-)');
$bunny2 = new EmoBunny();
$bunny2->set_eyes('(*.*)');
$bunny3 = new EmoBunny();
$bunny3->set_eyes('(@.@)');
$bunny4 = new EmoBunny();
$bunny4->set_eyes('(^.^)');
$bunny5 = new EmoBunny();
$bunny5->set_eyes('(?.?)');
$bunny6 = new EmoBunny();
$bunny6->set_eyes('(>.<)');
$bunny7 = new EmoBunny();
$bunny7->set_eyes('(\./)');
$bunny8 = new EmoBunny();
$bunny8->set_eyes('(o.o)');
$bunny9 = new EmoBunny();
$bunny9->set_eyes('(-.o)');
$bunny10 = new EmoBunny();
$bunny10->set_eyes('(<.>)');
$bunny11 = new EmoBunny();
$bunny11->set_eyes('(+.+)');
$bunny12 = new EmoBunny();
$bunny12->set_eyes('(^.^)');
$bunny13 = new EmoBunny();
$bunny13->set_eyes('(*.*)');
$bunny14 = new EmoBunny();
$bunny14->set_eyes('(+.+)');
$bunny15 = new EmoBunny();
$bunny15->set_eyes('(-.-)');

// emo bunny
class EmoBunny {
    public $ears = "()_()";
    public $eyes;
    public $feet = "'(\")(\")'";
    
    function set_eyes($eyes) {
        $this->eyes = $eyes; 
    }
    function get_eyes() {
        return $this->eyes;
    }
}

$bunnies[] = "<span>" . $bunny->ears . "</span><span>" . $bunny->get_eyes() . "</span><span>" . $bunny->feet . "</span>"; 
$bunnies[] = "<span>" . $bunny->ears . "</span><span>" . $bunny2->get_eyes() . "</span><span>" . $bunny->feet . "</span>"; 
$bunnies[] = "<span>" . $bunny->ears . "</span><span>" . $bunny3->get_eyes() . "</span><span>" . $bunny->feet . "</span>"; 
$bunnies[] = "<span>" . $bunny->ears . "</span><span>" . $bunny4->get_eyes() . "</span><span>" . $bunny->feet . "</span>"; 
$bunnies[] = "<span>" . $bunny->ears . "</span><span>" . $bunny5->get_eyes() . "</span><span>" . $bunny->feet . "</span>"; 
$bunnies[] = "<span>" . $bunny->ears . "</span><span>" . $bunny6->get_eyes() . "</span><span>" . $bunny->feet . "</span>"; 
$bunnies[] = "<span>" . $bunny->ears . "</span><span>" . $bunny7->get_eyes() . "</span><span>" . $bunny->feet . "</span>"; 
$bunnies[] = "<span>" . $bunny->ears . "</span><span>" . $bunny8->get_eyes() . "</span><span>" . $bunny->feet . "</span>"; 
$bunnies[] = "<span>" . $bunny->ears . "</span><span>" . $bunny9->get_eyes() . "</span><span>" . $bunny->feet . "</span>"; 
$bunnies[] = "<span>" . $bunny->ears . "</span><span>" . $bunny10->get_eyes() . "</span><span>" . $bunny->feet . "</span>"; 
$bunnies[] = "<span>" . $bunny->ears . "</span><span>" . $bunny11->get_eyes() . "</span><span>" . $bunny->feet . "</span>"; 
$bunnies[] = "<span>" . $bunny->ears . "</span><span>" . $bunny12->get_eyes() . "</span><span>" . $bunny->feet . "</span>"; 
$bunnies[] = "<span>" . $bunny->ears . "</span><span>" . $bunny13->get_eyes() . "</span><span>" . $bunny->feet . "</span>"; 
$bunnies[] = "<span>" . $bunny->ears . "</span><span>" . $bunny14->get_eyes() . "</span><span>" . $bunny->feet . "</span>"; 
$bunnies[] = "<span>" . $bunny->ears . "</span><span>" . $bunny15->get_eyes() . "</span><span>" . $bunny->feet . "</span>"; 


// random / shuffle() the bunnies;
$bunnyArrayOne = $bunnies;
shuffle($bunnyArrayOne);

$bunnyArrayTwo = $bunnies;
shuffle($bunnyArrayTwo);    

// print row 1
echo "<ul>";
    for ($j = 0; $j <15; ++$j) {
        echo "<li class=$bgc> $bunnyArrayOne[$j]</li>";
    };
echo "</ul>";

// print row 2
// set class red or green as background color
echo "<ul>";
for ($j = 0; $j <15; ++$j) {
    $bunnyArrayOne[$j] == $bunnyArrayTwo[$j] ? $bgc = "true" : $bgc = "false"; 
    echo "<li class=$bgc > $bunnyArrayTwo[$j]</li>";
}
echo "</ul>";

// compair row 1 with row 2
$result = array_intersect_assoc($bunnyArrayOne, $bunnyArrayTwo);

// save same in variable and update variable
$score = 0;
$score = count($result);
print_r("Score: " . $score . "<br>");

// open highscore file and print highscore on screen
$fh = fopen("data/highscore.txt", 'r') or
die("file does not exist");
$highScore = fgets($fh);
print_r("Highscore: " . $highScore . "<br>");

// Compare highscore to new score and save new highscore  
if($score > $highScore) {
    $newHighScore = $score;

    $fh = fopen("data/highscore.txt", 'w') or die("failed to open file");
    fwrite($fh, $newHighScore) or die("could not write to file");    
    fclose($fs);
}
?>