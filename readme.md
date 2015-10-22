# P3 Lorem Ispum and User Generator

## Live URL
<http://p3.philipjames.me>

## Demo Screencast
coming soon...

## Description
This website uses the Laravel frame work to provide lorem ipsum text or random user data as filler content for websites. For extra features, I reworked my P2 xkcd style password generator using Laravel. I also added a feature that outputs the random user data as JSON so it can easily be used.

## Details for teaching team
No login required. 

I used some jQuery so that if the user selects the JSON option on the users generator, it will open in a new tab because that is cleaner than having the user hit the back button to return to the generator. Originally, I tried to impliment the JSON results by storing the $users array in a cookie, but it would often be larger than the maximum cookie size of 4093 bytes. 

I made custom errors page in my views, to use if the cookie expired before the users selected the JSON version, but after I stopped using the cookie version, the error page is now unused. I left it in so it would be easy to implement if I wanted to use it in the future.



## Wordlist Info from [P2](https://github.com/philipjamesk/p2):
I found a Google generated list of the 10,000 most common USA English words (see below). Since I knew that I only wanted words between 4 and 12 letters long in my password generator, and since the wordlist has extraneous whitespace characters in it. I wrote a short PHP script (wordlistmaker.php) that goes through the original word list, drops any words shorter than 4 characters and longer than 12, cleans the white space from them, and then serializes the new array so easy loading by the generator.php file for the password maker. The serialized file has 8752 words in it.

## Outside code
* Bootstrap: via MaxCDN <https://www.bootstrapcdn.com/>
* Bootstrap Yeti Template: via Bootswatch <https://www.bootstrapcdn.com/bootswatch/>
* Initial word list: <https://github.com/first20hours/google-10000-english/blob/master/google-10000-english-usa.txt>