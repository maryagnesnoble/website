#!/usr/bin/perl

$regexp = shift @ARGV ;
while( <> ) {
    print if /$regexp/ ;
}
