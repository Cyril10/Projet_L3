#include <stdio.h>
#include <stdlib.h>
#include <winsock2.h>
#include <winsock.h>
#include "C:\Users\Bastian\Desktop\Connecteur C\include/mysql.h"


int main(int argc, char *argv)
{
    MYSQLcon;
    con=mysql_init(NULL);
    if(con==NULL){
        printf("non");
    }
    if(mysql_real_connect(con,"localhost","root","root","projet",0,NULL,0)==NULL){
        printf("faux");
    }
    printf("Connecté");
    mysql_close(con);
    return 0;
}