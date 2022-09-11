#!system/usr/bin/python
import os
import sys
import time

def ketik(teks):
  try:
   for i in teks + "\n":
     sys.stdout.write(i)
     sys.stdout.flush()
     time.sleep(0.1)
  except KeyboardInterrupt:
    print('\n[!] CTRL + C DETECTED')
    time.sleep(1)

try:
  ketik('Disclaimer!')
  ketik('These tools are not to be misused or traded')
except KeyboardInterrupt:
  print('\n[!] CTRL + C DETECTED')
  time.sleep(1)
