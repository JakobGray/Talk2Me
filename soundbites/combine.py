#!/usr/bin/env python

import sys
import wave

infiles = []

for word in sys.argv[1::]:
    infiles.append("soundbites/" + word + ".wav")
# infiles = ["soundbites/hello.wav", "soundbites/there.wav"]
outfile = "soundbites/phrase.wav"

data= []
for infile in infiles:
    w = wave.open(infile, 'rb')
    data.append( [w.getparams(), w.readframes(w.getnframes())] )
    w.close()

output = wave.open(outfile, 'wb')
output.setparams(data[0][0])
output.writeframes(data[0][1])
output.writeframes(data[1][1])
output.close()