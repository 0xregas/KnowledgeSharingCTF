#include <stdio.h>
#include <string.h>
#include <stdlib.h>

int main(void){

	char name[64];

	//Allocate buffer size to read from file
	char flag[64];
	char *buff = flag;

	FILE *flagFile = fopen("flag.txt", "r");

	//Read the file contents into the buffer
	fgets(flag, sizeof(flag), flagFile);

	puts("Enter your name: ");
	fgets(name, sizeof(name), stdin);

	printf(name);
	printf("\n");

	return 0;
}