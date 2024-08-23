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


int main(){
	
	char changeme[8] = "hello";
	char name[8];
	

	printf("Enter your name: ");
	gets(name);

	if(strcmp(changeme, "hello") != 0)
	{
		printFlag();
	} else {
		printf("Goodbye, %s \n", name);
	}

	return 0;
}
///usr/bin/ld: /tmp/ccEolMaT.o: in function `main':