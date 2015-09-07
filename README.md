{\rtf1\ansi\ansicpg1252\cocoartf1348\cocoasubrtf170
{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural

\f0\fs24 \cf0 This is the individual primer project for Comp 490L. I made my page using PHP and some javascript/jQuery that interfaces with the Weather API from http://www.wunderground.com/. The log here will be very similar to the entries written on GitHub, but with a few extra details if necessary.\
\
1) Initial commit - I haven\'92t used GitHub in a while and was never very familiar with it. My first commit was to relearn how to use it.\
\
2) Testing my html file - Did another commit with multiple files to make sure all was working the way I expected it to.\
\
3) More functionality - I got the API working in the easiest way possible, albeit not suing the GET verb yet. I held off on this detail because the API was difficult to figure out since the documentation was a bit vague if you haven\'92t worked with too many API\'92s in the past, like myself. The extra functionality was testing out the various ways to pull data from their server and I wanted to make sure that I used the most efficient method available.\
\
4) Working on json repsonse - I ran into a couple issues with pulling the correct data. I was going to walk away for a little bit at this point to clear my head so I made a commit. I ended up coming back to work on the project much sooner than expected.\
\
5) Changing key - somewhat of a misnomer for the title, but was experimenting by with the different fields to try to pull from. I was unsuccessful in getting the data I wanted, but wanted to back up at this point for easy rollback if needed.\
\
6) Finally getting somewhere - Was able to start parsing out the data in a meaningful way. Good place\
\pard\tx560\tx1120\tx1680\tx2240\tx2800\tx3360\tx3920\tx4480\tx5040\tx5600\tx6160\tx6720\sl-240\pardirnatural
\cf0 to back up and continue.\
\
7) Querying and placement - Was able to get the queries to pull the correct, relevant data at this point and started placing it into the web page when pulled via jQuery calls. \
\
8) Final commit - Made the page respond to the GET verb, meaning that the values from the form were the values used in the query to the API. Both city and state are required for the web application to perform correctly and I included checks to make sure that the values provided made sense. Will let the user know if the city doesn\'92t exist in the state. I also cleaned up the header by moving all javascript code and CSS code into their own respective files and placed in their own folders for organization. As an added UI feature, I did a bind for the enter key, so pressing the \'93Click for Weather\'94 button isn\'92t necessary, but is an option for users who prefer the mouse over the keyboard.}