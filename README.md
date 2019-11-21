<h1>String Encryption Algorithm Task (Robusta)</h1> 

<h2>
    Installation
</h2>
 -Clone The Repo
 
 ```
 git clone https://github.com/hossammohammed72/RobustaStringEncryption.git 
 ```
 -Install Dependencies via composer 
 using
 
 ```  composer update ```
And Then 

``` composer dump-autoload ```

***Congrats you succesfully installed the repo*** 

<h2>
Usage 
</h2>
***In general the command have the structure of***

``` php artisan method:aglorithmName {string} ```
details below 
- Using the shift algortihm 
***encrypt***
```
php artisan encrypt:shift {string}
```
**decrypt**
```
php artisan decrypt:shift {string}
```
- Using the Matrix Multiplication algortihm 
**encrypt**
```
php artisan encrypt:matrix {string}
```
**decrypt**
```
php artisan decrypt:matrix {string}
```

- Using the Reverse algortihm 
**encrypt**
```
php artisan encrypt:reverse {string}
```
**decrypt**
```
php artisan decrypt:reverse {string}
```

<h2>Important Remarks</h2>
***Matrix Multiplication Algorithm Follows the following steps***
<br>
1. Encryption 
    a. first each character is converted to it's 7 bit ascii representation and thin is concatenated with leading zeros to be 16-bit number 
<br>
    b.  the 16-bit number is multiplied by the matrix giving us a non binary 1x16 matrix 
    <br>
    c.  each number in the matrix is converted to 8-bit binary representation and then all gets concatenated to form a string of length 
    8*16 = 128 
    (i.e each character will result in 128 bit binary string 
    <br>
    d. all the newly 128bit encrypted character all concatenated together to form 1-string which is the cypher. 
    the cyhper length = #Characters in Orgingal String*128 
   <br>
   **Example** 
   If we want to encrypt the string using matrix multiplication 
   ``` 
   hello world 
   ```
   since the string length is 11 characters then it will result in 11*128=1408 string length 
   which will be something like 
   ```
   0001011100000110000100010000110000000011000011010000010100001001000011010000101000001111000010010001001000010000000011000000100000011011000011110000111100010111000011100001010000010001000100000001100000001100000011100001011000011110000011100001001000001010000110110000011000010011000101010000101000010101000011010000110100010100000011010000111100010000000110110001000100010000000010010001101100000110000100110001010100001010000101010000110100001101000101000000110100001111000100000001101100010001000100000000100100100111000101010001101000100011000100000010000100010101000101000010000000010010000110110010000000100101000101110001011000010111000010000000010000001001000000110000000000000100000000000000010100000100000000010000011100000101000001110000001000000100000000110010011000011010000110100010010000010000000111010001001100011010000110110001001000010110000111100010101100010000000111010001010100100111000101010001101000100011000100000010000100010101000101000010000000010010000110110010000000100101000101110001011000010111000110100001000100011000000100100000010000010010000001000001000000001011000011000001000000001110000111000000101100010101000011110001101100000110000100110001010100001010000101010000110100001101000101000000110100001111000100000001101100010001000100000000100100010011000001100000111100001110000010010001000100001010000010100000111100001001000010000000110100011000000010100000111000000101
   ```
   
2-Decryption 
 <br>
 a- first the cypher is sliced into several equal length strings each equal to 128 (character length in out algorithm) such that each string is the cypher of a certain character 
 <br>
 b- the character is then divided into 16 string of 8-bit strings that represnt the matrix of the character 
<br>
c- the matrix is then multiplied by the inverse of the encryption matrix given in the task document 
<br>
d- the output is then decrypted back to the original string before encryption 
 
 **Shift Encryption Algorithm** 
 The algorithm only handles with alphabet characters and doesn't deal with the rest of the ascii table, the other two algorithms handles the whole ascii table
 
   

