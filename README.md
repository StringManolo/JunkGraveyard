# SMDFPHC
String Manolo Device Fingerprint Plus Handmade Cipher

At the moment just reading HTTP headers. 
Will add in the future:
-More PHP fingerprint.
-CSS, HTML and javascript device fingerprint.

Cipher design is pretty strong but the implementation at the php file by itself is not.
To be a secure cipher needs at least:
-Reorder each caracter of plaintext. (Will be based on password).
-Make sure the password has the same or more size than the plaintext.
-Use only one password for each ciphertext generated.
-Fix size of Ciphertext.
-ADD extra crypto-secure pseudorandom data based on password each time to avoid chosed plaintext atacks.
