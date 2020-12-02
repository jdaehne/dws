Smushit 1.0
===============

This snippet tries to optimise and compress PNG and JPEG images for better performance using the resmush.it optimisation API. This will help massively with Google Page Speed and can reduce image sizes by up to 70%. This will overwrite any existing images so is intended to be used as an output filter after pthumb or similar.

Snippet smushit
----------------

This snippet expects to be used as an output filter in the following format:

[[*MyImage:pthumb=`&w=300&h=300`:smushit]]

This will use pthumb to resize the image and then smush it to optimise the file. The thumbnail image is overwritten once and from then on is optimised. This affects first uncached performance so you should review if this is worthwhile. After caching it runs fine and then helps the page load speed by using the new files.

As this is a first release, your feedback and requests are welcome.


Further info
------------

For information and support, check out my blog:

http://www.qodo.co.uk/blog/twitterx-a-new-modx-extra-for-pulling-in-twitter-feeds-using-api-1.1/

Created by Stewart Orr @ Qodo Ltd (https://www.qodo.co.uk).