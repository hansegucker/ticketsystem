import os
import time

def playmotorprogram(program):#nicht fertig
    os.system("irsend SEND_ONCE /etc/lirc/lircd.conf KEY_"+program)
    activemprogram=program

def getbefehl(datei):
    befehl = open(datei+".txt").read()
    return befehl

while True:
    if(getbefehl("status")=="oeffnenbitte"):
        playmotorprogram("1")
        fobj_out = open("status.txt","w")
        fobj_out.write("")
        fobj_out.close()
        print("Sended")
