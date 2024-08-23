#include <stdio.h>
#include <string.h>
#include <stdlib.h>

void printFlag(){

	FILE *flagFile = fopen("flag.txt", "r");
	
	//Allocate buffer size to read from file
	size_t buff_size = 1024;
	char *buff = (char *)malloc(buff_size);

	//Read the file contents into the buffer
	size_t bytes_read = fread(buff, 1, buff_size, flagFile);
	if (bytes_read != 0) {
		puts("Here is your flag: ");
		printf("%s", buff); //print content of the buffer/file
	}

	fclose(flagFile); //close file
	free(buff); //free memory occupied by the buffer
}

void win(){
	printf("You should not be here. \nHere's your flag, get out: ");
	printFlag();
}

void welcomeFunction(){

	char buffer[12];

	printf("Enter the secret key to get access to the secret function: ");
	scanf("%s", buffer);

	printf("The secrey key you provided is wrong! Better luck next time");
}

void main(){

	welcomeFunction();
}