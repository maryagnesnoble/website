#!/usr/bin/perl

die "usage: twowords word1 word2\n" if( scalar @ARGV != 2 ) ;

$word1 = shift @ARGV ;
$word2 = shift @ARGV ;

## print "seeking words: ", $word1, " and ", $word2, "\n" ;

while( <> ) {
    
    print if /$word1.*$word2/ ;


}
