import RPi.GPIO as GPIO
import mechanize, sys, time, os

GPIO.setmode(GPIO.BOARD)
GPIO.setwarnings(False)

br  = mechanize.Browser()
host = "" # your host, web files...

pinler = 
['03','05','07','08','10','11','12','13','15','16','18','19','21','22','23','24','26','29','31','32','33','35','36','37','38','40']

for setup_pin in pinler:
	GPIO.setup(int(setup_pin), GPIO.OUT)
	GPIO.output(int(setup_pin), 0)

while True:
	acik_pinler = br.open(host).read().rstrip(",").split(",")
	if acik_pinler[0] == "":
		kapali_pinler = list(set(pinler) - set(acik_pinler))
		for kapali in kapali_pinler:
			GPIO.output(int(kapali), 0)
	else:	
		kapali_pinler = list(set(pinler) - set(acik_pinler))
		for acik in acik_pinler:
			GPIO.output(int(acik), 1)
		for kapali in kapali_pinler:
			GPIO.output(int(kapali), 0)
	time.sleep(1)
