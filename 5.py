import os, sys
username = 'buat sendiri lah ajg'
password = 'aing ga di hargai juga bisa nghargai orang asu'

def restart():
    ngulang = sys.executable
    os.execl(ngulang, ngulang, *sys.argv)


def main():
    uname = raw_input('username : ')
    if uname == username:
        pwd = raw_input('password : ')
        if pwd == password:
            print '\n\x1b[1;34mWOKE WELCOM TO MY TOOLS',
            sys.exit()
        else:
            print '\n\x1b[1;36mKALO GA TAU GA USAH MAKSA ASU!!!\x1b[00m'
            print 'LOGIN KEMBALI \n'
            restart()
    else:
        print '\n\x1b[1;36mUSERNAME BUKAN ITU ASW !!!\x1b[00m'
        print 'LOGIN BALIK AH\n'
        restart()


try:
    main()
except KeyboardInterrupt:
    os.system('clear')
