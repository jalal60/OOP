<?php
// Interaction -> When we access a property or method of an object.
class Song
{
    // Create songId,title and duration public properties
    public $songId;
    public $title;
}

// Instantiate an "Numb" song using the new keyword
$numb = new Song();
$numb->songId = 1;
$numb->title = 'Numb';
//print_r($numb);
$greedy = new Song();
$greedy->songId = 2;
$greedy->title = 'Greedy';
//print_r($greedy);

//Composition -> When we use another class's object inside another class as property.
class PlayList
{
    public $name;
    public $song = array();
    public function addSong($song)
    {
        $this->song[] = $song;
    }
}
$rockPlay = new PlayList();
$rockPlay->name = "Rock";
$rockPlay->addSong($numb);
$rockPlay->addSong($greedy);
echo "PlayList:" . $rockPlay->name . PHP_EOL;
echo "Id" . " " . "Title";
foreach ($rockPlay->song as $item) {
    echo  PHP_EOL;
    foreach ($item as $key => $value) {
        echo $value . " ";
    }
}
//print_r($rockPlay);
