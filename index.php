<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 3</title>
</head>
<body>
    
    <?php
        //ternary page 76
$age = 21;
if ($age < 16) {
    $price = 5;
} else {
    $price = 10;
}   
 
//can be written as
$price = ($age < 16) ? 5 : 10;
echo($price . "\n");

//switch page 79
$day = 'Monday';

switch ($day) {
    case "Monday":
        echo 'Wash on Monday';
        break;
    case 'Tuesday':
        echo 'Iron on Tuesday';
        break;
    default:
        echo 'I am not doing any more laundry';
        break;
}
echo ("\n");

// match page 80
//match uses strict comparison (===), returns a value, and does not need break.
$letterGrade = "B";

$message = match ($letterGrade) {
    "A" => "Excellent work!",
    "B" => "Good job!",
    "C" => "You are making progress.",
    "D" => "More practice is needed.",
    "F" => "Please meet with your instructor.",
    default => "That is not a valid letter grade.",
};

echo $message . "\n";

// match can have multiple values
$statusCode = 404;

$message = match ($statusCode) {
    200, 201 => "The request was successful.",
    400, 404 => "There was a problem with the request.",
    500, 503 => "The server encountered an error.",
    default  => "Unknown status code.",
};

echo $message . "\n";

// foreach with an associative array — page 91
$animals = [
    "Dog" => "Bark", 
    "Cat" => "Meow", 
    "Cow" => "Moo"
]; 
 
foreach ($animals as $animal => $sound) {
    echo "A $animal makes a $sound sound.\n";
}

// or page 92 values only 
foreach($animals as $sound) {
    echo "A $sound sound.\n";
}
 
    ?>
    
</body>
</html>
