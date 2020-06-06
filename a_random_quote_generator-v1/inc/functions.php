
<?php 
//This is the array of quotes. It includes the quote, the source, and the citation and year if found.
$quotes = array(
    [
        "quote" => "Every great developer you know got there by solving problems they were unqualified to solve until they actually did it.",
        "source" => "Patrick McKenzie",
        "citation" => "Twitter",
        "year" => "2016",
        "genre" => "Life"
    ],
    [
        "quote" => "If you want to know what a man’s like, take a good look at how he treats his inferiors, not his equals.",
        "source" => "Sirius Black",
        "citation" => "Harry Potter and the Goblet of Fire",
        "year" => "2005",
        "genre" => "Books"
    ],
    [
        "quote" => "Everything changes, nothing remains without change.",
        "source" => "Buddha",
        "citation" => "",
        "year" => "",
        "genre" => "Religion"
    ],
    [
        "quote" => "Take it sleazy.",
        "source" => "Eleanor Shellstrop",
        "citation" => "The Good Place",
        "year" => "",
        "genre" => "Television"
    ],
    [
        "quote" => "It is important to fight and fight again, and keep fighting, for only then can evil be kept at bay though never quite eradicated.",
        "source" => "Albus Percival Wulfric Brian Dumbledore",
        "citation" => "Harry Potter and the Half-Blood Prince",
        "year" => "2005",
        "genre" => "Books"
    ]
    );

// array for background colors 
$colors = array(
    "#692A67",
    "#B53FB2",
    "#36b55c",
    "#692E15",
    "#B5562D"
);

// this function retrieves a random quote from the array of quotes. It is based on the amount of quotes so it doesn't have to change! 
function getRandomQuote($array){
    $quote = rand(0,(count($array) - 1));
    return $array[$quote];
};

// This function takes the a random quote from the quotes list and returns it in nice HTML-ready format.
function printQuote($array){
    $chosenQuote = getRandomQuote($array);
    $text = "";
    $text .= "<p class='quote'> $chosenQuote[quote] </p>";
    $text .= "<p class='source'> $chosenQuote[source]";
    if ($chosenQuote[citation]){
        $text .= "<span class='citation'> $chosenQuote[citation] </span>";
    };
    if($chosenQuote[year]){
        $text .= "<span class='year'> $chosenQuote[year] </span>";
    };
    if($chosenQuote[genre]){
        $text .= "</p>";
        $text .= "<p class='genre' style='display: inline-block; border: 2px solid #fff; border-radius:10%; color: #fff; background-color: #36b55c; padding:1rem;'> $chosenQuote[genre] </p>";
    };
    return $text;
};

?>