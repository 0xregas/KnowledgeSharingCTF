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
		fflush(stdout);
	}

	fclose(flagFile); //close file
	free(buff); //free memory occupied by the buffer
}

void banner(){
	puts("Welcome to Honey Badgers CTF");

	return;
}

void challenge(){
	char changeme[8] = "hello";
	char name[8];
	
	printf("Enter your name: \n");
	fflush(stdout);
	gets(name);

	if(strcmp(changeme, "hello") != 0)
	{
		printFlag();
	} else {
		printf("Goodbye, %s\n", name);
		fflush(stdout);
	}

	return;
}

int main(int argc, char* argv[]){
	setvbuf(stdout, 0LL, 2, 0LL);
	setvbuf(stdin, 0LL, 1, 0LL);
	banner();	
	challenge();
	
	return 0;
}
