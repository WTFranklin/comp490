This is the individual primer project for Comp 490L. I made my page using PHP and some javascript/jQuery that interfaces with the Weather API from http://www.wunderground.com/. The log here will be very similar to the entries written on GitHub, but with a few extra details if necessary.

1) Initial commit - I haven\'92t used GitHub in a while and was never very familiar with it. My first commit was to relearn how to use it.

2) Testing my html file - Did another commit with multiple files to make sure all was working the way I expected it to.

3) More functionality - I got the API working in the easiest way possible, albeit not suing the GET verb yet. I held off on this detail because the API was difficult to figure out since the documentation was a bit vague if you haven\'92t worked with too many API\'92s in the past, like myself. The extra functionality was testing out the various ways to pull data from their server and I wanted to make sure that I used the most efficient method available.

4) Working on json repsonse - I ran into a couple issues with pulling the correct data. I was going to walk away for a little bit at this point to clear my head so I made a commit. I ended up coming back to work on the project much sooner than expected.

5) Changing key - somewhat of a misnomer for the title, but was experimenting by with the different fields to try to pull from. I was unsuccessful in getting the data I wanted, but wanted to back up at this point for easy rollback if needed.

6) Finally getting somewhere - Was able to start parsing out the data in a meaningful way. Good place to back up and continue.

7) Querying and placement - Was able to get the queries to pull the correct, relevant data at this point and started placing it into the web page when pulled via jQuery calls. 

8) Final commit - Made the page respond to the GET verb, meaning that the values from the form were the values used in the query to the API. Both city and state are required for the web application to perform correctly and I included checks to make sure that the values provided made sense. Will let the user know if the city doesn't exist in the state. I also cleaned up the header by moving all javascript code and CSS code into their own respective files and placed in their own folders for organization. As an added UI feature, I did a bind for the enter key, so pressing the "Click for Weather" button isn't completely  necessary, but is an option for users who prefer the mouse over the keyboard.
