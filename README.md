FlavorOfTheDay
==============

A Twilio-powered PHP script for use with Culvers Flavor of the Day schedules.

Go to [http://stig.co/culvers](http://stig.co/culvers) to learn more.

Installation
------------

Make sure to have the Twilio PHP library ([found here](https://github.com/twilio/twilio-php)) in the same directory as this script.  You only really need the Services folder, the rest is docs and test code.  Go to your Twilio settings, and in the SMS section of the number you want to use, paste the link to this script on your server.  Then text it and you're good to go!

Coming soon
-----------

1. Support for multiple store locations.  The user can text "Verona" to get the Flavor of the Day at the Verona store, and "Madison" to get that store's flavor.

2. A powerful, user-friendly backend.  Right now you have to edit the PHP script itself in order to change flavors.  I want this to be something that can easily be changed by Culvers employees.

3. Support for multiple months.  Culvers publishes their flavor schedules about a week before the month ends.  I want to be able to add that schedule as soon as it comes out without compromising the current month's schedule.
