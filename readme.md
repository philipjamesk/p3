# P3 Lorem ispum and User Generator

## Live URL
<http://p3.philipjames.me>

## Demo Screencast
coming soon...

## Description
This website uses the Laravel frame work to provide lorem ipsum text or random user data as filler content for websites. For extra features, I reworked my P2 xkcd style password generator using Laravel. I also added a feature that outputs the random user data as JSON so it can easily be used.

## Details for teaching team
No login required. 

## Wordlist Info from [P2](https://github.com/philipjamesk/p2):
I found a Google generated list of the 10,000 most common USA English words (see below). Since I knew that I only wanted words between 4 and 12 letters long in my password generator, and since the wordlist has extraneous whitespace characters in it. I wrote a short PHP script (wordlistmaker.php) that goes through the original word list, drops any words shorter than 4 characters and longer than 12, cleans the white space from them, and then serializes the new array so easy loading by the generator.php file for the password maker. The serialized file has 8752 words in it. I put in echo statements so I would see some confirmation in the browser when I ran the script. The file can be run by going to <http://p2.philipjames.me/wordlistmaker.php>

## Outside code
* Bootstrap: via MaxCDN <https://www.bootstrapcdn.com/>
* Bootstrap Yeti Template: via Bootswatch <https://www.bootstrapcdn.com/bootswatch/>
* Initial word list: <https://github.com/first20hours/google-10000-english/blob/master/google-10000-english-usa.txt>