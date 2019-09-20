import os,sys,time,mechanize

def menu():

	kntl = input("\033[1;92mPiLiH \033[0m: ")
	if kntl =="":
		exit()
	elif kntl =="A":
		solo()
	elif kntl =="a":
		solo()
	elif kntl =="B":
		os.system ("sh install.sh")
		exit()
	elif kntl =="b":
		os.system ("sh install.sh")
		exit()
menu:
