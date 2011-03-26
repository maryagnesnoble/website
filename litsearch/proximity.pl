#!/usr/bin/perl

## Proximity search
## proximity --proximity p word1 [ word2 word3 ... ]
## Output paragraphs if all words occur in paragraph, and no two words are separated by more than p words

use Getopt::Long ;
GetOptions('proximity|p=i' => \$proximity) ;

$proximity = 1 unless $proximity ;

## remaining arguments are the words
while(@ARGV) {
    push @words, shift @ARGV ;
}
$numwords = @words ;

## the words can occur in any order, so we need (word1|word2|...) repeated $numwords times.
$alts = join "|", @words ;
$alts = "(".$alts.")" ;

## Now create a list of $numwords of those alternatives; i.e. in R: regex = rep(alts, numwords)
foreach(@words) {
    push  @regex, $alts ;
}

$sep = "([^\\w]+\\w*){0,$proximity}" ; ## the words are separated by no more than $proximity word-whitespace units
## $regex = join $sep, @regex ;

## Unfortunately this search strategy has two problems:
## 1. It can find repeated occurrences of e.g. word1, rather than strict non-repeating permutations of the words
## 2. It can take a long time

## TODO should be all permutations of words, not just forward and reverse orderings.
$regex = join $sep, @words ;
$regex_rev = join $sep, reverse(@words) ;

## test first line for DOS- vs. linux-style line endings and set input record separator so that <> reads paragraphs.
$/ = (<> =~ /\r/) ? "\r\n\r\n" : "\n\n" ;

## print "<h2>Your search corresponds to the following regular expression:</h2>$regex\n\n" ;
## print "<h2>The following paragraphs matched your search:</h2>\n\n" ;

$div = "<br><br>---------------------<br><br>\n\n" ;

$status = 2 ;
while( <> ) {
    if( /$regex/si or /$regex_rev/si ) { ## s =  . matches newline; i = case insensitive
	    s,($regex),<span style="background-color: #FFFF00"> $1 </span>,gsi ;
	    s,($regex_rev),<span style="background-color: #FFFF00"> $1 </span>,gsi ;
	    print $div if $not_the_first_one ;
	    $not_the_first_one = "that's right" ;
	    print ;
	    $status = 0 ;
	}
}

print "No occurrences\n" if $status > 0 ;

exit $status ;
