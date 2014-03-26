Simple Course Creator Post Meta
=====================

!!!!! WARNING !!!!! - start
---

This plugin is 95% finished but the incomplete part is, unfortunately, the most important part. Interested in helping?

Make sure you have Simple Course Creator activated. Download, install, and activate this plugin. Create a new course and add two or more posts to it. 

In one of the posts, view the post list. You will notice that the post meta author and date show the information for the current post... not the posts being retrieved.

The code responsible for this is in `includes/display/class-scc-post-meta-hook.php` in the `after_item_post_meta` method. 

Both `get_the_author_meta()` and `get_the_time()` will do their job just fine if placed directly into the output file for SCC. However, when hooked into that template from this plugin, the current post details are used instead. I need these functions to retrieve post information for the posts in the list... not the current post.

If you know what simple adjustments are needed, please fork the repo and submit a pull request with the appropriate changes so you get your credit!

Thanks a ton.

!!!!! WARNING !!!!! - end
---

This is an add-on plugin for use with the [Simple Course Creator](https://github.com/sdavis2702/simple-course-creator) plugin.

Simple Course Creator is designed to easily link posts together in a series and output that series list in the content of each included post.

This post meta add-on outputs additional information about each post in the post listing. The information displays right beneath the post title.

### How It Works
---

Once activated, the post authors and dates published will appear beneath the post titles.

### Settings and Customizer
---

Once activated, new options will be added to the SCC settings page under the display tab. You can hide the author, date, or both.

New customizer options will also be available. If you have [Simple Course Creator Customizer](http://buildwpyourself.com/downloads/scc-customizer/) installed, your new settings will be merged. Otherwise, they will appear on their own.

### Bugs and Contributions
---

If you notice any mistakes, feel free to fork the repo and submit a pull request with your corrections. The same is true of any features you feel should be added or changes that can be made. 

### License
---

This plugin, like WordPress, is licensed under the GPL. Do what you want with it. I seriously don't care. 

### Developer
---

I'm Sean. I created the [Volatyl Framework](http://volatylthemes.com) for WordPress. I like to do most of my WordPress stuff on [Build WordPress Yourself](http://buildwpyourself.com/). I also write stuff on my [personal site](http://seandavis.co) and [SDavis Media](http://sdavismedia.com). Follow me on the [Twitter](http://sdvs.me/twitter) machine.

Meanwhile, tell me... is this plugin useful to you? If so, consider buying me a box of "Tazo: Awake - English Breakfast Black Tea." I need ALL the energiez. Thanks. [Donate Black Tea](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=52HQDSEUA542S)
