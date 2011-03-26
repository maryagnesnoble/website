#!/usr/bin/python
## Read text from stdin and generate new text via a Markov process of
## order 2: i.e. draw the next word from the set of words that are
## observed to follow the previous two.

import sys
import random

w = sys.stdin.read().split(None)

x = {} 
for i in range(2, len(w)):
    w1 = w[i-2]
    w2 = w[i-1]
    w3 = w[i]
    if not w1 in x.keys():     x[w1] = {}
    if not w2 in x[w1].keys(): x[w1][w2] = []
    x[w1][w2].append(w3)
    
w1 = w[0]
w2 = w[1]
for i in range(1, len(w)):
    w3 = random.sample(x[w1][w2], 1)[0]
    print w3,
    w1 = w2
    w2 = w3
