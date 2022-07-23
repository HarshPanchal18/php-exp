<?php

/*
preg_match() - Perform a regular expression match.
preg_match_all() - Perform a global regular expression match.
preg_replace() - Perform a regular expression search and replace.
preg_grep() - Returns the elements of the input array that matched the pattern.
preg_split() - Splits up a string into substrings using a regular expression.
preg_quote() - Quote regular expression characters found within a string
 */

//Character class

/*
[abc] -  Matches any one of the characters a, b, or c.
[^abc] -  Matches any one character other than a, b, or c.
[a-z] -  Matches any one character from lowercase a to lowercase z.
[A-Z] -  Matches any one character from uppercase a to uppercase z.
[a-Z] -  Matches any one character from lowercase a to uppercase Z.
[0-9] -  Matches a single digit between 0 and 9.
[a-z0-9] -  Matches a single character between a and z or between 0 and 9.
 */

$pattern = "/ca[kf]e/" ;
$text = "He was eating cake in the cafe." ;
if ( preg_match ( $pattern , $text))
    echo "Match found!\n" ;
else
    echo "Match not found.\n" ;
//Output: Match Found!

//Predefined Character classes

/*
.   Matches any single character except newline \n .
\d  matches any digit character. Same as [0-9]
\D  Matches any non-digit character. Same as [^0-9]
\s  Matches any whitespace character (space, tab, newline or carriage return character). Same as [\t\n\r]
\S  Matches any non-whitespace character. Same as [^ \t\n\r]
\w  Matches any word character (definned as a to z, A to Z,0 to 9, and the underscore). Same as [a-zA-Z_0-9]
\W  Matches any non-word character. Same as [^a-zA-Z_0-9]
 */

$pattern = "/\s/" ;
$replacement = "-" ;
$text = "Earth revolves around\nthe\tSun" ; // Replace spaces, newlines and tabs

echo preg_replace ( $pattern , $replacement , $text) ;
echo "\n";
echo str_replace ( " " , "-" , $text) ; // Replace only spaces
/*
Earth-revolves-around-the-Sun
Earth-revolves-around
the     Sun
 */

//Repeatition Quantifiers
/*
p+ Matches one or more occurrences of the letter p.
p* Matches zero or more occurrences of the letter p.
p?  Matches zero or one occurrences of the letter p.
p{2} Matches exactly two occurrences of the letter p.
p{2,3} Matches at least two occurrences of the letter p, but not more than three occurrences of theletter p.
p{2,} Matches two or more occurrences of the letter p.
p{,3} Matches at most three occurrences of the letter p
*/

$pattern = "/[\s,]+/" ;
$text = "My favourite colors are red, green and blue" ;
$parts = preg_split ( $pattern , $text) ;

foreach ( $parts as $part)
    echo $part .  "\n" ;

/*
My
favourite
colors
are
red
green
and
blue
*/
//Position Anchors
/*
^p Matches the letter p at the beginning of a line.
p$ Matches the letter p at the end of a line.
*/

$pattern = "/^J/" ;
$names = array ( "Jhon Carter" , "Clark Kent" , "John Rambo") ;
$matches = preg_grep ( $pattern , $names) ;

foreach ( $matches as $match)
    echo $match .  "\n" ;
/*
Jhon Carter
John Rambo
 */

//Pattern Modifiers
/*
i Makes the match case-insensitive manner.
m Changes the behavior of ^ and $ to match against a newline boundary (i.e. start or end of eachline within a multiline string), instead of a string boundary.
g Perform a global match i.e. finds all occurrences.
o Evaluates the expression only once.
s Changes the behavior of
.  (dot) to match all characters, including newlines.
x Allows you to use whitespace and comments within a regular expression for clarity.
 */

$pattern = "/color/i";
$text = "Color red is more visible than color blue in daylight.";
$matches = preg_match_all($pattern, $text, $array);

echo $matches . " matches were found."; // 2 matches were found

$pattern = "/^color/im";
$text = "Color red is more visible than \ncolor blue in daylight.";
$matches = preg_match_all($pattern, $text, $array);

echo $matches . " matches were found."; // 2 matches were found
?>
