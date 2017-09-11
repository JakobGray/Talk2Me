#!/usr/bin/python3

import sys

print ('Number of arguments:', len(sys.argv), 'arguments.')
print ('Argument List:', str(sys.argv))

for word in sys.argv[1::]:
    print(word)