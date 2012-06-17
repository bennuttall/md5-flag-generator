MD5-Flag-Generator
==================

Use substrings of the MD5 hash of any string to generate flags to represent the string - inspired by Brian Suda

If you pass in the GET method variable 'thing' with a value, the script will hash it, take the first 6 characters and use it as the hex value for a colour. It does the same for the next 6 characters and the 6 after that, to get 3 seemingly random colours with which to make a flag to represent the string. This could be a username, email address, or a cocktail of data for the sake of uniqueness.

Inspired by Brian Suda's book - Designing With Data - http://www.designingwithdata.com/
